<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

Class AccueilController extends AbstractController
{
    /**
     * @Route("/JVC/accueil/{max}", name="accueil_JVC")
     */


     public function accueil()
    {
        return $this->render('accueil.html.twig');
    }


}
?>