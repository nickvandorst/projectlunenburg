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
use AppBundle\Entity\bestelorder;
use AppBundle\Form\bestelorderType;
//use Symfony\Component\HttpFoundation\Response;

class BestellingController extends Controller
{
    /**
     * @Route("/inkoper/bestelorder", name="inkoperbestelorder")
     */
    Public function inkoperBestelorder(Request $request)
    {
        $nieuwBestelorder = new Artikel();
        $form = $this->createForm(ArtikelType::class, $nieuwBestelorder);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($nieuwBestelorder);
            $em->flush();
            return $this->redirect($this->generateUrl("inkoperbestelorder"));
        }
        return new Response($this->renderView('nieuw_bestelorder.html.twig', array('form' => $form->createView())));
    }
}
?>
