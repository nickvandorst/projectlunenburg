<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Klant;
use AppBundle\Entity\KlantType;
use AppBundle\Entity\Artikel;
use AppBundle\Form\ArtikelType;
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
 	 * @Route("/alle/artikelen", name="alleartikelen")
 	 */
 	 public function alleArtikelen(Request $request) {
<<<<<<< HEAD
 	 	$artikelen = $this->getDoctrine()->getRepository("AppBundle:Artikel")->findAll();

 	  return new Response($this->render('alle_artikelen.html.twig', array('artkelen' => $artikelen)));
 	 }
=======
     $artikelen = $this->getDoctrine()->getRepository("AppBundle:Artikel")->findAll();
     $tekst = "";
     return new Response($this->render('alle_artikelen.html.twig', array('artikelen' => $artikelen)));
 	 	 }
>>>>>>> 2d5d74c7653b35ca9a61361849490611787137d7

    /**
     * @Route("/alle/klanten", name="alleklanten")
     */
     public function KlantOpVoornaam(Request $request) {
      $klanten = $this->getDoctrine()->getRepository("AppBundle:Klant")->findAll();
     	$tekst = "";
     	return new Response($this->render('klanten.html.twig', array('klanten' => $klanten)));
 		 	}

    /**
     * @Route("/nieuw/artikel", name="nieuwartikel")
     */
    public function nieuwArtikel(Request $request) {
        $nieuwArtikel = new Artikel();
        $form = $this->createForm(ArtikelType::class, $nieuwArtikel);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($nieuwArtikel);
            $em->flush();
            return $this->redirect($this->generateUrl("alleproducten"));
        }

        return new Response($this->render('form.html.twig', array('form' => $form->createView())));
    }

}
