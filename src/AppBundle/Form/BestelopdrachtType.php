<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

//vul aan als je andere invoerveld-typen wilt gebruiken in je formulier
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;

class BestelopdrachtType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //gebruiken wat je nodig hebt, de id hoeft er niet bij als deze auto increment is
        $builder
            ->add('naamleverancier', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;

        $builder
            ->add('bestelordernummer', IntegerType::class) //naam is b.v. een attribuut of variabele van klant
        ;

        $builder
            ->add('artikelnummer', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;

        $builder
            ->add('omschrijving', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;

        $builder
            ->add('hoeveelheid', IntegerType::class) //naam is b.v. een attribuut of variabele van klant
        ;
        //zie
        //http://symfony.com/doc/current/forms.html#built-in-field-types
        //voor meer typen invoer
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Bestelopdracht', //Entiteit vervangen door b.v. product
		));
	}
}

?>
