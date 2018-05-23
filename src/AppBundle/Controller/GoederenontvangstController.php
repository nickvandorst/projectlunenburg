<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Goederenontvangst;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\GoederenontvangstType;

class GoederenontvangstController extends Controller
{
//Hier wordt het formulier geladen voor het aanmaken van een nieuw artikel
/**
 * @Route("/nieuw/goederenontvangst", name="nieuwgoederenontvangst")
 */
public function nieuwGoederenontvangst(Request $request) {
    $nieuwGoederenontvangst = new Goederenontvangst();
    $form = $this->createForm(GoederenontvangstType::class, $nieuwGoederenontvangst);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($nieuwGoederenontvangst);
        $em->flush();
        return $this->redirect($this->generateUrl("nieuwgoederenontvangst"));
    }
    return new Response($this->renderView('nieuw_goederenontvangst.html.twig', array('form' => $form->createView())));
}
}

?>
