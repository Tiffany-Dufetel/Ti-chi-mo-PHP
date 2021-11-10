<?php

/**
 * controllers/Home.php - Controleur Home
 * Ce controleur regroupe les méthodes de la page d'accueil.
 */

/* Namespace */

/* Imports */
include_once __DIR__ . "/../core/Database.class.php"; // Utilitaire de connexion à la base de données
include_once __DIR__ . "/../models/CreateAnnonceModel.php"; // Modèle Contact
include_once __DIR__ . "/../views/CreateAnnonceView.php"; // Vue Home

/**
 * Controleur Home
 */
class CreateAnnonceController
{

    /**
     * Affichage de la page d'accueil
     */
    public function render()
    {
        $createannonce_view = new CreateAnnonceView(null); // Création d'une instance
        $createannonce_view->render(); // Appel de la méthode de rendu (affichage)
    }

    /**
     * Traitement du formulaire de contact
     */
    public function process_create_form()
    {
        /**
         * Validation des données
         */

        /* Cette variable indique si les données sont validées */
        $data_validated = true;




        if ($data_validated) {

            /* Création de la connexion vers la base de données */
            $dbh = Database::createDBConnection();

            /* Création d'un nouvel objet contact à partir du modèle */
            $annonces = new CreateAnnonceModel(
                null,
                1,
                $_POST["title"],
                $_POST["modele"],
                $_POST["marque"],
                $_POST["date_fin"],
                $_POST["description"],
                $_POST["puissance"],
                $_POST["annee"],
                $_POST["prix_depart"],
                true,
                $dbh
            );
            /* Insertion en base de données */
            $result = $annonces->insert();
        }

        /* Affichage de la vue */
        $annonces_view = new CreateAnnonceView($result); // création d'une instance
        $annonces_view->render(); // appel de la méthode d'affichage
    }




}
