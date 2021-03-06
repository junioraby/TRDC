<?php

namespace TRC\CoreBundle\Form\Client;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LogementType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('flm','text')
            ->add('statut','entity',array(
                'class'    => 'TRCCoreBundle:Client\StatutLogement',
                'property' => 'nom',
                'multiple' => false,
                'required'    => true,
                'empty_value' => 'Choisir le statut du logement',
                'empty_data'  => null))

            ->add('save','submit', array('label' => 'Enregistrer',
            'attr'=>array('class'=>'btn btn-primary')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TRC\CoreBundle\Entity\Client\Logement'
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'trc_corebundle_client_logement';
    }
    
}
