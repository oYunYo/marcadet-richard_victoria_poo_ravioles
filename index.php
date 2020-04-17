<?php
require 'include.php';

if($_GET['controller'] === 'default' && $_GET['action'] === 'home'){
    $recetteController = new DefaultController();
    $recetteController->home();
}
else if($_GET['controller'] === 'recette' && $_GET['action'] === 'displayForm'){
    $recetteController = new RecetteController();
    $recetteController->displayForm();
}
else if($_GET['controller'] === 'recette' && $_GET['action'] === 'addRecette'){
    $recetteController = new RecetteController();
    $recetteController->addRecette();
}
else if($_GET['controller'] === 'recette' && $_GET['action'] === 'delete' && isset($_GET['id'])){
    $recetteController = new RecetteController();
    $recetteController->deleteRecette($_GET['id']);
}
else if($_GET['controller'] === 'recette' && $_GET['action'] === 'displayUpdateForm' && isset($_GET['id'])){
    $recetteController = new RecetteController();
    $recetteController->displayUpdateForm($_GET['id']);
}
else if($_GET['controller'] === 'recette' && $_GET['action'] === 'updateRecette' && isset($_GET['id'])){
    $recetteController = new RecetteController();
    $recetteController->updateRecette($_GET['id']);
}
else if($_GET['controller'] === 'recette' && $_GET['action'] === 'detailRecette' && isset($_GET['id'])){
    $recetteController = new RecetteController();
    $recetteController->detailRecette($_GET['id']);
}
else {
    throw new Exception('La page demandée n\'existe pas', 404);
}
