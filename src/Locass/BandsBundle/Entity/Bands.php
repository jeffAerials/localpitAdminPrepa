<?php

namespace Locass\BandsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bands
 *
 * @ORM\Table(name="bands")
 * @ORM\Entity(repositoryClass="Locass\BandsBundle\Repository\BandsRepository")
 */
class Bands
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
     * @var int
     *
     * @ORM\Column(name="idfosuser", type="integer")
     */
    private $idfosuser;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="codepost", type="string", length=10, nullable=true)
     */
    private $codepost;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=20, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=35, nullable=true)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="band", type="string", length=255, nullable=true)
     */
    private $band;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", nullable=true)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="style", type="string", length=255, nullable=true)
     */
    private $style;

    /**
     * @var int
     *
     * @ORM\Column(name="nbmembers", type="integer", nullable=true)
     */
    private $nbmembers;

    /**
     * @var bool
     *
     * @ORM\Column(name="origine", type="boolean", nullable=true)
     */
    private $origine;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateinscr", type="datetime", nullable=true)
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
     * Set phone
     *
     * @param string $phone
     *
     * @return Bands
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set pays
     *
     * @param string $pays
     *
     * @return Bands
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string
     */
    public function getPays()
    {
        return $this->pays;
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
     * Set notes
     *
     * @param string $notes
     *
     * @return Bands
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set style
     *
     * @param string $style
     *
     * @return Bands
     */
    public function setStyle($style)
    {
        $this->style = $style;

        return $this;
    }

    /**
     * Get style
     *
     * @return string
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set nbmembers
     *
     * @param integer $nbmembers
     *
     * @return Bands
     */
    public function setNbmembers($nbmembers)
    {
        $this->nbmembers = $nbmembers;

        return $this;
    }

    /**
     * Get nbmembers
     *
     * @return int
     */
    public function getNbmembers()
    {
        return $this->nbmembers;
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

    /**
     * Set codepost
     *
     * @param string $codepost
     *
     * @return Bands
     */
    public function setCodepost($codepost)
    {
        $this->codepost = $codepost;

        return $this;
    }

    /**
     * Get codepost
     *
     * @return string
     */
    public function getCodepost()
    {
        return $this->codepost;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Bands
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }
}
