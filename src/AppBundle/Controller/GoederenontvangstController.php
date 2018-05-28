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
            return $this->redirect($this->generateUrl("magazijnmeesterontvangstmelding"));
        }
        return new Response($this->renderView('nieuw_leverancier.html.twig', array('form' => $form->createView())));
    }

    /**
     * @Route("/magazijnmeester/nieuwgoederenontvangst", name="magazijnmeesternieuwgoederenontvangst")
     */
    public function magazijnmeesterNieuwgoederenontvangst2(Request $request) {
        $nieuwGoederenontvangst2 = new Goederenontvangst();
        $form = $this->createForm(GoederenontvangstType::class, $nieuwGoederenontvangst2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($nieuwGoederenontvangst2);
            $em->flush();
            return $this->redirect($this->generateUrl("magazijnmeesterontvangstmelding"));
        }
        return new Response($this->renderView('nieuw_goederenontvangst.html.twig', array('form' => $form->createView())));
    }
}

?>
