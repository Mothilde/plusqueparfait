<?php

namespace InviteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORMTable(name="invites")
 * @ORMEntity
 */
class Invites
{
    /**
     * @ORMColumn(name="id", type="int", nullable="false")
     * @ORMId
     * @ORMGeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORMColumn(name="nom_invite", type="string", length=255, nullable="true")
     */
    private $nomInvite;

    /**
     * @var boolean
     */
    private $vegetarien;


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
