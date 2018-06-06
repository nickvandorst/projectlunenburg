<?php
/**
 * Created by PhpStorm.
 * User: Marice
 * Date: 26-05-18
 * Time: 13:59
 */

// src/AppBundle/Form/Type/UserType.php
namespace AppBundle\Form\Type;
//registratie formulier voor een gebruiker
use AppBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class)
            ->add('username', TextType::class)
            ->add('lastname', TextType::class)
            // wachtwoord moet 2 maal ingevuld worden en overeenkomen.
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password')
            ))
            // hier wordt de role gekozen voor een nieuwe gebruiker. 
            ->add('roles', ChoiceType::class, [
                'multiple' => true,
                'expanded' => true, // render check-boxes
                'choices' => [
                     'Administrator' => 'ROLE_ADMINISTRATOR',
                     'Inkoper' => 'ROLE_INKOPER',
                     'Magazijnmeester' => 'ROLE_MAGAZIJNMEESTER',
                    ],
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }
}