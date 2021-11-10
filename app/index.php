<?php

/**
 * index.php - Point d'entrée de l'application
 * Ce fichier défini les routes et les méthodes des controleurs qui dervont être appelées
 */

/* Imports */
require_once __DIR__ . "/core/Router.class.php"; // Routeur
include_once __DIR__ . "/controllers/HomeController.php"; // Controleur Home
include_once __DIR__ . "/controllers/NotFoundController.php"; // Controlleur NotFound
include_once __DIR__ . "/controllers/CreateAnnonceController.php";
include_once __DIR__ . "/controllers/AccueilController.php";





/*********************/
/*      Requête      */
/*********************/
$method = $_SERVER['REQUEST_METHOD']; // Récupération du verbe
$uri = $_GET['uri']; // Récuépération de l'URI



/*********************/
/*       Router      */
/*********************/

/* Création du routeur */
$router = new Router($uri, $method);



/*********************/
/*       Routes      */
/*********************/

/*** Page d'accueil ***/
$homeController = new HomeController();
$createannonceController = new CreateAnnonceController();
$accueilController = new AccueilController();


$router->get("/form",  [$homeController, 'render']); // GET /
$router->post("/form", [$homeController, 'process_contact_form']); // POST /

/*********************/
$router->get("/mentions-legales",  [$homeController, 'mentions_legales']); // GET /
$router->get("/",  [$accueilController, 'render']);
$router->get("/annonce",  [$homeController, 'annonce_view']); // GET /



$router->get("/create", [$createannonceController, 'render']);
$router->post("/create", [$createannonceController, 'process_create_form']);

// Ajoutez vos routes ici


/*** Route par défaut ***/
$router->default([new NotFoundController(), 'render']);
/*********************/



/***************************************/
/* Recherche de routes correspondantes */
/***************************************/

/* Démarrage du routeur */
$router->start();


