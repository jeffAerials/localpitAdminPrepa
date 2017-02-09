<?php
/**
 * Created by PhpStorm.
 * User: Jean-François
 * Date: 31/01/2017
 * Time: 17:16
 */

namespace Locass\UserBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class UserAdmin
 * @package AppBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="user_admin")
 */

class UserAdmin extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="Locass\OrgaBundle\Entity\Orga")
     * @ORM\JoinTable(name="userOrga")
     */
    private $orga;

    /**
     * @ORM\OneToOne(targetEntity="Locass\SallesBundle\Entity\Salles")
     * @ORM\JoinTable(name="userSalle")
     */
    private $salle;

    /**
     * @ORM\OneToOne(targetEntity="Locass\BandsBundle\Entity\Bands")
     * @ORM\JoinTable(name="userBand")
     */
    private $band;

    /**
     * @var string $application
     *
     * @ORM\Column(name="application", type="string", length=255, nullable=true)
     */
    private $application;

    /**
     * @var string $idmongo
     *
     * @ORM\Column(name="idmongo", type="string", length=255, nullable=true)
     */
    private $idmongo;


    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Set $application
     *
     * @param string $application
     *
     * @return UserAdmin
     */
    public function setApplication($application)
    {
        $this->application = $application;

        return $this;
    }

    /**
     * Get $application
     *
     * @return string
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Set idmongo
     *
     * @param string $idmongo
     *
     * @return UserAdmin
     */
    public function setIdmongo($idmongo)
    {
        $this->idmongo = $idmongo;

        return $this;
    }

    /**
     * Get idmongo
     *
     * @return string
     */
    public function getIdmongo()
    {
        return $this->idmongo;
    }

   

    /**
     * Set orga
     *
     * @param \Locass\OrgaBundle\Entity\Orga $orga
     *
     * @return UserAdmin
     */
    public function setOrga(\Locass\OrgaBundle\Entity\Orga $orga = null)
    {
        $this->orga = $orga;

        return $this;
    }

    /**
     * Get orga
     *
     * @return \Locass\OrgaBundle\Entity\Orga
     */
    public function getOrga()
    {
        return $this->orga;
    }

    /**
     * Set salle
     *
     * @param \Locass\SallesBundle\Entity\Salles $salle
     *
     * @return UserAdmin
     */
    public function setSalle(\Locass\SallesBundle\Entity\Salles $salle = null)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * Get salle
     *
     * @return \Locass\SallesBundle\Entity\Salles
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set band
     *
     * @param \Locass\BandsBundle\Entity\Bands $band
     *
     * @return UserAdmin
     */
    public function setBand(\Locass\BandsBundle\Entity\Bands $band = null)
    {
        $this->band = $band;

        return $this;
    }

    /**
     * Get band
     *
     * @return \Locass\BandsBundle\Entity\Bands
     */
    public function getBand()
    {
        return $this->band;
    }
}
