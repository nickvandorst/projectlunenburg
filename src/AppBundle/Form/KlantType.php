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
class KlantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('klantnummer', IntegerType::class)
        ;
        $builder
            ->add('voornaam', TextType::class)
        ;
        $builder
            ->add('achternaam', TextType::class)
        ;
        $builder
            ->add('woonplaats', TextType::class)
        ;
        $builder
            ->add('telefoonnummer', TextType::class)
        ;
        $builder
            ->add('email', TextType::class)
        ;
    }
	
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'AppBundle\Entity\Klant',
		));
	}
}

?>