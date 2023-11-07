<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// le fichier est auto-générer au départ de la commande make:cibtrikker
class BrandNewController extends AbstractController
{
    // Création de la route Pour visualiser : 1270.0.1:8000/brand/new
    #[Route('/brand/new', name: 'app_brand_new')]
    public function index(): Response
    {
        // render c'est le fichier Twig
        return $this->render('brand_new/index.html.twig', [
            'controller_name' => 'BrandNewController',
        ]);
    }
}
