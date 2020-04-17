<?php
    class RecetteManager extends DbManager {
        public function __construct()
        {
            parent::__construct();
        }

        public function selectAll()
        {
            $recettes = [];
            $sql = 'SELECT * FROM raviole';
            foreach ($this->bdd->query($sql) as $recette)
            {
                $recettes[] = new Recette($recette['id'], $recette['titre'], $recette['ingredient_principal'], $recette['recette'], $recette['file']);
            }
            return $recettes;
        }

        public function insert(Recette $recette)
        {
            $titre = $recette->getTitre();
            $ingredient_principal = $recette->getIngredientPrincipal();
            $contenu = $recette->getContenu();
            $file = $recette->getImage();
            $requete = $this->bdd->prepare("INSERT INTO raviole (titre, ingredient_principal, recette, file) VALUES (?, ?, ?, ?)");
            $requete->bindParam(1, $titre);
            $requete->bindParam(2, $ingredient_principal);
            $requete->bindParam(3, $contenu);
            $requete->bindParam(4, $file);
            $requete->execute();
            $recette->setId($this->bdd->lastInsertId());
        }

        public function delete($id)
        {
            $requete = $this->bdd->prepare("DELETE FROM raviole WHERE id = ?");
            $requete->bindParam(1, $id);
            $requete->execute();
        }

        public function select($id)
        {
            $requete = $this->bdd->prepare("SELECT * FROM raviole WHERE id = ?");
            $requete->bindParam(1, $id);
            $requete->execute();
            $res = $requete->fetch();
            $recette = new Recette($res['id'], $res['titre'], $res['ingredient_principal'], $res['recette'], $res['file']);

            return $recette;
        }

        public function update(Recette $recette)
        {
            $titre = $recette->getTitre();
            $ingredient_principal = $recette->getIngredientPrincipal();
            $contenu = $recette->getContenu();
            $file = $recette->getImage();
            $id = $recette->getId();

            $requete = $this->bdd->prepare("UPDATE raviole SET titre =? , ingredient_principal = ?, recette = ?, file = ? WHERE id = ?");
            $requete->bindParam(1, $titre);
            $requete->bindParam(2, $ingredient_principal);
            $requete->bindParam(3, $contenu);
            $requete->bindParam(4, $file);
            $requete->bindParam(5, $id);
            $requete->execute();
        }

        public function validateForm($edit = false) {
            $errors = [];
            $imageUrl = null;

            if(!$edit && $_FILES['image']['size'] == 0){
                $types_acceptes = ['image/png','image/jpg', 'image/jpeg', 'image/gif'];

                $errors[] = 'Veuillez ajouter une image';
            }
            if($_FILES['image']['size']){
                $types_acceptes = ['image/png','image/jpg', 'image/jpeg', 'image/gif'];
                if(in_array($_FILES['image']['type'], $types_acceptes)){
                    if($_FILES['image']['size']<1000000){
                        $extension = explode('/', $_FILES['image']['type'])[1];
                        $imageUrl = uniqid().'.'.$extension;
                        move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$imageUrl);
                    } else {
                        $errors[] = 'Fichier trop lourd impossible';
                    }
                } else {
                    $errors[] = 'Formats acceptés : png, jpg, jpeg, gif';
                }
            }

            if (empty($_POST['titre'])) {
                $errors[] = 'Veuillez saisir le titre de la recette';
            }
            if ( empty($_POST['ingredient_principal'])) {
                $errors[] = 'Veuillez saisir l\'ingrédient principal de la recette';
            }

            return ['errors'=>$errors, 'image'=>$imageUrl];
        }

    }