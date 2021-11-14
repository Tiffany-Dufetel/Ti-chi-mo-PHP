<?php

/**
 * views/NotFound.php - Vue NotFound
 * Cette vue permet d'afficher la page par défaut quand aucune route ne correspond.
 */


include_once __DIR__ . "/../views/AbstractView.php"; 
/**
 * Vue Footer
 */
class FooterView extends AbstractView
{

    /**
     * Affichage de la page
     */
    public function render()
    { ?>
    <footer>
        <p class="copyright">&copy; Mon Site D'Enchère Auto 2021</p>
    </footer>
<?php
    }
}
?>