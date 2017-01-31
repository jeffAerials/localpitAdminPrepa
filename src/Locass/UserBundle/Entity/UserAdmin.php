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
    public function __construct()
    {
        parent::__construct();
    }
}