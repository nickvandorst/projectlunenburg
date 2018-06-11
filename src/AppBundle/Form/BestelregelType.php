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
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


//EntiteitType vervangen door b.v. GoederenontvangstType
class BestelregelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('Artikelnummer', TextType::class)
        ;

        $builder
            ->add('Hoeveelheid', IntegerType::class)
        ;

        $builder
            ->add('Bestelregelid', IntegerType::class)
        ;

        $builder
            ->add('bestelordernummer', EntityType::class, array(
                  'class' => 'AppBundle:Bestelorder',
                  'choice_label' => 'bestelordernummer'))
        ;

    }

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => 'AppBundle\Entity\Bestelregel',
		));
	}
}

?>
