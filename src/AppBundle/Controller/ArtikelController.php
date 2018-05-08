<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use AppBundle\Entity\Artikel;
use AppBundle\Entity\Klant;
use AppBundle\Form\ArtikelType;
use AppBundle\Form\ProductSoortType;
=======
=======
>>>>>>> parent of 389fddd... homepage working
=======
>>>>>>> parent of 389fddd... homepage working
use AppBundle\Entity\Klant;
//use Symfony\Component\HttpFoundation\Response;

>>>>>>> parent of 389fddd... homepage working
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
 	 	$artikelen = $this->getDoctrine()->getRepository("AppBundle:Artikel")->findAll();
 	 	$tekst = "";
 	 	foreach($artikelen as $artikel) {
 	 	$tekst = $tekst . $artikel->getArtikelnummer() . $artikel->getInkoopprijs() . $artikel->getMagazijnlocatie() . $artikel->getOmschrijving() . $artikel->getVoorraadaantal() . "<br/ >";

 	  }
 	  return new Response($tekst);
 	 }

    /**
     * @Route("/nieuw/arikel", name="nieuwartikel")
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

    /**
     * @Route("/artikel/wijzig/{artikelnummer}", name="artikelwijzigen")
     */
    public function wijzigArtikel(Request $request, $artikelnummer) {
        $bestaandArtikel = $this->getDoctrine()->getRepository("AppBundle:Artikel")->find(
            $artikelnummer);
        $nieuwArtikel = new artikel();
        $form = $this->createForm(KlantType::class, $bestaandArtikel);

    /**
    * @Route("/nieuw/bestelserie", name="nieuwbestelserie")
    */
    /*
    public function nieuwBestelserie(Request $request) {
        $nieuwBestelserie = new Bestelserie($minimumvoorraad - $voorraadaantal);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bestaandArtikel);
            $em->flush();
            return $this->redirect($this->generateurl("artikelwijzigen", array("artikelnummer" => $bestaandArtikel->getArtikelnummer())));
        }

        return new Response($this->render('form.html.twig', array('form' => $form->createView())));
      }
    */
    }}

