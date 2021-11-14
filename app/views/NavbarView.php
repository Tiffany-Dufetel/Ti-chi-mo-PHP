<?php


/**
 * views/NotFound.php - Vue NotFound
 * Cette vue permet d'afficher la page par défaut quand aucune route ne correspond.
 */


include_once __DIR__ . "/../views/AbstractView.php"; 
/**
 * Vue Footer
 */
class NavbarView extends AbstractView
{    

    /**
     * Affichage de la page
     */
    public function render()
    { ?>
    <nav>
        <div class="logo"">
            <a href="<?= $this->base_url() ?>">
                <h1><span class="mon">mon<br></span> site d'enchère</h1>
                <p class="logo-suite">auto</p>
            </a>
        </div>
        <div class="navbar">
            <ul>
                <li><a href="<?= $this->base_url() ?>">Les enchères</a></li>
                <li><a href="<?= $this->base_url() ?>create">Vendre une voiture</a></li>
            </ul>


                <div class="register-login">

                    <?php 
                        session_start(); 
                        if (isset($_SESSION["user_mail"])){?>
                            <p class="hello"> Bonjour <?php echo $_SESSION["user_mail"];?></p>

                                                <form action ="<?= $this->base_url()?>deconnexion" method="POST">
                                <button>DECONNEXION</button>
                            </form>

                    <?php    } else {?>
                        <div class="input-login">

                            <form action ="<?= $this->base_url()?>" method="POST">
                                <input type="email" name="email-login" id="email-login" placeholder="identifiant">
                                <input type="password" name="password-login" id="password-login" placeholder="mot de passe"><br/>
                                <button>CONNEXION</button><br/>
                            </form>

                            </div>



                            <div class="button-register">
                            <a href='<?= $this->base_url()?>form'>Je n'ai pas de compte</a>
                            </div>

                    <?php    }
                    ?>

                        



                </div>

        </div>

    </nav>
<?php
    }
}
