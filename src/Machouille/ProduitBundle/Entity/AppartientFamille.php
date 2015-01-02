<?php

namespace Machouille\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AppartientFamille
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AppartientFamille
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
     * @var integer
     *
     * @ORM\Column(name="idProduit", type="integer")
     */
    private $idProduit;

    /**
     * @var integer
     *
     * @ORM\Column(name="idFamille", type="integer")
     */
    private $idFamille;


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
     * Set idProduit
     *
     * @param integer $idProduit
     * @return AppartientFamille
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    /**
     * Get idProduit
     *
     * @return integer 
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * Set idFamille
     *
     * @param integer $idFamille
     * @return AppartientFamille
     */
    public function setIdFamille($idFamille)
    {
        $this->idFamille = $idFamille;

        return $this;
    }

    /**
     * Get idFamille
     *
     * @return integer 
     */
    public function getIdFamille()
    {
        return $this->idFamille;
    }
}
