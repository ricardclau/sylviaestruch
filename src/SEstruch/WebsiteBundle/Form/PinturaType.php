<?php

namespace SEstruch\WebsiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use SEstruch\WebsiteBundle\Entity\EntityHelper;

class PinturaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('foto1')
            ->add('mini_alignment', 'choice', array(
                'choices' =>EntityHelper::getPhotoAlignments()
            ))
            ->add('foto2')
            ->add('foto3')
            ->add('foto4')
            ->add('foto5')
            ->add('foto6')
            ->add('category')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'SEstruch\WebsiteBundle\Entity\Pintura'
        ));
    }

    public function getName()
    {
        return 'sestruch_websitebundle_pinturatype';
    }
}
