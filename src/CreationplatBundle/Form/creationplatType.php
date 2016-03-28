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
            ->add('Description')
            ->add('ingredient1')
            ->add('ingredients2')
            ->add('ingredient3')
            ->add('ingredient4')
            ->add('ingredient5')
            ->add('ingredient6')
            ->add('ingredient7')
            ->add('ingredient8')
            ->add('ingredient9')
            ->add('ingredient10')
            ->add('file', 'file', array('label' => 'Ajouter une photo', 'required' => false))
        ;

    }

    public function getName()
    {
        return 'CreationplatBundle_creationplatType';
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
