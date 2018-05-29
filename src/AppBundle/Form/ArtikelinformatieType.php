<?php

namespace AppBundle\Form;

use AppBundle\Entity\Artikelinformatie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

//vul aan als je andere invoerveld-typen wilt gebruiken in je formulier
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;

class ArtikelinformatieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('artikelnummer', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;

        $builder
            ->add('hoeveelheid', IntegerType::class) //naam is b.v. een attribuut of variabele van klant
        ;

        $builder
            ->add('omschrijving', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Artikelinformatie::class, //Entiteit vervangen door b.v. product
        ));
    }
}

?>