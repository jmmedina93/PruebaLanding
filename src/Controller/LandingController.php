<?php

namespace App\Controller;

use App\Form\PhoneType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
            'controller_name' => 'LandingController',
            'phone' => $formPhone->createView(),
        ]);
    }

//    /**
//     * @Route("/contacto", name="landing")
//     */
//    public function contact()
//    {
//
//        $formPhone = $this->createForm(PhoneType::class);
//
//        return $this->render('landing/initial.html.twig', [
//            'controller_name' => 'LandingController',
//            'phone' => $formPhone->createView(),
//        ]);
//    }


}
