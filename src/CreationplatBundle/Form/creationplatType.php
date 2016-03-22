<?php

namespace CreationplatBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class creationplatType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('ingredient1')
            ->add('ingredient2')
            ->add('ingredient3')
            ->add('ingredient4')
            ->add('ingredient5')
            ->add('ingredient6')
            ->add('ingredient7')
            ->add('ingredient8')
            ->add('ingredient9')
            ->add('ingredient10')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CreationplatBundle\Entity\creationplat'
        ));
    }
}
