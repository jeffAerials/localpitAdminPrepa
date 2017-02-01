<?php
/**
 * Created by PhpStorm.
 * User: Jean-François
 * Date: 01/02/2017
 * Time: 06:25
 */

namespace Locass\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;



class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('application')
        ;
    }

    public function getParent()
    {
        return 'fos_user_registration_register';
    }

    public function getName() {
        return 'locass_user_registration';
    }
}