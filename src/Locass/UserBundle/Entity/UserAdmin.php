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
     * @var string $last_name
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $last_name;

    /**
     * @var string $first_name
     *
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $first_name;
    
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return UserAdmin
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return UserAdmin
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }
}
