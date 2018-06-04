<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ArtikelInkoperType extends AbstractType
{
    //Het formulier voor het wijzigen van artikelen wordt in deze klasse gegenereerd
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
            ->add('magazijnlocatie', TextType::class, array('disabled' => true))
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
        $builder
            ->add('inassortiment', ChoiceType::class, array(
              'choices' => array(
              'Ja' => true,
                'Nee' => False,)))
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
