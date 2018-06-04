<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Goederenontvangst;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\OntvangstregelType;
use AppBundle\Form\LeverancierToevoegenType;
use AppBundle\Entity\Artikel;
use AppBundle\Entity\Ontvangstregel;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Serializer;


class OntvangstregelController extends Controller
{

//Magazijnmeester voegt een nieuwe ontvangstregel toe aan de hand van de onderstaande controller. 

/**
 * @Route("/magazijnmeester/nieuwontvangstregel", name="magazijnmeesternieuwontvangstregel")
 */
public function magazijnmeesterNieuwontvangstregel(Request $request) {
  $nieuwOntvangstregel = new Ontvangstregel();
  $form = $this->createForm(OntvangstregelType::class, $nieuwOntvangstregel);
  $form->handleRequest($request);

  if ($form->isSubmitted() && $form->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($nieuwOntvangstregel);
      $em->flush();
      return $this->redirect($this->generateUrl("magazijnmeesterontvangstmelding"));
  }
  return new Response($this->renderView('nieuw_ontvangstregel.html.twig', array('form' => $form->createView())));
}

}

?>
