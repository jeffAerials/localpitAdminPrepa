<?php

namespace Locass\OrgaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orga
 *
 * @ORM\Table(name="orga")
 * @ORM\Entity(repositoryClass="Locass\OrgaBundle\Repository\OrgaRepository")
 */
class Orga
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
     * @ORM\Column(name="idfosuer", type="integer")
     */
    private $idfosuer;

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
     * @ORM\Column(name="orga", type="string", length=255)
     */
    private $orga;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", nullable=true)
     */
    private $notes;

    /**
     * @var int
     *
     * @ORM\Column(name="nbmembers", type="integer")
     */
    private $nbmembers;

    /**
     * @var bool
     *
     * @ORM\Column(name="origine", type="boolean")
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
     * Set idfosuer
     *
     * @param integer $idfosuer
     *
     * @return Orga
     */
    public function setIdfosuer($idfosuer)
    {
        $this->idfosuer = $idfosuer;

        return $this;
    }

    /**
     * Get idfosuer
     *
     * @return int
     */
    public function getIdfosuer()
    {
        return $this->idfosuer;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Orga
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
     * @return Orga
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
     * @return Orga
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
     * @return Orga
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
     * @return Orga
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
     * @return Orga
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
     * @return Orga
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
     * @return Orga
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
     * Set orga
     *
     * @param string $orga
     *
     * @return Orga
     */
    public function setOrga($orga)
    {
        $this->orga = $orga;

        return $this;
    }

    /**
     * Get orga
     *
     * @return string
     */
    public function getOrga()
    {
        return $this->orga;
    }

    /**
     * Set notes
     *
     * @param string $notes
     *
     * @return Orga
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
     * @return Orga
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
     * @return Orga
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
     * @return Orga
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

