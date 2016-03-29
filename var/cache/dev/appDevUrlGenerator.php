<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_client_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TRC\\ClientBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/clients/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_client_recherche' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TRC\\ClientBundle\\Controller\\DefaultController::rechercheAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/clients/recherche',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_client_consulter' => array (  0 =>   array (    0 => 'radical',  ),  1 =>   array (    '_controller' => 'TRC\\ClientBundle\\Controller\\DefaultController::consulterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'radical',    ),    1 =>     array (      0 => 'text',      1 => '/clients',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_client_ajouter_comptes' => array (  0 =>   array (    0 => 'radical',  ),  1 =>   array (    '_controller' => 'TRC\\ClientBundle\\Controller\\DefaultController::ajouterCompteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comptes',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'radical',    ),    2 =>     array (      0 => 'text',      1 => '/clients',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_client_modifier_comptes' => array (  0 =>   array (    0 => 'radical',    1 => 'id',  ),  1 =>   array (    '_controller' => 'TRC\\ClientBundle\\Controller\\DefaultController::ajouterCompteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/comptes',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'radical',    ),    3 =>     array (      0 => 'text',      1 => '/clients',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_client_voir_rubrique' => array (  0 =>   array (    0 => 'radical',    1 => 'rubrique',  ),  1 =>   array (    '_controller' => 'TRC\\ClientBundle\\Controller\\DefaultController::voirrubriqueAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'rubrique',    ),    1 =>     array (      0 => 'text',      1 => '/voir',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'radical',    ),    3 =>     array (      0 => 'text',      1 => '/clients',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_client_identite' => array (  0 =>   array (    0 => 'radical',  ),  1 =>   array (    '_controller' => 'TRC\\ClientBundle\\Controller\\MAJController::identiteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/identite',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'radical',    ),    2 =>     array (      0 => 'text',      1 => '/clients',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_client_coordonnee' => array (  0 =>   array (    0 => 'radical',  ),  1 =>   array (    '_controller' => 'TRC\\ClientBundle\\Controller\\MAJController::coordonneesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/coordonnées',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'radical',    ),    2 =>     array (      0 => 'text',      1 => '/clients',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_client_employeur' => array (  0 =>   array (    0 => 'radical',  ),  1 =>   array (    '_controller' => 'TRC\\ClientBundle\\Controller\\MAJController::employeurAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/employeur',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'radical',    ),    2 =>     array (      0 => 'text',      1 => '/clients',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_client_profession' => array (  0 =>   array (    0 => 'radical',  ),  1 =>   array (    '_controller' => 'TRC\\ClientBundle\\Controller\\MAJController::professionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profession',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'radical',    ),    2 =>     array (      0 => 'text',      1 => '/clients',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_client_revenu' => array (  0 =>   array (    0 => 'radical',  ),  1 =>   array (    '_controller' => 'TRC\\ClientBundle\\Controller\\MAJController::revenuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/revenu',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'radical',    ),    2 =>     array (      0 => 'text',      1 => '/clients',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_client_logement' => array (  0 =>   array (    0 => 'radical',  ),  1 =>   array (    '_controller' => 'TRC\\ClientBundle\\Controller\\MAJController::logementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logement',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'radical',    ),    2 =>     array (      0 => 'text',      1 => '/clients',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_client_pac' => array (  0 =>   array (    0 => 'radical',  ),  1 =>   array (    '_controller' => 'TRC\\ClientBundle\\Controller\\MAJController::pacAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pac',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'radical',    ),    2 =>     array (      0 => 'text',      1 => '/clients',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trcddc_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TRCDDCBundle:Default:index',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ddc/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trcddc_init' => array (  0 =>   array (    0 => 'code',    1 => 'type',  ),  1 =>   array (    '_controller' => 'TRCDDCBundle:Default:init',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '-',      2 => '[^/]++',      3 => 'type',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\-]++',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/ddc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trcddc_def_client' => array (  0 =>   array (    0 => 'rs',  ),  1 =>   array (    '_controller' => 'TRCDDCBundle:Default:defclient',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'rs',    ),    1 =>     array (      0 => 'text',      1 => '/ddc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trcddc_ddc_edp' => array (  0 =>   array (    0 => 'rc',  ),  1 =>   array (    '_controller' => 'TRC\\DDCBundle\\Controller\\DocsController::edpAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'rc',    ),    1 =>     array (      0 => 'text',      1 => '/ddc/edp',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trcddc_ddc_upload_file' => array (  0 =>   array (    0 => 'rc',    1 => 'type',  ),  1 =>   array (    '_controller' => 'TRC\\DDCBundle\\Controller\\DocsController::uploadAction',  ),  2 =>   array (    'type' => 'edp|doc',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'edp|doc',      3 => 'type',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'rc',    ),    2 =>     array (      0 => 'text',      1 => '/ddc/upload-file',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trcddc_consulter' => array (  0 =>   array (    0 => 'rc',  ),  1 =>   array (    '_controller' => 'TRCDDCBundle:Default:ddcvoir',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'rc',    ),    1 =>     array (      0 => 'text',      1 => '/ddc/consulter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trcddc_decision_commentaire_ddc' => array (  0 =>   array (    0 => 'rc',    1 => 'phase',    2 => 'etat',  ),  1 =>   array (    '_controller' => 'TRCDDCBundle:Default:decisionCommentaire',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'etat',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'phase',    ),    2 =>     array (      0 => 'text',      1 => '/decision-commentaire',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'rc',    ),    4 =>     array (      0 => 'text',      1 => '/ddc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trcddc_ajout_docs' => array (  0 =>   array (    0 => 'rs',  ),  1 =>   array (    '_controller' => 'TRC\\DDCBundle\\Controller\\DocsController::ajoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/documents-joints-au-dossier',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'rs',    ),    2 =>     array (      0 => 'text',      1 => '/ddc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trcddc_voir_docs' => array (  0 =>   array (    0 => 'rs',  ),  1 =>   array (    '_controller' => 'TRC\\DDCBundle\\Controller\\DocsController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/voir-documents',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'rs',    ),    2 =>     array (      0 => 'text',      1 => '/ddc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trcddc_terminer_phase_etat_ddc' => array (  0 =>   array (    0 => 'rc',    1 => 'etape',    2 => 'codeEtape',  ),  1 =>   array (    '_controller' => 'TRC\\DDCBundle\\Controller\\DocsController::terminerEtapeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'codeEtape',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'etape',    ),    2 =>     array (      0 => 'text',      1 => '/terminer',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'rc',    ),    4 =>     array (      0 => 'text',      1 => '/ddc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trcddc_get_client_ajax' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TRCDDCBundle:Default:getajaxclient',  ),  2 =>   array (    'method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ddc/client/ajax',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TRC\\AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_admin_utilisateurs' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TRC\\AdminBundle\\Controller\\UtilisateursController::utilisateursAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/utilisateurs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_admin_utilisateurs_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TRC\\AdminBundle\\Controller\\UtilisateursController::utilisateursAjouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/utilisateurs/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_admin_utilisateurs_voir' => array (  0 =>   array (    0 => 'matricule',  ),  1 =>   array (    '_controller' => 'TRC\\AdminBundle\\Controller\\UtilisateursController::utilisateursVoirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'matricule',    ),    1 =>     array (      0 => 'text',      1 => '/admin/utilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_admin_utilisateurs_affectation_a_une_entite' => array (  0 =>   array (    0 => 'matricule',    1 => 'entite',  ),  1 =>   array (    '_controller' => 'TRC\\AdminBundle\\Controller\\UtilisateursController::affectationAction',  ),  2 =>   array (    'entite' => 'Agence|CIC|BOC|Zone',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/affectation',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'Agence|CIC|BOC|Zone',      3 => 'entite',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'matricule',    ),    3 =>     array (      0 => 'text',      1 => '/admin/utilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_admin_affectation_de_profil_a_une_fonction' => array (  0 =>   array (    0 => 'matricule',    1 => 'entite',    2 => 'idfonction',  ),  1 =>   array (    '_controller' => 'TRC\\AdminBundle\\Controller\\UtilisateursController::affectationAction',  ),  2 =>   array (    'entite' => 'Agence|CIC|BOC|Zone',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idfonction',    ),    1 =>     array (      0 => 'text',      1 => '/affectation',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => 'Agence|CIC|BOC|Zone',      3 => 'entite',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'matricule',    ),    4 =>     array (      0 => 'text',      1 => '/admin/utilisateur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_admin_entites' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TRC\\AdminBundle\\Controller\\EntitesController::entitesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/entites',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_admin_entites_ajouter' => array (  0 =>   array (    0 => 'entite',  ),  1 =>   array (    '_controller' => 'TRC\\AdminBundle\\Controller\\EntitesController::entitesAjoutAction',  ),  2 =>   array (    'entite' => 'Agence|CIC|BOC|Zone',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'Agence|CIC|BOC|Zone',      3 => 'entite',    ),    1 =>     array (      0 => 'text',      1 => '/admin/entites/ajouter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_admin_entites_modifier' => array (  0 =>   array (    0 => 'entite',    1 => 'matricule',  ),  1 =>   array (    '_controller' => 'TRC\\AdminBundle\\Controller\\EntitesController::entitesAjoutAction',  ),  2 =>   array (    'entite' => 'Agence|CIC|BOC|Zone',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'matricule',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'Agence|CIC|BOC|Zone',      3 => 'entite',    ),    2 =>     array (      0 => 'text',      1 => '/admin/entites/modifier',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_admin_entites_voir_une' => array (  0 =>   array (    0 => 'entite',    1 => 'code',  ),  1 =>   array (    '_controller' => 'TRC\\AdminBundle\\Controller\\EntitesController::entitesVoirUneAction',  ),  2 =>   array (    'entite' => 'Agence|CIC|BOC|Zone',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'code',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'Agence|CIC|BOC|Zone',      3 => 'entite',    ),    2 =>     array (      0 => 'text',      1 => '/admin/entites',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_admin_entites_par_categorie' => array (  0 =>   array (    0 => 'entite',  ),  1 =>   array (    '_controller' => 'TRC\\AdminBundle\\Controller\\EntitesController::entitesParCategorieAction',  ),  2 =>   array (    'entite' => 'Agence|CIC|BOC|Zone',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'Agence|CIC|BOC|Zone',      3 => 'entite',    ),    1 =>     array (      0 => 'text',      1 => '/admin/entites',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_admin_profils' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TRC\\AdminBundle\\Controller\\ProfilsController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/profils',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_admin_profils_voir' => array (  0 =>   array (    0 => 'matricule',  ),  1 =>   array (    '_controller' => 'TRC\\AdminBundle\\Controller\\ProfilsController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'matricule',    ),    1 =>     array (      0 => 'text',      1 => '/admin/profils',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_admin_systemes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TRC\\AdminBundle\\Controller\\SystemesController::systemesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/systemes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_admin_tdc' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TRC\\AdminBundle\\Controller\\CreditsController::creditsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/crédits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_admin_tdc_voir' => array (  0 =>   array (    0 => 'code',  ),  1 =>   array (    '_controller' => 'TRC\\AdminBundle\\Controller\\CreditsController::creditsvoirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'code',    ),    1 =>     array (      0 => 'text',      1 => '/admin/crédits',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_core_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TRC\\CoreBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_core_error' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TRC\\CoreBundle\\Controller\\DefaultController::errorAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/erreur',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_core_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'TRC\\CoreBundle\\Controller\\DefaultController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deconnexion',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_core_archiver' => array (  0 =>   array (    0 => 'classe',    1 => 'id',  ),  1 =>   array (    '_controller' => 'TRC\\CoreBundle\\Controller\\DefaultController::archiverAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'classe',    ),    2 =>     array (      0 => 'text',      1 => '/archivage',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_core_notification' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TRC\\CoreBundle\\Controller\\DefaultController::notificationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/notification',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trc_core_resume_ddc' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'TRC\\CoreBundle\\Controller\\DefaultController::resumeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/resumeddc',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
