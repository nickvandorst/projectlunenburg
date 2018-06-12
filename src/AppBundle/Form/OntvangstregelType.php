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
class OntvangstregelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('Artikelnummer', TextType::class)
        ;

        $builder
            ->add('Hoeveelheid', TextType::class)
        ;

        $builder
            ->add('Kwaliteit', TextType::class)
        ;

        $builder
            ->add('Regelid', IntegerType::class)
        ;

    }

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'AppBundle\Entity\Ontvangstregel',
		));
	}
}

?>
