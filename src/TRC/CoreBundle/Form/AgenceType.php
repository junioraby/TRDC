<?php

namespace TRC\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AgenceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text')
            ->add('description','textarea')
            ->add('code','text')
            ->add('zone','entity',array(
                'class'    => 'TRCCoreBundle:Zone',
                'property' => 'nom',
                'multiple' => false,
                'required'    => true,
                'empty_value' => 'Choisissez la zone',
                'empty_data'  => null))
            ->add('save','submit', array('label' => 'Créer entité',
            'attr'=>array('class'=>'btn btn-primary')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TRC\CoreBundle\Entity\Agence'
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'trc_corebundle_agence';
    }
    
}
