<?php

namespace TRC\CoreBundle\Entity\DDC;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fichier
 *
 * @ORM\Table(name="fichier")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\DDC\FichierRepository")
 */
class Fichier
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
     * @ORM\Column(name="nom", type="string", length=255,nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="rs", type="string", length=255,nullable=true)
     */
    private $rs;

    /**
     * @var string
     *
     * @ORM\Column(name="nomoriginal", type="string", length=255)
     */
    private $nomoriginal;

    /**
     * @var string
     *
     * @ORM\Column(name="chemin", type="string", length=255)
     */
    private $chemin;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    public function detail(){
        return "nom original : ".$this->nomoriginal.
                "; nom : ".$this->nom.
                ";chemin : ".$this->chemin.
                "; type : ".$this->type;
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
     * @return Fichier
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
     * Set chemin
     *
     * @param string $chemin
     *
     * @return Fichier
     */
    public function setChemin($chemin)
    {
        $this->chemin = $chemin;

        return $this;
    }

    /**
     * Get chemin
     *
     * @return string
     */
    public function getChemin()
    {
        return $this->chemin;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Fichier
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set nomoriginal
     *
     * @param string $nomoriginal
     *
     * @return Fichier
     */
    public function setNomoriginal($nomoriginal)
    {
        $this->nomoriginal = $nomoriginal;

        return $this;
    }

    /**
     * Get nomoriginal
     *
     * @return string
     */
    public function getNomoriginal()
    {
        return $this->nomoriginal;
    }

    /**
     * Set rs
     *
     * @param string $rs
     *
     * @return Fichier
     */
    public function setRs($rs)
    {
        $this->rs = $rs;

        return $this;
    }

    /**
     * Get rs
     *
     * @return string
     */
    public function getRs()
    {
        return $this->rs;
    }
}
