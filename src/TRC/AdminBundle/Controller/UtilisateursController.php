<?php

namespace TRC\AdminBundle\Controller;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Form\Forms;
use TRC\CoreBundle\Entity\Profil;
use TRC\CoreBundle\Entity\Agence;
use TRC\CoreBundle\Entity\BOC;
use TRC\CoreBundle\Entity\Fonction;
use TRC\CoreBundle\Entity\Utilisateur;
use TRC\CoreBundle\Form\UtilisateurType;

use TRC\CoreBundle\Entity\DDP;
use TRC\CoreBundle\Form\DDPType;

class UtilisateursController extends Controller
{

    public function utilisateursAction(Request $request)
    {
    	$sysmatricule = $this->get('trc_core.matricule');
    	$sysjournal = $this->get('trc_core.journal');
    	$em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $moi = $em->getRepository('TRCCoreBundle:Utilisateur')
                ->findOneBycompte($user);
        $p = 1;
        $nbre = 3;
        $criteres = array("moi"=>$moi);
        if( 
            $request->query->get('p')!== null 
            && 
            !empty($request->query->get('p'))
          ){
                $p = $request->query->get('p');
        }
        $id = ($p-1)*$nbre;
        if($id < 0)
            $id = 0;
        $sql = 'SELECT u FROM TRCCoreBundle:Utilisateur u WHERE u != :moi';
        $query = $em->createQuery($sql);
        $query->setParameters(array(
            "moi"=>$moi));
        $query->setFirstResult($id)->setMaxResults($nbre);

        $utilisateurs = $query->getResult();
        /*
        $utilisateurs = $em->getRepository('TRCCoreBundle:Utilisateur')
                    ->findBy(
                        $criteres,
                        array(),
                        $nbre,
                        $id
                        );
        //*/
        $servicePagination = $this->get('trc_core.pagination');

        $sup = "groupe=rien";
        $objet = 'Utilisateur';
        $url = $this->generateUrl('trc_admin_utilisateurs');
        $urlRoute = 'trc_admin_utilisateurs';
        $pagination = $servicePagination->pagination2($p,$url,$urlRoute,$criteres,$nbre,$sql);
        //$pagination = $servicePagination->pagination2($objet,$p,$url,$urlRoute,$criteres,$nbre);
        return $this->render('TRCAdminBundle:Utilisateurs:utilisateurs.html.twig',
            array(
                'utilisateurs'=>$utilisateurs,
                'pagination'=>$pagination
                ));
    }
    public function utilisateursVoirAction(Request $request, $matricule){

        $em = $this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository('TRCCoreBundle:Utilisateur')
                        ->findOneByMatricule($matricule);
        if($utilisateur === null)
            throw new NotFoundHttpException("Error [$matricule] INCONNU");
        
        $poste = $em->getRepository('TRCCoreBundle:Fonction')
                    ->findOneBy(
                        array('acteur'=>$utilisateur->getActeur(),
                            'active'=>true,
                            'archive'=>false),
                        array('dateaffectation'=>'DESC'),
                        null,
                        0);
        $ddp = new DDP();
       // $formFactory = createFormFactory();
        $form = $this->get('form.factory')->create(new DDPType(),$ddp);

        if($form->handleRequest($request)->isValid() && !is_null($poste) &&
            $poste->getProfil()->getDdp()){
            $ddp->setFonction($poste);
            $em->persist($ddp);
            $em->flush();

            $sysnoti = $this->get('trc_core.noti');
                $sysnoti->notifier(array(
                "acteur"=>$utilisateur->getActeur(),
                "titre"=>"Ajout de Délégation de Pouvoir",
                "contenu"=>" un niveau de compétence a été associé à votre profil <br>".$ddp->detail()
                ));

            return $this->redirect($this->generateUrl('trc_admin_utilisateurs_voir',array('matricule'=>$matricule)));
        }
        
        return $this->render('TRCAdminBundle:Utilisateurs:utilisateursVoir.html.twig',array('utilisateur'=>$utilisateur,'poste'=>$poste,'form'=>$form->createView()));
    }
    public function utilisateursAjouterAction(Request $request,$matricule = null){

        $em = $this->getDoctrine()->getManager();
        $gu = $this->get('trc_core.gu');
        $utilisateur = new Utilisateur();
        $imageFile = $utilisateur->getImage();
        $formFactory = Forms::createFormFactory();
        $form = $this->get('form.factory')->create(new UtilisateurType(),$utilisateur);
        if($form->handleRequest($request)->isValid()){

            if($utilisateur->getImage() == null)  $utilisateur->setImage($imageFile);
            else{
                $file = $form['image']->getData();
                $utilisateur->setImage($file);
                
            }
            $utilisateur = $gu->creerUtilisateur($utilisateur,$this->getUser());
            $em->persist($utilisateur);
            $em->flush();

            return $this->redirect($this->generateUrl('trc_admin_utilisateurs_voir',array('matricule'=>$utilisateur->getMatricule())));
        }
        return $this->render('TRCAdminBundle:Utilisateurs:utilisateursAjouter.html.twig',
            array(
                'form'=>$form->createView(),
                'objet'=>$utilisateur
                ));
    }

    public function affectationAction(Request $request,$matricule,$entite,$idfonction = null){

        $em = $this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository('TRCCoreBundle:Utilisateur')
                        ->findOneByMatricule($matricule);
        $fonction = null;
        $profils = array();
        if($utilisateur === null)
            throw $this->createNotFoundException("Error [$matricule] INCONNU | Utilisateur");

        $etape = "choix-entite";
        $title = "Choix de l'entité";
        $entites = $em->getRepository('TRCCoreBundle:'.$entite)
                    ->findAll();
        
        if($idfonction !== null){
            $fonction = $em->getRepository('TRCCoreBundle:Fonction')
                        ->findOneByMatricule($idfonction);
       
            if(
                $fonction === null
                ||
                $fonction->getActeur()->getId() != $utilisateur->getActeur()->getId()
                )
                throw $this->createNotFoundException("Error [$matricule] INCONNU");
            $title = "Choix de profil";
            $etape = "Choix-profil";
            $profils =  $em->getRepository('TRCCoreBundle:Profil')
                        ->findByEntite($entite);

        }
        if($request->isMethod('POST')){
            $sysmatricule = $this->get('trc_core.matricule');
            $sysjournal = $this->get('trc_core.journal');
            $action = $request->request->get('action');

            if($action == 'entite'){
                $params = $request->request->all();
                

                $matricule = $request->request->get('input-entite');
                $entity = $em->getRepository('TRCCoreBundle:'.$entite)
                    ->findOneByMatricule($matricule);
                foreach ($em->getRepository('TRCCoreBundle:Fonction')->findByActeur($utilisateur->getActeur()) as $key => $value) {
                    $value->setActive(false);
                    if(is_null($value->getDateretrait()))
                        $value->setDateretrait(new \DateTime());
                }
                $utilisateur->getCompte()->setRoles(array());
                $fonction = new Fonction();
                $fonction->setActeur($utilisateur->getActeur());
                $fonction->setEntite($entity->getEntite());
                $fonction->setMatricule($sysmatricule->matriculeStandard($fonction));
                $em->persist($fonction);

                $sysjournal->enregistrer(array(
                    'user'=>$this->getUser(),
                    'type'=>null,
                    'contenu'=>"affectation de ".$utilisateur->getMatricule()." à ".$entity->getNom()
                    ));
                $em->flush();

                return $this->redirect($this->generateUrl('trc_admin_affectation_de_profil_a_une_fonction',array('matricule'=>$utilisateur->getMatricule(),
                    'entite'=>$entite,
                    'idfonction'=>$fonction->getMatricule())));
            }elseif ($action == 'profil') {
                $matricule = $request->request->get('input-profil');
                $profil = $em->getRepository('TRCCoreBundle:Profil')
                    ->findOneByMatricule($matricule);
                $sysgu = $this->get('trc_core.gu');

                if($profil->getResponsable() && 
                    $sysgu->aUnResponsable($fonction->getEntite())
                    ){
                    $responsable = $sysgu->getResponsableEntite($fonction->getEntite());
                    $rr = $sysgu->getEntite($fonction->getEntite());
                    throw $this->createNotFoundException($rr->getNom().' possède déjà un responsable : '.$responsable->getPrenom()." ".$responsable->getNom());
                }
                $fonction->setProfil($profil);
                $utilisateur->getCompte()->setRoles(array($profil->getRole()));
                $em->flush();
                return $this->redirect($this->generateUrl('trc_admin_utilisateurs_voir',array('matricule'=>$utilisateur->getMatricule())));
            }
        }
        return $this->render('TRCAdminBundle:Utilisateurs:affectation.html.twig',array(
            'utilisateur'=>$utilisateur,
            'etape'=>$etape,
            'entites'=>$entites,
            'title'=>$title,
            'fonction'=>$fonction,
            'profils'=>$profils));
    }
}
