<?php

namespace GM\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Frais
 *
 * @ORM\Table(name="frais")
 * @ORM\Entity(repositoryClass="GM\ProjetBundle\Repository\FraisRepository")
 */
class Frais
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
     * @ORM\ManyToOne(targetEntity="GM\ProjetBundle\Entity\Collaborateur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $collaborateur;
    
    /**
     * @ORM\ManyToOne(targetEntity="GM\ProjetBundle\Entity\Projet")
     * @ORM\JoinColumn(nullable=false)
     */
    private $projet;


    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=50)
     */
    private $designation;

    /**
     * @var decimal
     *
     * @ORM\Column(name="montant", type="decimal")
     */
    private $montant;
    
     /**
     * @var string
     *
     * @ORM\Column(name="unite", type="string", length=10)
     */
    private $unite;

    /**
     * @var string
     *
     * @ORM\Column(name="piece", type="string", length=255)
     */
    private $piece;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    
    /**
     * @var \Text
     *
     * @ORM\Column(name="infoCom", type="text", nullable=true)
     */
    private $infoCom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=7, nullable=true)
     */
    private $etat;

    
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
     * Set designation
     *
     * @param string $designation
     *
     * @return Frais
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
     * Set montant
     *
     * @param string $montant
     *
     * @return Frais
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return string
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set piece
     *
     * @param string $piece
     *
     * @return Frais
     */
    public function setPiece($piece)
    {
        $this->piece = $piece;

        return $this;
    }

    /**
     * Get piece
     *
     * @return string
     */
    public function getPiece()
    {
        return $this->piece;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Frais
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }


    /**
     * Set infoCom
     *
     * @param string $infoCom
     *
     * @return Frais
     */
    public function setInfoCom($infoCom)
    {
        $this->infoCom = $infoCom;

        return $this;
    }

    /**
     * Get infoCom
     *
     * @return string
     */
    public function getInfoCom()
    {
        return $this->infoCom;
    }

    /**
     * Set collaborateur
     *
     * @param \GM\ProjetBundle\Entity\Collaborateur $collaborateur
     *
     * @return Frais
     */
    public function setCollaborateur(\GM\ProjetBundle\Entity\Collaborateur $collaborateur)
    {
        $this->collaborateur = $collaborateur;

        return $this;
    }

    /**
     * Get collaborateur
     *
     * @return \GM\ProjetBundle\Entity\Collaborateur
     */
    public function getCollaborateur()
    {
        return $this->collaborateur;
    }

    /**
     * Set projet
     *
     * @param \GM\ProjetBundle\Entity\Projet $projet
     *
     * @return Frais
     */
    public function setProjet(\GM\ProjetBundle\Entity\Projet $projet)
    {
        $this->projet = $projet;

        return $this;
    }

    /**
     * Get projet
     *
     * @return \GM\ProjetBundle\Entity\Projet
     */
    public function getProjet()
    {
        return $this->projet;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Frais
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set unite
     *
     * @param string $unite
     *
     * @return Frais
     */
    public function setUnite($unite)
    {
        $this->unite = $unite;

        return $this;
    }

    /**
     * Get unite
     *
     * @return string
     */
    public function getUnite()
    {
        return $this->unite;
    }
}
