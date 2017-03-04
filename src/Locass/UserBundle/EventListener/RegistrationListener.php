<?php
/**
 * Created by PhpStorm.
 * User: Jean-François
 * Date: 01/02/2017
 * Time: 15:48
 */

namespace Locass\UserBundle\EventListener;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;


class RegistrationListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array (
            FOSUserEvents::REGISTRATION_SUCCESS => 'onRegistrationSuccess'
        );
    }

    public function onRegistrationSuccess(FormEvent $event){



        $user = $event->getForm()->getData();
        $application = $user->getApplication();
        if ($application == 'Salles')
        {
            $roles = array('ROLE_SALLE');
        }
        elseif ($application == 'Bands')
        {
            $roles = array('ROLE_BANDS');
        }
        else
        {
            $roles = array('ROLE_ORGA');
        }

        /*$roles = array('ROLE_BIDON');

        $user->setRoles($roles);*/
        $user->setRoles($roles);
    }
}