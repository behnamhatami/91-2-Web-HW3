<?php

namespace HW3\CommentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('composer')
            ->add('content')
            ->add('news')
            ->add('parent');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HW3\CommentBundle\Entity\Comment'
        ));
    }

    public function getName()
    {
        return 'hw3_commentbundle_commenttype';
    }
}
