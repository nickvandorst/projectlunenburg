<?php
/**
 * Created by PhpStorm.
 * User: Marice
 * Date: 26-05-18
 * Time: 14:00
 */

// src/AppBundle/Controller/RegistrationController.php
namespace AppBundle\Controller;

use AppBundle\Form\Type\UserType;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\HttpFoundation\Response;

//registratie controller van nieuwe gebruikers. Alleen benaderbaar voor de administrator. 
class RegistrationController extends Controller
{
    /**
     * @Route("/administrator/registeren", name="user_registration")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        // 1) build the form
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);

            // 4) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('allegebruikers');
        }

        return $this->render(
            'registration/register.html.twig', array('form' => $form->createView()) );
    }
    /**
     * @Route("administrator/alle/gebruikers", name="allegebruikers")
     */
     public function AlleGebruikers(Request $request) {
      $gebruikers = $this->getDoctrine()->getRepository("AppBundle:User")->findAll();
        
        return new Response($this->renderview('alle_gebruikers.html.twig', array('gebruikers' => $gebruikers)));
            }
}