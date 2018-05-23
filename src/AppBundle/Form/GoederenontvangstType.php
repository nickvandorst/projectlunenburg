<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

//vul aan als je andere invoerveld-typen wilt gebruiken in je formulier
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

//EntiteitType vervangen door b.v. GoederenontvangstType
class GoederenontvangstType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ontvangstdatum', DateType::class, array(
                  'placeholder' => array(
                  'year' => 'Jaar', 'month' => 'Maand', 'day' => 'Dag',
                   )));
        ;
        $builder
            ->add('omschrijving', TextType::class)
        ;
        $builder
            ->add('hoeveelheid', IntegerType::class)
        ;
        $builder
            ->add('keuringscode', TextType::class)
        ;
        $builder
            ->add('artikelnummer', TextType::class)
        ;
        $builder
            ->add('naamleverancier', TextType::class)
        ;
    }

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'AppBundle\Entity\Goederenontvangst',
		));
	}
}

?>
