<?php

namespace HW3\NewsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('abstract')
            ->add('image', 'file')
            ->add('content', 'ckeditor', array(
                'config' => array(
                    'ui_color' => '#ffffff',
                )))
            ->add('newsgroup');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HW3\NewsBundle\Entity\News'
        ));
    }

    public function getName()
    {
        return 'hw3_newsbundle_newstype';
    }
}
