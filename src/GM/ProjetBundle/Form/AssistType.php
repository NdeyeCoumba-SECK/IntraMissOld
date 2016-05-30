<?php

namespace GM\ProjetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;




class AssistType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('candidature',  ChoiceType::class, array(
            'choices'  => array(
                'Retenue' => 'oui',
                'Non Retenue' => 'non',
            )))
            ->add('dateDepart', DateType::class, array(
                                'widget' => 'single_text',
                                'format' => 'yyyy-MM-dd')
                    )
            ->add('duree', IntegerType::class)
          
        
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GM\ProjetBundle\Entity\DossierMissions'
        ));
    }
}
