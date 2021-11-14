<?php

/**
 * controllers/Home.php - Controleur Home
 * Ce controleur regroupe les méthodes de la page d'accueil.
 */

/* Namespace */

/* Imports */
include_once __DIR__ . "/../core/Database.class.php"; // Utilitaire de connexion à la base de données
include_once __DIR__ . "/../models/ListeEnchereModel.php"; // Modèle Contact
include_once __DIR__ . "/../views/ListeEnchereView.php"; // Vue Home

/* Alias */

/**
 * Controleur Home
 */
class ListeEnchereController
{

    /**
     * Affichage de la page d'accueil
     */
    public function render()
    {
        $dbh = Database::createDBConnection();
        $encheres = ListeEnchereModel::fetchByidAnnonce($dbh,$_GET["id"]) ;
        $encheres_view = new ListeEnchereView($encheres); // Création d'une instance
        $encheres_view->render(); // Appel de la méthode de rendu (affichage)

    }



}
