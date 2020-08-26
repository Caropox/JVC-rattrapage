<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

Class ConnexionController extends AbstractController
{
    /**
     * @Route("/connexion/", name="Connexion_JVC")
     */


     public function accueil()
    {
        return $this->render('connexion.html.twig');
    }

    public function show($id)
    {
        $connexion = $this->getDoctrine()
            ->getRepository(Connexion::class)
            ->find($id);

        if (!$connexion) {
            throw $this->createNotFoundException(
                'Not Foud' .$id
            );
        }

        return new Response('Look at this name' .$connexion->getName());
        
    }


}
?>