<?php
/**
 * Created by JetBrains PhpStorm.
 * User: behnam
 * Date: 7/13/13
 * Time: 1:18 PM
 * To change this template use File | Settings | File Templates.
 */

namespace HW3\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserUpdateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('username')
            ->add('showname')
            ->add('newsgroups')
            ->add('password', 'repeated', array(
                'type' => 'password',
                'invalid_message' => 'The password fields must match.',
                'options' => array('attr' => array('class' => 'password-field')),
                'required' => true,
                'first_options' => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
            ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HW3\UserBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'hw3_userbundle_userupdatetype';
    }
}