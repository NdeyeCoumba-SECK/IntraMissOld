<?php

namespace UtilisateursBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
    /*  $builder->add('roles', ChoiceType::class, array(
           'choices' => array(
                     'nom'=>'Dian', 
                     'pren'=>'Dia',
               ), 'multiple' => true
           ));*/
        
    $builder->add('roles', CollectionType::class, array(
    'entry_type'   => ChoiceType::class,
    'entry_options'  => array(
        'choices'  => array(
            'ROLE_COLAB' => 'ROLE_COLAB',
            'ROLE_ARH'     => 'ROLE_ARH',
            'ROLE_ADMIN'    => 'ROLE_ADMIN'
        ),
    ),
));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}

