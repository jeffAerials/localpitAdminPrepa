<?php
/**
 * Created by PhpStorm.
 * User: Jean-François
 * Date: 09/02/2017
 * Time: 11:10
 */

namespace Locass\BandsBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


/**
 * @MongoDB\Document
 */
class BandDocument
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $ids;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $idf;


    /**
     * @MongoDB\Field(type="string")
     */
    protected $nom;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $prenom;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $adresse;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $codpost;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $ville;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $phone;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $email;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $pays;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $payscode;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $society;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $emailsociety;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $notes;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $style;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $nbmembers;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $latitude;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $longitude;

    /**
     * @MongoDB\Field(type="boolean")
     */
    protected $origine;

    /**
     * @MongoDB\Field(type="timestamp")
     */
    protected $dateinscr;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ids
     *
     * @param int $ids
     * @return self
     */
    public function setIds($ids)
    {
        $this->ids = $ids;
        return $this;
    }

    /**
     * Get ids
     *
     * @return int $ids
     */
    public function getIds()
    {
        return $this->ids;
    }

    /**
     * Set idf
     *
     * @param int $idf
     * @return self
     */
    public function setIdf($idf)
    {
        $this->idf = $idf;
        return $this;
    }

    /**
     * Get idf
     *
     * @return int $idf
     */
    public function getIdf()
    {
        return $this->idf;
    }


    /**
     * Set nom
     *
     * @param string $nom
     * @return self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Get nom
     *
     * @return string $nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return self
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string $prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return self
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string $adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codpost
     *
     * @param string $codpost
     * @return self
     */
    public function setCodpost($codpost)
    {
        $this->codpost = $codpost;
        return $this;
    }

    /**
     * Get codpost
     *
     * @return string $codpost
     */
    public function getCodpost()
    {
        return $this->codpost;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return self
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
        return $this;
    }

    /**
     * Get ville
     *
     * @return string $ville
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Get phone
     *
     * @return string $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return self
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
        return $this;
    }

    /**
     * Get pays
     *
     * @return string $pays
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set society
     *
     * @param string $society
     * @return self
     */
    public function setSociety($society)
    {
        $this->society = $society;
        return $this;
    }

    /**
     * Get society
     *
     * @return string $society
     */
    public function getSociety()
    {
        return $this->society;
    }

    /**
     * Set notes
     *
     * @param string $notes
     * @return self
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
        return $this;
    }

    /**
     * Get notes
     *
     * @return string $notes
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set style
     *
     * @param string $style
     * @return self
     */
    public function setStyle($style)
    {
        $this->style = $style;
        return $this;
    }

    /**
     * Get style
     *
     * @return string $style
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set nbmembers
     *
     * @param int $nbmembers
     * @return self
     */
    public function setNbmembers($nbmembers)
    {
        $this->nbmembers = $nbmembers;
        return $this;
    }

    /**
     * Get nbmembers
     *
     * @return int $nbmembers
     */
    public function getNbmembers()
    {
        return $this->nbmembers;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Get latitude
     *
     * @return float $latitude
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Get longitude
     *
     * @return float $longitude
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set origine
     *
     * @param boolean $origine
     * @return self
     */
    public function setOrigine($origine)
    {
        $this->origine = $origine;
        return $this;
    }

    /**
     * Get origine
     *
     * @return boolean $origine
     */
    public function getOrigine()
    {
        return $this->origine;
    }

    /**
     * Set dateinscr
     *
     * @param timestamp $dateinscr
     * @return self
     */
    public function setDateinscr($dateinscr)
    {
        $this->dateinscr = $dateinscr;
        return $this;
    }

    /**
     * Get dateinscr
     *
     * @return timestamp $dateinscr
     */
    public function getDateinscr()
    {
        return $this->dateinscr;
    }

    /**
     * Set payscode
     *
     * @param string $payscode
     * @return self
     */
    public function setPayscode($payscode)
    {
        $this->payscode = $payscode;
        return $this;
    }

    /**
     * Get payscode
     *
     * @return string $payscode
     */
    public function getPayscode()
    {
        return $this->payscode;
    }

    /**
     * Set emailsociety
     *
     * @param string $emailsociety
     * @return self
     */
    public function setEmailsociety($emailsociety)
    {
        $this->emailsociety = $emailsociety;
        return $this;
    }

    /**
     * Get emailsociety
     *
     * @return string $emailsociety
     */
    public function getEmailsociety()
    {
        return $this->emailsociety;
    }
}
