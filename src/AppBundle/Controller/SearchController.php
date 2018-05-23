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
   * @Route("/inkoper/zoekartikel", name="inkoperzoekartikel")
   */
public function inkoperzoekartikel(Request $request) {
  $em = $this->getDoctrine()->getManager();
  $artikelen = $em->getRepository('AppBundle:Artikel')->findAll();
  if($request->isMethod('POST')) {
      $artikelnummer = $request->get('artikelnummer');
      $artikelen = $em->getRepository('AppBundle:Artikel')->findBy(array("artikelnummer"=>$artikelnummer));
  return $this->redirect($this->generateUrl("inkoperzoekartikel"));
  }  
  return new Response($this->renderView("artikelzoek.html.twig", array('artikelen'=>$artikelen)));

  }

}

?>
