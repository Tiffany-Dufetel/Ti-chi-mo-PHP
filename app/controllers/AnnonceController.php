<?php

/**
 * controllers/Home.php - Controleur Home
 * Ce controleur regroupe les méthodes de la page d'accueil.
 */

/* Namespace */

/* Imports */
include_once __DIR__ . "/../core/Database.class.php"; // Utilitaire de connexion à la base de données
include_once __DIR__ . "/../models/AnnonceModel.php"; // Modèle Contact
include_once __DIR__ . "/../views/AnnonceView.php"; // Vue Home

/* Alias */

/**
 * Controleur Home
 */
class AnnonceController
{

    /**
     * Affichage de la page d'accueil
     */
    public function render()
    {
        $dbh = Database::createDBConnection();
        $annonce = AnnonceModel::getAnnonceId($dbh, $_GET["id"]) ;
        $annonces_view = new AnnonceView([$annonce]); // Création d'une instance
        $annonces_view->render(); // Appel de la méthode de rendu (affichage)

    }

}


