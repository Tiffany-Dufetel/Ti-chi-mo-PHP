<?php

/**
 * views/Home.php - Vue Home
 * Cette vue permet d'afficher la page d'accueil.
 */


include_once __DIR__ . "/../views/AbstractView.php"; 
/**
 * Vue Home
 */
class AccueilView extends AbstractView
{

    protected $annonces ;

    public function __construct($annonces)
    {
        $this->annonces = $annonces ;
    }

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

                <?php foreach ($this->annonces as $annonces) { ?>
                    <h1><?= $annonces->title ?></h1>
                    <p>
                        <b><?= $annonces->marque ?> - <?= $annonces->modele ?></b><br>
                        puissance: <?= $annonces->puissance ?>ch<br>
                        année: <?= $annonces->annee ?><br>

                        prix de départ: <h2><?= $annonces->prix_depart ?>€</h2>
                    </p>
                
                <?php } ?>
                

            </div>
        </body>

        </html>

<?php
    }
}
