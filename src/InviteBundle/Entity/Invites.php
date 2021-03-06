<?php

namespace InviteBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * invites
 */
class Invites
{
    /**

     * @var int

     */
    private $id;

    /**

     * @var string

     */
    private $nomInvite;

    /**
     * @var boolean
     */
    private $vegetarien;

    /**
     * @var ArrayCollection
     */
    private $listerepas;


    /**
     * Constructeur
     */
    public function __construct()
    {
        $this->listerepas = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomInvite
     *
     * @param string $nomInvite
     * @return Invites
     */
    public function setNomInvite($nomInvite)
    {
        $this->nomInvite = $nomInvite;

        return $this;
    }

    /**
     * Get nomInvite
     *
     * @return string 
     */
    public function getNomInvite()
    {
        return $this->nomInvite;
    }

    /**
     * Set vegetarien
     *
     * @param boolean $vegetarien
     * @return Invites
     */
    public function setVegetarien($vegetarien)
    {
        $this->vegetarien = $vegetarien;

        return $this;
    }

    /**
     * Get vegetarien
     *
     * @return boolean
     */
    public function getVegetarien()
    {

        return $this->vegetarien;
    }
}
