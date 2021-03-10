<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactContollerController extends AbstractController
{
    /**
     * @Route("/contact/contoller", name="contact_contoller")
     */
    public function index(): Response
    {
        return $this->render('contact_contoller/index.html.twig', [
            'controller_name' => 'ContactContollerController',
        ]);
    }
}
