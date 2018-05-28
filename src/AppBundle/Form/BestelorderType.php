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
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class BestelorderType extends AbstractType
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

        $builder->add('tags', CollectionType::class, array(
            'entry_type' => ArtikelinformatieType::class,
            'entry_options' => array('label' => false),
        ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\bestelorder', //Entiteit vervangen door b.v. product
		));
	}
}

?>
