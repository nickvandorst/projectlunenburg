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

  //Onderstaande functie laat de inkoper zoeken op omschrijving en aan de hand van de query kan de inkoper zoeken op ook een deel van de omschrijving.

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

    //Inkoper kan zoeken via het artikelnummer. Dit wordt gegenereert met alleen het juiste artikelnummer hieronder.

  /**
  * @Route("/inkoper/zoekartikel", name="inkoperzoekartikel")
  */
public function inkoperZoekartikel(Request $request) {
 $em = $this->getDoctrine()->getManager();
 $artikelen = $em->getRepository('AppBundle:Artikel');

 if($request->isMethod('POST')) {
     $artikelnummer = $request->get('artikelnummer');
     $query = $em->createQuery(
                  'SELECT a
                   FROM AppBundle:Artikel a
                   WHERE a.artikelnummer LIKE :artikelnummer'
                   );
                   $query->setParameter('artikelnummer', '%' . $artikelnummer . '%');
                   $artikelen = $query->getResult();
     }
 return new Response($this->renderView("zoek.html.twig", array('artikelen'=>$artikelen)));

}
}

?>
