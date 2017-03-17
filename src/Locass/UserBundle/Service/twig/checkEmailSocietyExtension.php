<?php
/**
 * Created by PhpStorm.
 * User: Jean-François
 * Date: 17/03/2017
 * Time: 16:09
 */

namespace Locass\UserBundle\Service\twig;

use Locass\UserBundle\Service\checkEmailSociety;


class checkEmailSocietyExtension extends \Twig_Extension
{
    /**
     * @var checkEmailSociety
     */
    private $Checkemailsociety;

    public function __construct(checkEmailSociety $Checkemailsociety)
    {
        $this->Checkemailsociety = $Checkemailsociety;
    }

    public function checkIfEmailisValid($idmongo)
    {
        return $this->Checkemailsociety->isEmailsocietyenabled($idmongo);
    }

    // Twig va exécuter cette méthode pour savoir quelle(s) fonction(s) ajoute notre service
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('checkIfEmailPrincValid', array($this, 'checkIfEmailisValid')),
        );
    }

    // La méthode getName() identifie votre extension Twig, elle est obligatoire
    public function getName()
    {
        return 'checkEmailSociety';
    }
}