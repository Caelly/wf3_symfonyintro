<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BonjourController extends AbstractController
{
    /**
     * @Route("/bonjour", name="bonjour")
     */
    public function index(): Response
    {
        $prenom = "Cellya";
        return $this->render('bonjour/index.html.twig', [
            'prenom' => $prenom,
        ]);
    }
}
