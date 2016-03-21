<?php

namespace InviteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invites
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
}
