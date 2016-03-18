<?php

namespace TRC\CoreBundle\Form\DDC;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DOCTDCType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom','text')
            ->add('save','submit',array("label"=>"Ajouter",
                'attr'=>array("class"=>"btn btn")))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TRC\CoreBundle\Entity\DDC\DOCTDC'
        ));
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'trc_corebundle_ddc_doctdc';
    }
    
}
