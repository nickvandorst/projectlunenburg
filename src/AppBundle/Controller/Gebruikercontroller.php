<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Gebruiker;
use AppBundle\Form\GebruikerType;

//use Symfony\Component\HttpFoundation\Response;

class ArtikelController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/alle/gebruikers", name="allegebruikers")
     */
    public function alleGebruikers(Request $request) {
        $gebruikers = $this->getDoctrine()->getRepository("AppBundle:Gebruiker")->findAll();
        $tekst = "";
        foreach($gebruikers as $gebruiker) {
        $tekst = $tekst . $gebruiker->getGebruikersnaam() . $gebruiker->getID() . "<br/ >";

        }
        return new Response($tekst);
    }


  /**
     * @Route("/nieuwe/gebruiker", name="nieuwegebruiker")
     */
    public function nieuweGebruiker(Request $request) {
        $nieuweGebruiker = new Gebruiker();
        $form = $this->createForm(GebruikerType::class, $nieuweGebruiker);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($nieuweGebruiker);
            $em->flush();
        return $this->redirect($this->generateUrl("allegebruikers"));
        }



?>
