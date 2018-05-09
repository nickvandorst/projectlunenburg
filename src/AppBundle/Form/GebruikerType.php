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
class GebruikerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
		//gebruiken wat je nodig hebt, de id hoeft er niet bij als deze auto increment is
        $builder
            ->add('Gebruikersnaam', TextType::class) //naam is b.v. een attribuut of variabele van klant
        ;

        $builder
            ->add('Wachtwoord', TextType::class)
        ;

        $builder
            ->add('ID', IntegerType::class)
        ;

        $builder
            ->add('Functie', TextType::class)
        ;

    }

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'AppBundle\Entity\Gebruiker', //Entiteit vervangen door b.v. Klant
		));
	}
}

?>
