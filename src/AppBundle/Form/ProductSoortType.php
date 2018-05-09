<?php
  namespace AppBundle\Form;

  use Symfony\Component\Form\AbstractType;
  use Symfony\Component\Form\FormBuilderInterface;
  use Symfony\Component\OptionsResolver\OptionsResolver;
  use Symfony\Component\Form\Extension\Core\Type\SubmitType;

  //vul aan als je andere invoerveld-typen wilt gebruiken in je formulier
  use Symfony\Component\Form\Extension\Core\Type\IntegerType;
  use Symfony\Component\Form\Extension\Core\Type\TextType;

  //EntiteitType vervangen door b.v. KlantType
  class ProductSoortType extends AbstractType
  {
      public function buildForm(FormBuilderInterface $builder, array $options)
      {
          $builder
              ->add('tid', IntegerType::class)
          ;
          $builder
              ->add('beschrijving', TextType::class)
          ;
          $builder
              ->add('producten', TextType::class)
          ;
      }

      public function configureOptions(OptionsResolver $resolver)
      {
          $resolver->setDefaults(array(
              'data_class' => 'AppBundle\Entity\ProductSoort',
          ));
      }
  }

  ?>