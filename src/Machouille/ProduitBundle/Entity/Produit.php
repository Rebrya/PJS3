<?php

namespace Machouille\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codeproduit", type="string", length=255)
     */
    private $codeproduit;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", options={"default" = 1000000})
     */
    private $quantite;

    /**
     * @var integer
     *
     * @ORM\Column(name="vendu", type="integer", options={"default" = 0})
     */
    private $vendu;


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
     * Set codeproduit
     *
     * @param string $codeproduit
     * @return Produit
     */
    public function setCodeproduit($codeproduit)
    {
        $this->codeproduit = $codeproduit;

        return $this;
    }

    /**
     * Get codeproduit
     *
     * @return string 
     */
    public function getCodeproduit()
    {
        return $this->codeproduit;
    }

    /**
     * Set designation
     *
     * @param string $designation
     * @return Produit
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string 
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return Produit
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set vendu
     *
     * @param integer $vendu
     * @return Produit
     */
    public function setVendu($vendu)
    {
        $this->vendu = $vendu;

        return $this;
    }

    /**
     * Get vendu
     *
     * @return integer 
     */
    public function getVendu()
    {
        return $this->vendu;
    }
}
