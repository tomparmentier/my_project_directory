<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Exercice3Controller extends AbstractController {


    #[Route('/recherche', name: 'recherche_nombre')]
    public function recherche(){
                
        return $this->rechercheNombre(10);

    }

    #[Route('/affiche', name: 'affichage')]
    public function affiche(){
                
        return $this->afficheString("bonjour, j'affiche du HTML");

    }

    public function rechercheNombre($nombre){
                
        $message = "";

        if ($nombre <= 10) {
            $message = "examen raté";
        } else if ($nombre > 10 && $nombre < 15 ) {
            $message = "examen réussi";
        } else {
            $message = "Félicitation belle réussite";
        }

        return new Response(
            ' <html>
                <body>
                    <p>'.$message.'</p>
                </body>
            </html>'
            );

    }

    public function afficheString($chaine){
        return new Response(
            ' <html>
                <body>
                    <p>'.$chaine.'</p>
                </body>
            </html>'
            );
    }

    
}