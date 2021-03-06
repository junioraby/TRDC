<?php

namespace TRC\CoreBundle\Entity\DDC;

use Doctrine\ORM\Mapping as ORM;

/**
 * DOCDDC
 *
 * @ORM\Table(name="d_o_c_d_d_c")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\DDC\DOCDDCRepository")
 */
class DOCDDC
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var bool
     *
     * @ORM\Column(name="charge", type="boolean")
     */
    private $charge;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\DDC\DDC",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $ddc;

    public function __construct(){
        $this->charge = false;
    }
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return DOCDDC
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set charge
     *
     * @param boolean $charge
     *
     * @return DOCDDC
     */
    public function setCharge($charge)
    {
        $this->charge = $charge;

        return $this;
    }

    /**
     * Get charge
     *
     * @return bool
     */
    public function getCharge()
    {
        return $this->charge;
    }

    /**
     * Set ddc
     *
     * @param \TRC\CoreBundle\Entity\DDC\DDC $ddc
     *
     * @return DOCDDC
     */
    public function setDdc(\TRC\CoreBundle\Entity\DDC\DDC $ddc)
    {
        $this->ddc = $ddc;

        return $this;
    }

    /**
     * Get ddc
     *
     * @return \TRC\CoreBundle\Entity\DDC\DDC
     */
    public function getDdc()
    {
        return $this->ddc;
    }
}
