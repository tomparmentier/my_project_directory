<?php
namespace App\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    // Methode
    public function adresseHTML(){
        // je cré un nvl objet
        return new Response(
        ' <html>
            <body>
                <h1>Mon adresse</h1>
                <p>Rue de la Porte, 33</p>
                <p>4420 SAINT-NICOLAS</p>
            </body>
        </html>'
        );

    }

    //test route
    #[Route('/test', name: 'test')]
    public function test(){
        return $this->adresseHTML();
    }

    // Methode qui est appelable par une route écrite via une annotation
    //url est /date name c'est le nom de la route attention pas d'espace dans le nom car c'est un identifiant
    #[Route('/date', name: 'date_aleatoire')]
    public function chiffreAleatoireDate(){
        // je créé un nvl objet date
        $anne = random_int(1900, 2100);
        $mois = random_int(1 , 12);
        $jour = random_int(1, 31);
        $dateAleatoire = new DateTime($anne.'-'. $mois .'-'. $jour);
        // dump and die :   dd($dateAleatoire); 
        $format = $dateAleatoire->format('d-m-Y');
        

        return new Response(
            ' <html> 
                <body>
                    ' . $format . 
                ' </body>
            </html> '
        );
    }

    // url est /home
    #[Route('/home', name: 'home_hello')]
    public function hello()
    {
        return new Response('hello world');
    }

    


    #[Route('/krause_response', name: 'response')]
    public function response (){
        $response = new Response();
        $response->setContent(json_encode(
            [
                'nom' => 'KRAUSE',
                'prenom' => 'Angelique',
                'adresse' => 'rue du Thier, 2'
            ]
            ));
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
    }


    // lle slash signifie racine ici racine de l'url
    #[Route('/krause_json_response', name: 'home_json')]
    // Methode cf. https://yarnaudov.com/return-json-response-symfony-controller.html
    public function index(): JsonResponse{

        //2b. Créer la réponse en JSON dia 14 return a JSON response 
        return new JsonResponse(['nom' => 'KRAUSE', 'prenom' => 'Angelique', 'adresse' => 'rue du Village, 50']);

    }



}