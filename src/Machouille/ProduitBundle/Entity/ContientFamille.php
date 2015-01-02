<?php

namespace Machouille\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContientFamille
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ContientFamille
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
     * @var intger
     *
     * @ORM\Column(name="idFamille", type="integer")
     */
    private $idFamille;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCatalogue", type="integer")
     */
    private $idCatalogue;


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
     * Set idFamille
     *
     * @param integer $idFamille
     * @return ContientFamille
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

    /**
     * Set idCatalogue
     *
     * @param integer $idCatalogue
     * @return ContientFamille
     */
    public function setIdCatalogue($idCatalogue)
    {
        $this->idCatalogue = $idCatalogue;

        return $this;
    }

    /**
     * Get idCatalogue
     *
     * @return integer 
     */
    public function getIdCatalogue()
    {
        return $this->idCatalogue;
    }
}
