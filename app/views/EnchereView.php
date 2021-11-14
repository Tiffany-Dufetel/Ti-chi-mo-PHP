<?php


/**
 * views/Home.php - Vue Home
 * Cette vue permet d'afficher la page d'accueil.
 */


include_once __DIR__ . "/../views/AbstractView.php"; 
include_once __DIR__ . "/../views/FooterView.php"; 
include_once __DIR__ . "/../views/NavbarView.php"; 

/**
 * Vue Home
 */
class EnchereView extends AbstractView
{

    /**
     * Affichage de la page
     */
    public function render()
    { ?>

        <!DOCTYPE html>
        <html>

        <head>
            <meta charset="utf-8">
            <title>Boilerplate MVC PHP</title>

            <link rel="stylesheet" type="text/css" href="assets/styles/style.css" />
        </head>

        <body>

            <div id="mainContainer">        
                <form action="" method="POST">
                    <input type="number" name="mise" id="mise" required>
                    <button>Enchérir</button>
                </form>

            </div>
        </body>
        </html>

<?php
    
    }
}
