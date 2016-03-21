<?php

namespace CreationplatBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * creationplat
 */
class creationplat
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var string
     */
    private $ingredient1;

    /**
     * @var string
     */
    private $ingredients2;

    /**
     * @var string
     */
    private $ingredient3;

    /**
     * @var string
     */
    private $ingredient4;

    /**
     * @var string
     */
    private $ingredient5;

    /**
     * @var string
     */
    private $ingredient6;

    /**
     * @var string
     */
    private $ingredient7;

    /**
     * @var string
     */
    private $ingredient8;

    /**
     * @var string
     */
    private $ingredient9;

    /**
     * @var string
     */
    private $ingredient10;


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
     * Set nom
     *
     * @param string $nom
     * @return creationplat
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
     * Set photo
     *
     * @param string $photo
     * @return creationplat
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set ingredient1
     *
     * @param string $ingredient1
     * @return creationplat
     */
    public function setIngredient1($ingredient1)
    {
        $this->ingredient1 = $ingredient1;

        return $this;
    }

    /**
     * Get ingredient1
     *
     * @return string 
     */
    public function getIngredient1()
    {
        return $this->ingredient1;
    }

    /**
     * Set ingredients2
     *
     * @param string $ingredients2
     * @return creationplat
     */
    public function setIngredients2($ingredients2)
    {
        $this->ingredients2 = $ingredients2;

        return $this;
    }

    /**
     * Get ingredients2
     *
     * @return string 
     */
    public function getIngredients2()
    {
        return $this->ingredients2;
    }

    /**
     * Set ingredient3
     *
     * @param string $ingredient3
     * @return creationplat
     */
    public function setIngredient3($ingredient3)
    {
        $this->ingredient3 = $ingredient3;

        return $this;
    }

    /**
     * Get ingredient3
     *
     * @return string 
     */
    public function getIngredient3()
    {
        return $this->ingredient3;
    }

    /**
     * Set ingredient4
     *
     * @param string $ingredient4
     * @return creationplat
     */
    public function setIngredient4($ingredient4)
    {
        $this->ingredient4 = $ingredient4;

        return $this;
    }

    /**
     * Get ingredient4
     *
     * @return string 
     */
    public function getIngredient4()
    {
        return $this->ingredient4;
    }

    /**
     * Set ingredient5
     *
     * @param string $ingredient5
     * @return creationplat
     */
    public function setIngredient5($ingredient5)
    {
        $this->ingredient5 = $ingredient5;

        return $this;
    }

    /**
     * Get ingredient5
     *
     * @return string 
     */
    public function getIngredient5()
    {
        return $this->ingredient5;
    }

    /**
     * Set ingredient6
     *
     * @param string $ingredient6
     * @return creationplat
     */
    public function setIngredient6($ingredient6)
    {
        $this->ingredient6 = $ingredient6;

        return $this;
    }

    /**
     * Get ingredient6
     *
     * @return string 
     */
    public function getIngredient6()
    {
        return $this->ingredient6;
    }

    /**
     * Set ingredient7
     *
     * @param string $ingredient7
     * @return creationplat
     */
    public function setIngredient7($ingredient7)
    {
        $this->ingredient7 = $ingredient7;

        return $this;
    }

    /**
     * Get ingredient7
     *
     * @return string 
     */
    public function getIngredient7()
    {
        return $this->ingredient7;
    }

    /**
     * Set ingredient8
     *
     * @param string $ingredient8
     * @return creationplat
     */
    public function setIngredient8($ingredient8)
    {
        $this->ingredient8 = $ingredient8;

        return $this;
    }

    /**
     * Get ingredient8
     *
     * @return string 
     */
    public function getIngredient8()
    {
        return $this->ingredient8;
    }

    /**
     * Set ingredient9
     *
     * @param string $ingredient9
     * @return creationplat
     */
    public function setIngredient9($ingredient9)
    {
        $this->ingredient9 = $ingredient9;

        return $this;
    }

    /**
     * Get ingredient9
     *
     * @return string 
     */
    public function getIngredient9()
    {
        return $this->ingredient9;
    }

    /**
     * Set ingredient10
     *
     * @param string $ingredient10
     * @return creationplat
     */
    public function setIngredient10($ingredient10)
    {
        $this->ingredient10 = $ingredient10;

        return $this;
    }

    /**
     * Get ingredient10
     *
     * @return string 
     */
    public function getIngredient10()
    {
        return $this->ingredient10;
    }
}
