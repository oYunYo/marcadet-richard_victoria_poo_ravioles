<?php
class DefaultController{

    public function home()
    {
        $recetteManager = new RecetteManager();
        $recettes = $recetteManager->selectAll();
        require 'View/home-view.php';
    }
}