<?php

/**
 * views/Home.php - Vue Home
 * Cette vue permet d'afficher la page d'accueil.
 */


include_once __DIR__ . "/../views/AbstractView.php"; 
include_once __DIR__ . "/../views/NavbarView.php"; 

/**
 * Vue Home
 */
class ListeEnchereView extends AbstractView
{

    protected $encheres ;

    public function __construct($encheres)
    {
        $this->encheres = $encheres ;
    }

    /**
     * Affichage de la page
     */
    public function render()
    {?>

        <!DOCTYPE html>
        <html>

        <head>
            <meta charset="utf-8">
            <title>Boilerplate MVC PHP</title>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">            <link rel="stylesheet" type="text/css" href="assets/styles/style.css" />
        </head>

        <body>

            <div id="mainContainer" >
                <div class="scroll-enchere">
                    <center><small>de la plus haute mise à la plus basse</small></center><br> 
                    <?php 
                    foreach ($this->encheres as $encheres) { ?>
                        <b><u>Mise</u>:</b> <?= $encheres -> mise ?>€<br>
                        <b><u>date</u>:</b> <?= $encheres -> date?><br>
                        <b><u>Par</u>:</b> <?= $encheres -> prenom?><br><br>

                    <?php } 

                    ?>
                    
                </div>
            </div>
        </body>
        </html>

<?php
    }
}
