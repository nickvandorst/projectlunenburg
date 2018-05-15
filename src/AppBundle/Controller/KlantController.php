<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Klant;
use AppBundle\Entity\KlantType;
use Symfony\Component\HttpFoundation\Response;

class KlantController extends Controller
{
    /**
     * @Route("/alle/klanten", name="alleklanten")
     */
     public function AlleKlanten(Request $request) {
      $klanten = $this->getDoctrine()->getRepository("AppBundle:Klant")->findAll();
        $tekst = "";
        return new Response($this->render('alle_klanten.html.twig', array('klanten' => $klanten)));
            }
}

?>
