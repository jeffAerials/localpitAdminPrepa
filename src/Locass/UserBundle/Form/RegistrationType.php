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
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder
            ->add('application', ChoiceType::class, array(
                'choices' => array(
                    'Bands' => 'Bands',
                    'Orgas' => 'Orga',
                    'Salles' => 'Salles'
                ),
                'required'    => true,
                'placeholder' => 'Choose your type',
                'empty_data'  => null
            ))
        ;
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix() {
        return 'locass_user_registration';
    }
}