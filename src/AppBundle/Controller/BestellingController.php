<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Artikelinformatie;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Artikel;
use AppBundle\Form\ArtikelType;
use AppBundle\Form\ArtikelInkoperType;
use AppBundle\Form\ArtikelMagazijnmeesterType;
use AppBundle\Entity\Bestelorder;
use AppBundle\Form\BestelorderType;
//use Symfony\Component\HttpFoundation\Response;

class BestellingController extends Controller
{
    //Hier volgt de code om nieuwe bestelorders toe te voegen
    /**
     * @Route("/inkoper/bestelorder", name="inkoperbestelorder")
     */
    Public function inkoperBestelorder(Request $request)
    {
        $nieuwBestelorder = new Bestelorder();
        $form = $this->createForm(BestelorderType::class, $nieuwBestelorder);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($nieuwBestelorder);
            $em->flush();
            return $this->redirect($this->generateUrl("inkoperbestelopdracht"));
        }
        return new Response($this->renderView('nieuw_bestelorder.html.twig', array('form' => $form->createView())));
    }

    //Hier wordt een overzicht van alle bestelorders voor de inkoper aangeroepen
    /**
     * @Route("/inkoper/bestelopdracht", name="inkoperbestelopdracht")
     */
    public function inkoperBestelopdracht(Request $request) {

        $bestelorders = $this->getDoctrine()->getRepository("AppBundle:Bestelorder")->findAll();
        return new Response($this->renderView('inkoper_bestelopdracht.html.twig', array('bestelorders' => $bestelorders)));
    }

    /**
     * @Route("/inkoper/allebestelorders/{bestelordernummer}", name="inkoperallebestelorders")
     */
    public function inkoperAllebestelorders(Request $request, $bestelordernummer) {

        $bestelorders = $this->getDoctrine()->getRepository("AppBundle:Bestelorder")->findByBestelordernummer($bestelordernummer);
        $artikelen = $this->getDoctrine()->getRepository("AppBundle:Artikel")->findAll();
        $bestelregels = $this->getDoctrine()->getRepository("AppBundle:Bestelregel")->findAll();
        return new Response($this->renderView('alle_inkoper_bestelorder.html.twig', array('bestelorders' => $bestelorders, 'artikelen' => $artikelen, 'bestelregels' => $bestelregels)));
    }

    //Hier wordt een overzicht gegenereerd van de artkelen in een bestelorder
    /**
     * @Route("/magazijnmeester/bestelopdracht", name="magazijnmeesterbestelopdracht")
     */
    public function magazijnmeesterBestelopdracht(Request $request) {

        $bestelorders = $this->getDoctrine()->getRepository("AppBundle:Bestelorder")->findAll();
        return new Response($this->renderView('magazijnmeester_bestelopdracht.html.twig', array('bestelorders' => $bestelorders)));
    }


    //Hier wordt een overzicht van alle bestelorders voor de magazijnmeester aangeroepen
    /**
     * @Route("/magazijnmeester/allebestelorders/{bestelordernummer}", name="magazijnmeesterallebestelorders")
     */
    public function magazijnmeesterAllebestelorders(Request $request, $bestelordernummer) {

        $bestelorders = $this->getDoctrine()->getRepository("AppBundle:Bestelorder")->findByBestelordernummer($bestelordernummer);
        $artikelen = $this->getDoctrine()->getRepository("AppBundle:Artikel")->findAll();
        $bestelregels = $this->getDoctrine()->getRepository("AppBundle:Bestelregel")->findAll();
        return new Response($this->renderView('alle_magazijnmeester_bestelorder.html.twig', array('bestelorders' => $bestelorders, 'artikelen' => $artikelen, 'bestelregels' => $bestelregels)));
    }
}
?>
