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

class ArtikelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('artikelnummer', TextType::class)
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
            ->add('omschrijving', TextType::class)
        ;
        $builder
            ->add('technischespecificaties', TextType::class)
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
