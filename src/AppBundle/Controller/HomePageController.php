<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class HomePageController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..') . DIRECTORY_SEPARATOR,
        ]);
    }

    //Hier wordt de link naar de homepagina gemaakt
    /**
     * @Route("/home", name="home")
     */
    public function loadHomePage(Request $request) {

        return $this->render('frontpage.html.twig');
    }


    //ROL: inkoper
        //Bij deze functie wordt het pad voor de homepagina gedefinieerd en aangeroepen
    /**
     * @Route("inkoper/home", name="inkoperhome")
     */
    public function loadInkoperHomePage(Request $request) {

        return $this->render('frontpageinkoper.html.twig');
    }


    //ROL: inkoper
        //Bij deze functie wordt het pad voor de homepagina gedefinieerd en aangeroepen
    /**
     * @Route("magazijnmeester/home", name="magazijnmeesterhome")
     */
    public function loadMagazijnmeesterHomePage(Request $request) {

        return $this->render('frontpagemagazijnmeester.html.twig');
    }
       /**
     * @Route("administrator/home", name="administratorhome")
     */
    public function loadAdministratorHomePage(Request $request) {

        return $this->render('frontpageadministrator.html.twig');   
    }
}
?>
