<?php

namespace GM\ProjetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DossierMission
 *
 * @ORM\Table(name="dossier_mission")
 * @ORM\Entity(repositoryClass="GM\ProjetBundle\Repository\DossierMissionRepository")
 */
class DossierMission
{
    /**
     * @ORM\ManyToOne(targetEntity="GM\ProjetBundle\Entity\Mission")
     * @ORM\JoinColumn(nullable=false)
     */
    private $mission;

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
     * @ORM\Column(name="visa", type="string", length=25)
     */
    private $visa;

    /**
     * @var string
     *
     * @ORM\Column(name="hotel", type="string", length=255)
     */
    private $hotel;

    /**
     * @var string
     *
     * @ORM\Column(name="vol", type="string", length=255)
     */
    private $vol;

    /**
     * @var string
     *
     * @ORM\Column(name="OM", type="string", length=255)
     */
    private $oM;


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
     * Set visa
     *
     * @param string $visa
     *
     * @return DossierMission
     */
    public function setVisa($visa)
    {
        $this->visa = $visa;

        return $this;
    }

    /**
     * Get visa
     *
     * @return string
     */
    public function getVisa()
    {
        return $this->visa;
    }

    /**
     * Set hotel
     *
     * @param string $hotel
     *
     * @return DossierMission
     */
    public function setHotel($hotel)
    {
        $this->hotel = $hotel;

        return $this;
    }

    /**
     * Get hotel
     *
     * @return string
     */
    public function getHotel()
    {
        return $this->hotel;
    }

    /**
     * Set vol
     *
     * @param string $vol
     *
     * @return DossierMission
     */
    public function setVol($vol)
    {
        $this->vol = $vol;

        return $this;
    }

    /**
     * Get vol
     *
     * @return string
     */
    public function getVol()
    {
        return $this->vol;
    }

    /**
     * Set oM
     *
     * @param string $oM
     *
     * @return DossierMission
     */
    public function setOM($oM)
    {
        $this->oM = $oM;

        return $this;
    }

    /**
     * Get oM
     *
     * @return string
     */
    public function getOM()
    {
        return $this->oM;
    }

    /**
     * Set mission
     *
     * @param \GM\ProjetBundle\Entity\Mission $mission
     *
     * @return DossierMission
     */
    public function setMission(\GM\ProjetBundle\Entity\Mission $mission)
    {
        $this->mission = $mission;

        return $this;
    }

    /**
     * Get mission
     *
     * @return \GM\ProjetBundle\Entity\Mission
     */
    public function getMission()
    {
        return $this->mission;
    }
}
