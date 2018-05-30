<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\UserRegistrationForm;
use AppBundle\Entity\Gebruiker;
use Symfony\Component\HttpFoundation\Response;
//controller voor de gebruiker
class UserController extends Controller
{
/**
     * @Route("administrator/registeren", name="gebruikerregistreren")
     */
    public function registerAction(Request $request)
    {
    	$nieuwGebruikersnaam = new gebruiker();
		$form = $this->createForm(UserRegistrationForm::class, $nieuwGebruikersnaam);
    	$form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($nieuwGebruikersnaam);
        $em->flush();
        return $this->redirect($this->generateUrl("allegebruikers"));
    }
    return new Response($this->renderView('gebruikerregistreren.html.twig', array('form' => $form->createView())));
}
// een overzicht van alle gebruikers dit wordt gegenereerd als er een nieuwe gebruiker is aangemaakt door de administrator
/**
     * @Route("/administrator/allegebruikers", name="allegebruikers")
     */
     public function AlleGebruikers(Request $request) {
      $gebruikers = $this->getDoctrine()->getRepository("AppBundle:Gebruiker")->findAll();
        return new Response($this->renderView('alle_gebruikers.html.twig', array('gebruikers' => $gebruikers)));
        }

}

?>