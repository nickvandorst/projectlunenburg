<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Goederenontvangst;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\GoederenontvangstType;
use AppBundle\Form\LeverancierToevoegenType;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Serializer;


class GoederenontvangstController extends Controller
{
    //ROL: magazijnbeheerder
      //Hier wordt het overzicht van alle ontvangen goederen gegenereerd

  /**
   * @Route("/magazijnmeester/alleontvangengoederen", name="alleontvangengoederen")
   */
  public function alleOntvangenGoederen(Request $request) {

      $goederen = $this->getDoctrine()->getRepository("AppBundle:Goederenontvangst")->findAll();
      return new Response($this->renderView('ontvangstmelding.html.twig', array('goederen' => $goederen)));
  }

  /**
 * @Route("/nieuw/leverancier", name="nieuwleverancier")
 */
public function nieuwGoederenontvangst(Request $request) {
    $nieuwGoederenontvangst = new Goederenontvangst();
    $form = $this->createForm(LeverancierToevoegenType::class, $nieuwGoederenontvangst);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($nieuwGoederenontvangst);
        $em->flush();
        return $this->redirect($this->generateUrl("alleontvangengoederen"));
    }
    return new Response($this->renderView('nieuw_leverancier.html.twig', array('form' => $form->createView())));
}

}

?>
