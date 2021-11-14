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
class CreateAnnonceView extends AbstractView
{
    /* Propriétés */
    protected $result; // Résultat du stockage des informations du formulaire

    /**
     * Contructeur
     * Ce constructeur prend en paramètre une valeur booléenne contenant le résultat du traitement
     * des informations du formulaire de contact. Si le paramètre est null, la requête reçue
     * n'était pas une soumission de formulaire.
     */
    public function __construct($result)
    {
        // Si la variable $result n'est pas nulle
        if (isset($result)) {
            $this->result = $result; // Assignation de la valeur du résultat dans la propriété résultat
        }
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
        <?php 
                $navbar = new NavbarView();
                $navbar->render();
            ?>
            <div id="mainContainer">

                <div class="bloc-formulaire-annonce">

                    <h1>CREATION D'ANNONCE</h1>

                    <?php if (!isset($this->result)) { ?>
                            <p>
                                Creez votre annonce.
                            </p>
                        <?php } else if ($this->result === true) { ?>
                            <p>Votre annonce a bien été crée.</p>
                        <?php } else { ?>
                            <p>Une erreur s'est produite, veuillez réessayer.</p>
                        <?php } ?>

                    <form action="<?= $this->base_url() ?>create" method="POST">
                        <label for="title">Titre</label>
                        <input type="text" id="title" name="title" required /><br>

                        <label for="marque">Marque</label>
                        <input type="text" id="marque" name="marque" required /><br>

                        <label for="modele">Modele</label>
                        <input type="text" id="modele" name="modele" required /><br>

                        <label for="puissance">Puissance</label>
                        <input type="text" id="puissance" name="puissance" required /><br>

                        <label for="annee">Mise en circulation</label>
                        <input type="text" id="annee" name="annee" required /><br>

                        <label for="prix_depart">Mise à prix</label>
                        <input type="text" id="prix_depart" name="prix_depart" required /><br>
                        
                        <label for="date_fin">Date de fin</label>
                        <input type="datetime-local" id="date_fin" name="date_fin" required/><br>


                        <label id="description">Description</label>
                        <textarea name="description" id="description" required></textarea><br>

                        <button>Valider</button>
                    </form>
                 </div>
            </div>
        </body>
<?php
    $footer_view = new FooterView() ;
    $footer_view->render() ;
?>


        </html>

<?php
    }
}
