<?php

namespace GM\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Collaborateur
 *
 * @ORM\Table(name="collaborateur")
 * @ORM\Entity(repositoryClass="GM\ProjetBundle\Repository\CollaborateurRepository")
 */
class Collaborateur
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
     * @ORM\Column(name="user", type="string", length=25, unique=true)
     */
    private $user;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=25)
     */
    private $nom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=35)
     */
    private $prenom;
    
      /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    private $email;
    
       /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=25)
     */
    private $etat;
    
    /**
     * @ORM\ManyToMany(targetEntity="Projet", mappedBy="collaborateurs")
     */
    private $projets;
    
     public function __construct()
    {
      $this->projets =  new \Doctrine\Common\Collections\ArrayCollection();
    }
        
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
     * Set user
     *
     * @param string $user
     *
     * @return Collaborateur
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add projet
     *
     * @param \GM\ProjetBundle\Entity\Projet $projet
     *
     * @return Collaborateur
     */
    public function addProjet(\GM\ProjetBundle\Entity\Projet $projet)
    {
        $this->projets[] = $projet;

        return $this;
    }

    /**
     * Remove projet
     *
     * @param \GM\ProjetBundle\Entity\Projet $projet
     */
    public function removeProjet(\GM\ProjetBundle\Entity\Projet $projet)
    {
        $this->projets->removeElement($projet);
    }

    /**
     * Get projets
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProjets()
    {
        return $this->projets;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Collaborateur
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Collaborateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Collaborateur
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Collaborateur
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
    
    // ************************
    
    /**
     * @ORM\OneToMany(targetEntity="GM\ProjetBundle\Entity\DossierMissions", mappedBy="collaborateur", cascade={"persist"})
     */
    private $projetColab;
    

    /**
     * Add projetColab
     *
     * @param \GM\ProjetBundle\Entity\DossierMissions $projetColab
     *
     * @return Collaborateur
     */
    public function addProjetColab(\GM\ProjetBundle\Entity\DossierMissions $projetColab)
    {
        $this->projetColab[] = $projetColab;

        return $this;
    }

    /**
     * Remove projetColab
     *
     * @param \GM\ProjetBundle\Entity\DossierMissions $projetColab
     */
    public function removeProjetColab(\GM\ProjetBundle\Entity\DossierMissions $projetColab)
    {
        $this->projetColab->removeElement($projetColab);
    }

    /**
     * Get projetColab
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProjetColab()
    {
        return $this->projetColab;
    }
}
