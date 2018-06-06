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
use AppBundle\Entity\Bestelorder;
use AppBundle\Form\BestelorderType;
use Symfony\Component\HttpFoundation\Session\Session;

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

    //ROL: inkoper
        //Hier wordt een overzicht van alle artikelen aangeroepen
    /**
     * @Route("/inkoper/alleartikelen", name="inkoperalleartikelen")
     */
    public function inkoperAlleartikelen(Request $request) {

        $artikelen = $this->getDoctrine()->getRepository("AppBundle:Artikel")->findAll();
        return new Response($this->renderView('alle_artikelen_inkoper.html.twig', array('artikelen' => $artikelen, 'bestelorders' => $bestelorders)));
    }

    //ROL: inkoper
        //Hier wordt een overzicht van alle te bestellen artikelen aangeroepen
    /**
     * @Route("/inkoper/alletebestellenartikelen", name="inkoperalletebestellenartikelen")
     */
    public function inkoperAlletebestellenartikelen(Request $request) {

        $artikelen = $this->getDoctrine()->getRepository("AppBundle:Artikel")->findAll();
        return new Response($this->renderView('alle_tebestellen_artikelen_inkoper.html.twig', array('artikelen' => $artikelen)));
    }

    //ROL: magazijnmeester
        //Hier wordt een overzicht van alle artikelen aangeroepen
    /**
     * @Route("/magazijnmeester/alleartikelen", name="magazijnmeesteralleartikelen")
     */
    public function magazijnmeesterAlleartikelen(Request $request) {

        $artikelen = $this->getDoctrine()->getRepository("AppBundle:Artikel")->findAll();
        return new Response($this->renderView('alle_artikelen_magazijnmeester.html.twig', array('artikelen' => $artikelen)));
    }

    //ROL: inkoper
        //Hier wordt het formulier geladen voor het aanmaken van een nieuw artikel
    /**
     * @Route("/inkoper/nieuwartikel", name="inkopernieuwartikel")
     */
    public function inkoperNieuwartikel(Request $request) {
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
            return $this->redirect($this->generateUrl("inkoperalleartikelen"));
        }
        return new Response($this->renderView('form_artikel_toevoegen.html.twig', array('form' => $form->createView())));
    }

    //ROL: magazijnmeester
        //Hier wordt het formulier geladen voor het aanmaken van een nieuw artikel
    /**
     * @Route("/magazijnmeester/nieuwartikel", name="magazijnmeesternieuwartikel")
     */
    public function magazijnmeesterNieuwartikel(Request $request) {
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
            return $this->redirect($this->generateUrl("magazijnmeesteralleartikelen"));
        }
        return new Response($this->renderView('form_artikel_toevoegen.html.twig', array('form' => $form->createView())));
    }

    //ROL: inkoper
        //Bij deze functie wordt het formulier voor het wijzigen vna een formulier opgeroepen en gevalideerd
    /**
     * @Route("/inkoper/wijzigartikel/{artikelnummer}", name="inkoperwijzigartikel")
     */
    public function inkoperWijzigartikel(Request $request, $artikelnummer) {
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
            return $this->redirect($this->generateurl("inkoperalleartikelen", array("artikelnummer" => $bestaandArtikel->getArtikelnummer())));
        }
        return new Response ($this->renderView('form_artikel_wijzigen.html.twig', array('form' =>$form->createView())));
    }

    //ROL: inkoper
        //Bij deze functie wordt het formulier voor het wijzigen vna een formulier opgeroepen en gevalideerd
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
            return $this->redirect($this->generateurl("magazijnmeesteralleartikelen", array("artikelnummer" => $bestaandArtikel->getArtikelnummer())));
        }
        return new Response ($this->renderView('form_artikel_wijzigen.html.twig', array('form' =>$form->createView())));
    }

//De inkoper kan via onderstaande functie een nieuwe bestelserie toevoegen.

    /**
     * @Route("/inkoper/bestelorder", name="inkoperbestelorder")
     */
    Public function inkoperbestelorder(Request $request)
    {
        $nieuwBestelorder = new Bestelorder();
        $form = $this->createForm(BestelorderType::class, $nieuwBestelorder);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($nieuwBestelorder);
            $em->flush();
            return $this->redirect($this->generateUrl("inkoperbestelorder"));
        }
        return new Response($this->render('nieuw_bestelorder.html.twig', array('form' => $form->createView())));
    }

}
?>
