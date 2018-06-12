<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Goederenontvangst;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\LeverancierToevoegenType;
use AppBundle\Entity\Artikel;
use AppBundle\Form\BestelregelType;
use AppBundle\Entity\Bestelregel;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Serializer;
use AppBundle\Entity\Bestelorder;
use AppBundle\Form\BestelorderType;


class BestelregelController extends Controller
{

//Magazijnmeester voegt een nieuwe bestelregel toe aan de hand van de onderstaande controller.

/**
 * @Route("/inkoper/nieuwbestelregel/{bestelordernummer}", name="inkopernieuwbestelregel")
 */
public function inkoperNieuwbestelregel(Request $request, $bestelordernummer) {
  $nieuwBestelregel = new Bestelregel();
  $bestelorders = $this->getDoctrine()->getRepository("AppBundle:Bestelorder")->findByBestelordernummer($bestelordernummer);
  $form = $this->createForm(BestelregelType::class, $nieuwBestelregel);
  $form->handleRequest($request);

  if ($form->isSubmitted() && $form->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($nieuwBestelregel);
      $em->flush();
      return $this->redirect($this->generateUrl("inkoperallebestelorders", array('bestelordernummer' => $bestelordernummer)));
  }
  return new Response($this->renderView('nieuw_bestelregel.html.twig', array('form' => $form->createView())));
}

}

?>
