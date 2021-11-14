<?php

/**
 * controllers/Home.php - Controleur Home
 * Ce controleur regroupe les méthodes de la page d'accueil.
 */

/* Namespace */

/* Imports */
include_once __DIR__ . "/../core/Database.class.php"; // Utilitaire de connexion à la base de données
include_once __DIR__ . "/../models/EnchereModel.php"; // Modèle Contact
include_once __DIR__ . "/../views/EnchereView.php"; // Vue Home

/**
 * Controleur Home
 */
class EnchereController
{

    /**
     * Affichage de la page d'accueil
     */
    public function render()
    {            
        // session_start();
        $dbh = Database::createDBConnection();
        $encheres = EnchereModel::fetchEncherebyID($dbh, $_SESSION["user_id"]) ;
        $enchere_view = new EnchereView($encheres); // Création d'une instance
        $enchere_view->render(); // Appel de la méthode de rendu (affichage)

        
    }

    /**
     * Traitement du formulaire de contact
     */
    public function process_enchere()
    {
        /**
         * Validation des données
         */

        /* Cette variable indique si les données sont validées */
        $data_validated = true;




        if ($data_validated) {
            session_start();
            /* Création de la connexion vers la base de données */
            $dbh = Database::createDBConnection();
            
            date_default_timezone_set('Europe/Paris');

            $setDateTime = new \DateTime();
            $dateTime = date_format($setDateTime,'Y-m-d H:i:s');

            /* Création d'un nouvel objet contact à partir du modèle */
            $encheres = new EnchereModel(
                null,
                $_SESSION ["user_id"],
                $_GET["id"],
                $_POST["mise"],
                $dateTime,
                $dbh
            );

            /* Insertion en base de données */
            $result = $encheres->insert();
        }

        /* Affichage de la vue */
        $encheres_view = new EnchereView($result); // création d'une instance
        $encheres_view->render(); // appel de la méthode d'affichage
        header('Location:annonce?id='.$_GET["id"]); // Si tout est bon il a redirigé vers la page annonces/home

    }




}
