<?php
namespace AppBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

//vul aan als je andere invoerveld-typen wilt gebruiken in je formulier
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('barcode', IntegerType::class)
        ;
        $builder
            ->add('naam', TextType::class)
        ;
        $builder
            ->add('merk', TextType::class)
        ;
        $builder->add('productsoort', EntityType::class, array(
            'class' => 'AppBundle:ProductSoort',
            'choice_label' => 'beschrijving',
        ));
        $builder
            ->add('inkoopprijs', MoneyType::class)
        ;
        $builder
            ->add('opmerking', TextType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Product',
        ));
    }
}

?>