<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Form\PhoneType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class LandingController extends AbstractController
{
    /**
     * @Route("/", name="landing")
     */
    public function index()
    {
        $formPhone = $this->createForm(PhoneType::class);
        return $this->render('landing/initial.html.twig', [
            'phone' => $formPhone->createView(),
        ]);
    }

    /**
     * @Route("/contacto", name="contacto")
     */
    public function contact(Request $request)
    {

        $contact = new Contact();
        $formContact = $this->createForm(ContactType::class, $contact);

        $formContact->handleRequest($request);

        if ($formContact->isSubmitted() && $formContact->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();

            return $this->redirectToRoute('gracias');
        }

        return $this->render('landing/contact.html.twig', [
            'contact' => $formContact->createView(),
        ]);
    }

    /**
     * @Route("/thanks", name="gracias")
     */
    public function thanks()
    {

        return $this->render('landing/thanks.html.twig');
    }


}
