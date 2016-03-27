<?php

namespace TRC\CoreBundle\Entity\Client;

use Doctrine\ORM\Mapping as ORM;

/**
 * EDCC
 *
 * @ORM\Table(name="e_d_c_c")
 * @ORM\Entity(repositoryClass="TRC\CoreBundle\Repository\Client\EDCCRepository")
 */
class EDCC
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
     * @ORM\Column(name="numeroCompte", type="string", length=100, unique=true)
     */
    private $numeroCompte;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var float
     *
     * @ORM\Column(name="solde", type="float")
     */
    private $solde;

    /**
    * @ORM\ManyToOne(targetEntity="TRC\CoreBundle\Entity\Client\Client",cascade={"remove", "persist"})
    * @ORM\JoinColumn(nullable=true)
    */
    private $client;


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
     * Set numeroCompte
     *
     * @param string $numeroCompte
     *
     * @return EDCC
     */
    public function setNumeroCompte($numeroCompte)
    {
        $this->numeroCompte = $numeroCompte;

        return $this;
    }

    /**
     * Get numeroCompte
     *
     * @return string
     */
    public function getNumeroCompte()
    {
        return $this->numeroCompte;
    }

    /**
     * Set solde
     *
     * @param float $solde
     *
     * @return EDCC
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;

        return $this;
    }

    /**
     * Get solde
     *
     * @return float
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set client
     *
     * @param \TRC\CoreBundle\Entity\Client\Client $client
     *
     * @return EDCC
     */
    public function setClient(\TRC\CoreBundle\Entity\Client\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \TRC\CoreBundle\Entity\Client\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return EDCC
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
}
