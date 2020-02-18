<?php

namespace AssossiationBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use ReclamationBundle\Entity\Reclamation;

/**
 * Assossiation
 *
 * @ORM\Table(name="assossiation")
 * @ORM\Entity(repositoryClass="AssossiationBundle\Repository\AssossiationRepository")
 */
class Assossiation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\OneToMany(targetEntity="Reclamation\Entity\Reclamation",mappedBy="assossiation")
     * @ORM\Column(type="string" , nullable=true)
     */
    protected $reclamation;

    /**
     * @return mixed
     */
    public function getReclamation()
    {
        return $this->reclamation;
    }

    /**
     * @param mixed $reclamation
     */
    public function setReclamation($reclamation)
    {
        $this->reclamation = $reclamation;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="nom_assossiation", type="string", length=255, unique=true)
     */
    private $nomAssossiation;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_assossiation", type="string", length=255)
     */
    private $telAssossiation;

    /**
     * @var string
     *
     * @ORM\Column(name="email_assossiation", type="string", length=255)
     */
    private $emailAssossiation;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_assossiation", type="string", length=255)
     */
    private $adresseAssossiation;

    /**
     * @var string
     *
     * @ORM\Column(name="description_assossiation", type="string", length=255)
     */
    private $descriptionAssossiation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_du_president", type="string", length=255)
     */
    private $nomDuPresident;


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
     * Set nomAssossiation
     *
     * @param string $nomAssossiation
     *
     * @return Assossiation
     */
    public function setNomAssossiation($nomAssossiation)
    {
        $this->nomAssossiation = $nomAssossiation;

        return $this;
    }

    /**
     * Get nomAssossiation
     *
     * @return string
     */
    public function getNomAssossiation()
    {
        return $this->nomAssossiation;
    }

    /**
     * Set telAssossiation
     *
     * @param string $telAssossiation
     *
     * @return Assossiation
     */
    public function setTelAssossiation($telAssossiation)
    {
        $this->telAssossiation = $telAssossiation;

        return $this;
    }

    /**
     * Get telAssossiation
     *
     * @return string
     */
    public function getTelAssossiation()
    {
        return $this->telAssossiation;
    }

    /**
     * Set emailAssossiation
     *
     * @param string $emailAssossiation
     *
     * @return Assossiation
     */
    public function setEmailAssossiation($emailAssossiation)
    {
        $this->emailAssossiation = $emailAssossiation;

        return $this;
    }

    /**
     * Get emailAssossiation
     *
     * @return string
     */
    public function getEmailAssossiation()
    {
        return $this->emailAssossiation;
    }

    /**
     * Set adresseAssossiation
     *
     * @param string $adresseAssossiation
     *
     * @return Assossiation
     */
    public function setAdresseAssossiation($adresseAssossiation)
    {
        $this->adresseAssossiation = $adresseAssossiation;

        return $this;
    }

    /**
     * Get adresseAssossiation
     *
     * @return string
     */
    public function getAdresseAssossiation()
    {
        return $this->adresseAssossiation;
    }

    /**
     * Set descriptionAssossiation
     *
     * @param string $descriptionAssossiation
     *
     * @return Assossiation
     */
    public function setDescriptionAssossiation($descriptionAssossiation)
    {
        $this->descriptionAssossiation = $descriptionAssossiation;

        return $this;
    }

    /**
     * Get descriptionAssossiation
     *
     * @return string
     */
    public function getDescriptionAssossiation()
    {
        return $this->descriptionAssossiation;
    }

    /**
     * Set nomDuPresident
     *
     * @param string $nomDuPresident
     *
     * @return Assossiation
     */
    public function setNomDuPresident($nomDuPresident)
    {
        $this->nomDuPresident = $nomDuPresident;

        return $this;
    }

    /**
     * Get nomDuPresident
     *
     * @return string
     */
    public function getNomDuPresident()
    {
        return $this->nomDuPresident;
    }
}

