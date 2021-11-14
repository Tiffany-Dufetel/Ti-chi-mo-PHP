<?php

/**
 * views/Home.php - Vue Home
 * Cette vue permet d'afficher la page d'accueil.
 */


include_once __DIR__ . "/../views/AbstractView.php"; 
/**
 * Vue Home
 */
class LoginView extends AbstractView
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
               <div class='register-login'>
                        <div class='input-login'>
                            <form action ='<?= $this->base_url()?>' method='POST'>
                                <input type='email' name='email-login' id='email-login' placeholder='identifiant'>
                                <input type='password' name='password-login' id='password-login' placeholder='mot de passe'><br/>
                                <button>CONNEXION</button>
                            </form>
                        </div>
                        <div class='button-register'>
                            <a href='<?= $this->base_url()?>form'>Je n'ai pas de compte</a>
                        </div>
                    </div>
                
       </body>

    </html>

<?php
    }
}
