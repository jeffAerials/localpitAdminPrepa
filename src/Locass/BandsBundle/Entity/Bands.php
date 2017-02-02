<?php

namespace Locass\BandsBundle\Entity;

/**
 * Bands
 */
class Bands
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $idfosuser;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $band;

    /**
     * @var bool
     */
    private $origine;

    /**
     * @var \DateTime
     */
    private $dateinscr;


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
     * Set idfosuser
     *
     * @param integer $idfosuser
     *
     * @return Bands
     */
    public function setIdfosuser($idfosuser)
    {
        $this->idfosuser = $idfosuser;

        return $this;
    }

    /**
     * Get idfosuser
     *
     * @return int
     */
    public function getIdfosuser()
    {
        return $this->idfosuser;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Bands
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
     * @return Bands
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
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Bands
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Bands
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
     * Set band
     *
     * @param string $band
     *
     * @return Bands
     */
    public function setBand($band)
    {
        $this->band = $band;

        return $this;
    }

    /**
     * Get band
     *
     * @return string
     */
    public function getBand()
    {
        return $this->band;
    }

    /**
     * Set origine
     *
     * @param boolean $origine
     *
     * @return Bands
     */
    public function setOrigine($origine)
    {
        $this->origine = $origine;

        return $this;
    }

    /**
     * Get origine
     *
     * @return bool
     */
    public function getOrigine()
    {
        return $this->origine;
    }

    /**
     * Set dateinscr
     *
     * @param \DateTime $dateinscr
     *
     * @return Bands
     */
    public function setDateinscr($dateinscr)
    {
        $this->dateinscr = $dateinscr;

        return $this;
    }

    /**
     * Get dateinscr
     *
     * @return \DateTime
     */
    public function getDateinscr()
    {
        return $this->dateinscr;
    }
}

