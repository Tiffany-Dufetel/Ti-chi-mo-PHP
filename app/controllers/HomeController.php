<?php


include_once __DIR__ . "/../core/Database.class.php"; // Utilitaire de connexion à la base de données
include_once __DIR__ . "/../models/ContactModel.php"; // Modèle Contact
include_once __DIR__ . "/../views/MentionsLegalesView.php"; // Vue Home
include_once __DIR__ . "/../views/FormInscriptionView.php"; // Vue Home



class HomeController
{


    public function mentions_legales()
    {
        $mentions_legales_view = new MentionsLegalesView(); // Création d'une instance
        $mentions_legales_view->render(); // Appel de la méthode de rendu (affichage)
    }

    public function inscription_view()
    {
        $form_inscription_view = new FormInscriptionView(null); // Création d'une instance
        $form_inscription_view->render(); // Appel de la méthode de rendu (affichage)
    }


    public function process_contact_form()
    {

        $data_validated = true;

        if (filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL) === false) {
            $data_validated = false; // Insertion impossible car email invalide
        }


        if ($data_validated) {


            $dbh = Database::createDBConnection();


            $contact = new ContactModel(null, $_POST["nom"], $_POST["prenom"], $_POST["mail"], $_POST["mdp"], $dbh);

            $result = $contact->insert();
        }

        $form_inscription_view = new FormInscriptionView($result); // création d'une instance
        $form_inscription_view->render(); // appel de la méthode d'affichage
    }




}