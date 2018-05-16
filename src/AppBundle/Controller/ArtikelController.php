<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Artikel;
use AppBundle\Form\ArtikelType;
use AppBundle\Form\ArtikelInkoperType;
use AppBundle\Form\ArtikelMagazijnmeesterType;
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

    //Hier wordt een overzicht van alle artikelen aangeroepen
    /**
     * @Route("/alle/artikelen", name="alleartikelen")
     */
    public function alleArtikelen(Request $request) {

        $artikelen = $this->getDoctrine()->getRepository("AppBundle:Artikel")->findAll();
        return new Response($this->render('alle_artikelen.html.twig', array('artikelen' => $artikelen)));
    }

    //Hier wordt het formulier geladen voor het aanmaken van een nieuw artikel
    /**
     * @Route("/nieuw/artikel", name="nieuwartikel")
     */
    public function nieuwArtikel(Request $request) {
        $nieuwArtikel = new Artikel();
        $form = $this->createForm(ArtikelType::class, $nieuwArtikel);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            if ($nieuwArtikel->getVoorraadaantal() > $nieuwArtikel->getMinimumvoorraad()) {
                $nieuwArtikel->setBestelserie(0);
            }else {
                $nieuwArtikel->setBestelserie($nieuwArtikel->getMinimumvoorraad() - $nieuwArtikel->getVoorraadaantal());
            }
            $em->persist($nieuwArtikel);
            $em->flush();
            return $this->redirect($this->generateUrl("alleartikelen"));
        }
        return new Response($this->render('form.html.twig', array('form' => $form->createView())));
    }

    //Bij deze functie wordt het formulier voor het wijzigen vna een formulier opgeroepen en gevalideerd
    /**
     * @Route("/inkoper/wijzigartikel/{artikelnummer}", name="inkoperwijzigartikel")
     */
    public function wijzigArtikel(Request $request, $artikelnummer) {
        $bestaandArtikel = $this->getDoctrine()->getRepository("AppBundle:Artikel")->find($artikelnummer);
        $form = $this->createForm(ArtikelInkoperType::class, $bestaandArtikel);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            if ($bestaandArtikel->getVoorraadaantal() > $bestaandArtikel->getMinimumvoorraad()) {
                $bestaandArtikel->setBestelserie(0);
            }else {
                $bestaandArtikel->setBestelserie($bestaandArtikel->getMinimumvoorraad() - $bestaandArtikel->getVoorraadaantal());
            }
            $em->persist($bestaandArtikel);
            $em->flush();
            return $this->redirect($this->generateurl("alleartikelen", array("artikelnummer" => $bestaandArtikel->getArtikelnummer())));
        }
        return new Response ($this->render('form.html.twig', array('form' =>$form->createView())));
    }

    /**
     * @Route("/magazijnmeester/wijzigartikel/{artikelnummer}", name="magazijnmeesterwijzigartikel")
     */
    public function magazijnmeesterWijzigartikel(Request $request, $artikelnummer) {
        $bestaandArtikel = $this->getDoctrine()->getRepository("AppBundle:Artikel")->find($artikelnummer);
        $form = $this->createForm(ArtikelMagazijnmeesterType::class, $bestaandArtikel);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            if ($bestaandArtikel->getVoorraadaantal() > $bestaandArtikel->getMinimumvoorraad()) {
                $bestaandArtikel->setBestelserie(0);
            }else {
                $bestaandArtikel->setBestelserie($bestaandArtikel->getMinimumvoorraad() - $bestaandArtikel->getVoorraadaantal());
            }
            $em->persist($bestaandArtikel);
            $em->flush();
            return $this->redirect($this->generateurl("alleartikelen", array("artikelnummer" => $bestaandArtikel->getArtikelnummer())));
        }
        return new Response ($this->render('form.html.twig', array('form' =>$form->createView())));
    }

}
?>
