<?php

namespace Locass\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Countrycode
 *
 * @ORM\Table(name="countrycode")
 * @ORM\Entity(repositoryClass="Locass\UserBundle\Repository\CountrycodeRepository")
 */
class Countrycode
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
     * @ORM\Column(name="iso", type="string", length=2)
     */
    private $iso;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=80)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="nicename", type="string", length=80)
     */
    private $nicename;

    /**
     * @var string
     *
     * @ORM\Column(name="iso3", type="string", length=3, nullable=true)
     */
    private $iso3;

    /**
     * @var int
     *
     * @ORM\Column(name="numcode", type="smallint", nullable=true)
     */
    private $numcode;

    /**
     * @var int
     *
     * @ORM\Column(name="phonecode", type="integer")
     */
    private $phonecode;


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
     * Set iso
     *
     * @param string $iso
     *
     * @return Countrycode
     */
    public function setIso($iso)
    {
        $this->iso = $iso;

        return $this;
    }

    /**
     * Get iso
     *
     * @return string
     */
    public function getIso()
    {
        return $this->iso;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Countrycode
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set nicename
     *
     * @param string $nicename
     *
     * @return Countrycode
     */
    public function setNicename($nicename)
    {
        $this->nicename = $nicename;

        return $this;
    }

    /**
     * Get nicename
     *
     * @return string
     */
    public function getNicename()
    {
        return $this->nicename;
    }

    /**
     * Set iso3
     *
     * @param string $iso3
     *
     * @return Countrycode
     */
    public function setIso3($iso3)
    {
        $this->iso3 = $iso3;

        return $this;
    }

    /**
     * Get iso3
     *
     * @return string
     */
    public function getIso3()
    {
        return $this->iso3;
    }

    /**
     * Set numcode
     *
     * @param integer $numcode
     *
     * @return Countrycode
     */
    public function setNumcode($numcode)
    {
        $this->numcode = $numcode;

        return $this;
    }

    /**
     * Get numcode
     *
     * @return int
     */
    public function getNumcode()
    {
        return $this->numcode;
    }

    /**
     * Set phonecode
     *
     * @param integer $phonecode
     *
     * @return Countrycode
     */
    public function setPhonecode($phonecode)
    {
        $this->phonecode = $phonecode;

        return $this;
    }

    /**
     * Get phonecode
     *
     * @return int
     */
    public function getPhonecode()
    {
        return $this->phonecode;
    }
}

