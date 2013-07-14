<?php

namespace HW3\NewsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NewsType extends AbstractType
{
    private $locale;

    public function __construct($locale)
    {
        $this->locale = $locale;
        if ($this->locale == 'en')
            $this->locale = 'en';
        else $this->locale = 'fa';
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('abstract')
            ->add('image', 'file')
            ->add('content', 'ckeditor', array(
                'config' => array(
                    'ui_color' => '#ffffff',
                    'language' => $this->locale
                )))
            ->add('newsgroup')
            ->add('tags')
            ->add('selected', 'checkbox', array('required' => false));
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
