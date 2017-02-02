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
     * @var string $application
     *
     * @ORM\Column(name="application", type="string", length=255, nullable=true)
     */
    private $application;

    /**
     * @var string $nom
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @var string $prenom
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var string $adresse
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string $adresse2
     *
     * @ORM\Column(name="adresse2", type="string", length=255, nullable=true)
     */
    private $adresse2;

    /**
     * @var string $cp
     *
     * @ORM\Column(name="cp", type="string", length=10, nullable=true)
     */
    private $cp;

    /**
     * @var string $ville
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var string $pays
     *
     * @ORM\Column(name="pays", type="string", length=35, nullable=true)
     */
    private $pays;

    /**
     * @var string $fonction
     *
     * @ORM\Column(name="fonction", type="string", length=255, nullable=true)
     */
    private $fonction;

    /**
     * @var string $phone
     *
     * @ORM\Column(name="phone", type="string", length=20, nullable=true)
     */
    private $phone;

    
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


}
