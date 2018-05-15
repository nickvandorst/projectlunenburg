<?php
namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class ArtikelType extends AbstractType
{
    //Het formulier voor het aanmaken van een nieuw artikel wordt in deze gegenereerd
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('artikelnummer', TextType::class, array('disabled' => true))
        ;

        $builder
            ->add('codevervangendartikel', TextType::class, array('required'=>false))
        ;
        $builder
            ->add('inkoopprijs', MoneyType::class)
        ;
        $builder
            ->add('magazijnlocatie', TextType::class)
        ;
        $builder
            ->add('minimumvoorraad', IntegerType::class)
        ;
        $builder
            ->add('omschrijving', TextType::class, array('required'=>false))
        ;
        $builder
            ->add('technischespecificaties', TextType::class, array('required'=>false))
        ;
        $builder
            ->add('voorraadaantal', TextType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Artikel',
        ));
    }
}
?>
