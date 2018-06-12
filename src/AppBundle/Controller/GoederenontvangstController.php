<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Goederenontvangst;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\LeverancierToevoegenType;
use AppBundle\Entity\Artikel;
use AppBundle\Entity\Ontvangstregel;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Serializer;


class GoederenontvangstController extends Controller
{
    //ROL: magazijnbeheerder
      //Hier wordt het overzicht van alle ontvangen goederen gegenereerd
  /**
   * @Route("/magazijnmeester/ontvangstmelding/{goederenontvangstid}", name="magazijnmeesterontvangstmelding")
   */
  public function magazijnmeesterOntvangstmelding(Request $request, $goederenontvangstid) {

      $goederen = $this->getDoctrine()->getRepository("AppBundle:Goederenontvangst")->findByGoederenontvangstid($goederenontvangstid);
      $ontvangstregels = $this->getDoctrine()->getRepository("AppBundle:Ontvangstregel")->findAll();
      $artikelen = $this->getDoctrine()->getRepository("AppBundle:Artikel")->findAll();
      return new Response($this->renderView('ontvangstmelding.html.twig', array('goederen' => $goederen, 'ontvangstregels' => $ontvangstregels, 'artikelen' => $artikelen)));
  }

  /**
   * @Route("/magazijnmeester/ontvangstregistratie", name="magazijnmeesterontvangstregistratie")
   */
  public function magazijnmeesterOntvangstregistratie(Request $request) {

      $goederen = $this->getDoctrine()->getRepository("AppBundle:Goederenontvangst")->findAll();
      return new Response($this->renderView('ontvangstregistratie.html.twig', array('goederen' => $goederen)));
  }

  //ROL: magazijnbeheerder
    //Hier wordt de header van de goederenontvangsttabellen naar de database gestuurd.
  /**
   * @Route("/magazijnmeester/nieuwleverancier", name="magazijnmeesternieuwleverancier")
   */
    public function magazijnmeesterNieuwgoederenontvangst(Request $request) {
        $nieuwGoederenontvangst = new Goederenontvangst();
        $form = $this->createForm(LeverancierToevoegenType::class, $nieuwGoederenontvangst);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($nieuwGoederenontvangst);
            $em->flush();
            return $this->redirect($this->generateUrl("magazijnmeesterontvangstregistratie"));
        }
        return new Response($this->renderView('nieuw_leverancier.html.twig', array('form' => $form->createView())));
    }
}

?>
