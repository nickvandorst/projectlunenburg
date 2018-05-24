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
                  $artikelen = $em->getRepository('AppBundle:Artikel');

    if($request->isMethod('POST')) {
        $omschrijving = $request->get('omschrijving');
        $query = $em->createQuery(
                     'SELECT a
                      FROM AppBundle:Artikel a
                      WHERE a.omschrijving LIKE :omschrijving'
                      );
                      $query->setParameter('omschrijving', '%' . $omschrijving . '%');
                      $artikelen = $query->getResult();
        }

    return new Response($this->renderView("omschrijvingzoek.html.twig", array('artikelen'=>$artikelen)));
    }


  /**
  * @Route("/inkoper/zoekartikel", name="inkoperzoekartikel")
  */
public function inkoperZoekartikel(Request $request) {
 $em = $this->getDoctrine()->getManager();
 $artikelen = $em->getRepository('AppBundle:Artikel');
 $zoekwaarde = $request->request->get('artikelnummer');
 if ($zoekwaarde == null) {
   return new Response ("Het zoekveld is leeg!");
 }
 else {
     $request->isMethod('POST');
     $artikelnummer = $request->get('artikelnummer');
     $artikelen = $em->getRepository('AppBundle:Artikel')->findBy(array("artikelnummer"=>$artikelnummer));
     }

 return new Response($this->renderView("zoek.html.twig", array('artikelen'=>$artikelen)));
 }

}

?>
