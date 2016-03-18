<?php 

namespace  TRC\CoreBundle\Systemes\Matricule;
use Doctrine\Common\Persistence\ObjectManager;
use TRC\CoreBundle\Systemes\General\Core;
class Matricule{

	protected $em;

	public function setEntityManager(ObjectManager $em){
	   $this->em = $em;
	}

	public function matriculeStandard($object){

		$temp = explode("\\", get_class($object));
		$classe = $temp[count($temp) - 1];
		$index = count($this->em->getRepository('TRCCoreBundle:'.$classe)->findAll())+1;
		$date = date('dmY');
		$matricule = $this->ct($classe).Core::position($index).$date;
		return $matricule;
	}

	public function rsDDC($ddc){

		$ctc = $ddc->getTdc()->getCode();
		$t = $ddc->getTddc()->getCode();
		//$temp = explode("\\", get_class($));
		//$classe = $temp[count($temp) - 1];
		$index = count($this->em->getRepository('TRCCoreBundle:DDC\DDC')
			->findBy(
				array(
					"tddc"=>$ddc->getTddc(),
					"tdc"=>$ddc->getTdc()
					),array(),null,0))+1;
		$date = date('dmY');
		$matricule = $t.$ctc.Core::position($index).$date;
		return $matricule;
	}
	public function rcDDC($ddc){

		$ctc = $ddc->getTdc()->getCode();
		$radical = $ddc->getClient()->getRadical();
		//$temp = explode("\\", get_class($));
		//$classe = $temp[count($temp) - 1];
		$index = count($this->em->getRepository('TRCCoreBundle:DDC\DDC')
			->findBy(
				array(
					"client"=>$ddc->getClient(),
					"tdc"=>$ddc->getTdc()
					),array(),null,0))+1;
		$date = date('dmY');
		$matricule = $radical.$ctc.Core::position($index).$date;
		return $matricule;
	}

	private function ct($chaine){

		if(strlen($chaine) >= 0 )
			return strtoupper(substr($chaine, 0,3));
		else
			return strtoupper($chaine);
	}
}