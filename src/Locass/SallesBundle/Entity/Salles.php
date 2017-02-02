<?php

namespace Locass\SallesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salles
 *
 * @ORM\Table(name="salles")
 * @ORM\Entity(repositoryClass="Locass\SallesBundle\Repository\SallesRepository")
 */
class Salles
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="codepost", type="string", length=10)
     */
    private $codepost;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=20)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=35)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="salle", type="string", length=255)
     */
    private $salle;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text")
     */
    private $notes;

    /**
     * @var int
     *
     * @ORM\Column(name="nbmembers", type="integer")
     */
    private $nbmembers;

    /**
     * @var float
     *
     * @ORM\Column(name="lattitude", type="float",  precision=18, scale=16)
     */
    private $lattitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float",  precision=18, scale=16)
     */
    private $longitude;

    /**
     * @var int
     *
     * @ORM\Column(name="origine", type="integer")
     */
    private $origine;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateinscr", type="datetime")
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
     * @return Salles
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
     * @return Salles
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
     * @return Salles
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
     * @return Salles
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
     * Set codepost
     *
     * @param string $codepost
     *
     * @return Salles
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
     * @return Salles
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

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Salles
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
     * @return Salles
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
     * @return Salles
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
     * Set salle
     *
     * @param string $salle
     *
     * @return Salles
     */
    public function setSalle($salle)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * Get salle
     *
     * @return string
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return Salles
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
     * Set nbmembers
     *
     * @param integer $nbmembers
     *
     * @return Salles
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
     * Set lattitude
     *
     * @param float $lattitude
     *
     * @return Salles
     */
    public function setLattitude($lattitude)
    {
        $this->lattitude = $lattitude;

        return $this;
    }

    /**
     * Get lattitude
     *
     * @return float
     */
    public function getLattitude()
    {
        return $this->lattitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return Salles
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set origine
     *
     * @param integer $origine
     *
     * @return Salles
     */
    public function setOrigine($origine)
    {
        $this->origine = $origine;

        return $this;
    }

    /**
     * Get origine
     *
     * @return int
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
     * @return Salles
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

