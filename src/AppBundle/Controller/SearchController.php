<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Artikel;
use AppBundle\Form\ArtikelType;
use AppBundle\Form\ArtikelInkoperType;

class SearchController extends Controller {

  /**
   * @Route("/inkoper/zoekomschrijving", name="inkoperzoekomschrijving")
   */
public function inkoperZoekomschrijving(Request $request) {
  $em = $this->getDoctrine()->getManager();
  $artikelen = $em->getRepository('AppBundle:Artikel')->findAll();

  if($request->isMethod('POST')) {
      $omschrijving = $request->get('omschrijving');
      $artikelen = $em->getRepository('AppBundle:Artikel')->findBy(array("omschrijving"=>$omschrijving));
      }

  return new Response($this->renderView("omschrijvingzoek.html.twig", array('artikelen'=>$artikelen)));
  }

}

?>