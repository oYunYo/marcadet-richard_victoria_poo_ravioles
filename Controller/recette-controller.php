<?php

class RecetteController {
    public function displayForm()
    {
        $recetteManager = new RecetteManager();
        $recette = null;
        $action = 'addRecette';
        require 'View/recette-form.php';
    }

    public function addRecette()
    {
        $recetteManager = new RecetteManager();
        $res = $recetteManager->validateForm();
        $errors = $res['errors'];
        $imageUrl = $res['image'];

        if( count($errors) === 0 ) {
            $recette = new Recette(null, $_POST['titre'], $_POST['ingredient_principal'],$_POST['contenu'], $imageUrl);
            $recetteManager->insert($recette);
            header('Location: /POO_exam/index.php?controller=default&action=home');
        } else {
             header('Location: /POO_exam/index.php?controller=recette&action=displayForm&errors=true');
            //TODO mieux gérer le retour des erreurs
        }
    }

    public function updateRecette($id)
    {
        $recetteManager = new RecetteManager();
        $res = $recetteManager->validateForm(true);
        $errors = $res['errors'];
        $imageUrl = $res['image'];
        if( count($errors) === 0 ) {
            $recette = $recetteManager->select($id);
            $recette = new Recette($id, $_POST['titre'], $_POST['ingredient_principal'], $_POST['contenu'], $recette->getImage());
            if($imageUrl) { 
                $recette->setImage($imageUrl);
            }
            $recetteManager->update($recette);
            header('Location:/POO_exam/index.php?controller=default&action=home');
        } else {
            header('Location: /POO_exam/index.php?controller=recette&action=displayUpdateForm&id='.$id.'&errors=true');
            //TODO mieux gérer le retour des erreurs
        }
    }

    public function deleteRecette($id)
    {
        $recetteManager = new RecetteManager();
        $recetteManager->delete($id);
        header('Location: /POO_exam/index.php?controller=default&action=home');
    }

    public function displayUpdateForm($id)
    {
        $recetteManager = new RecetteManager();
        $recette = $recetteManager->select($id);
        $action = 'updateRecette&id='.$id;
        require 'View/recette-form.php';
    }

    public function detailRecette($id)
    {
        $recetteManager = new RecetteManager();
        $recette = $recetteManager->select($id);
        $action = 'detailRecette&id='.$id;
        require 'View/recette-detail.php';
    }
}