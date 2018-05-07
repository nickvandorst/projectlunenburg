<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ArtikelController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/product/nieuw", name="nieuwproduct")
     */
    public function nieuwProduct(Request $request) {
        $nieuwProduct = new Product();
        $form = $this->createForm(ProductType::class, $nieuwProduct);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($nieuwProduct);
            $em->flush();
            return $this->redirect($this->generateUrl("nieuwproduct"));
        }

        return new Response($this->render('form.html.twig', array('form' => $form->createView())));
    }
}