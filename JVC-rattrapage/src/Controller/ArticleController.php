<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

Class ArticleController extends AbstractController
{
    /**
     * @Route("/article/", name="Article_JVC")
     */


     public function accueil()
    {
        return $this->render('article.html.twig');
    }


}
?>