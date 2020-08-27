<?php

namespace App\Controller;

use PDO;
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
        
    $serveur = "localhost";
    $dbname = "db_name";
    $user = "root";
    $pass = "";

    $Name = $_POST["Name"];
    $Password = $_POST["Password"];
        
        try {
            //Connexion à la bdd
            $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
            $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //Insérer les données reçues
            $sth = $dbco->prepare("
                INSERT INTO form(Name, Password)
                VALUES(:Names, :Passowrd)");
            $sth->bindParam(':Name',$Name);
            $sth->bindParam(':Password',$Password);
        }

        catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
        }

    }




}
?>