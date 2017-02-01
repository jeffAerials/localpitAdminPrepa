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
