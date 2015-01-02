<?php

namespace Machouille\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Commande
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
     * @ORM\Column(name="idUser", type="integer")
     */
    private $idUser;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="valider", type="boolean", options={"default" = false})
     */
    private $valider;

    public function __construct()
    {
    	$this->date = new \DateTime('now');
    	$this->valider = false;
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
     * Set valider
     *
     * @param boolean $valider
     * @return Commande
     */
    public function setValider($valider)
    {
        $this->valider = $valider;

        return $this;
    }

    /**
     * Get valider
     *
     * @return boolean 
     */
    public function getValider()
    {
        return $this->valider;
    }
    
    /**
     * Set idUser
     *
     * @param integer $idUser
     * @return Commande
     */
    public function setIdUser($idUser)
    {
    	$this->idUser = $idUser;
    
    	return $this;
    }
    
    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
    	return $this->idUser;
    }
    
}
