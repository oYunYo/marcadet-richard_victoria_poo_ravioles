<?php

    class Recette{
        private $id;
        private $titre;
        private $ingredient_principal;
        private $contenu;
        private $file;

        /**
         * Recette constructor.
         * @param null $id
         * @param $titre
         * @param $ingredient_principal
         * @param $contenu
         * @param $file
         */

    public function __construct($id = null, $titre, $ingredient_principal, $contenu, $file)
    {
        $this->id = $id;
        $this->titre = $titre;
        $this->ingredient_principal = $ingredient_principal;
        $this->contenu = $contenu;
        $this->file = $file;
    }

        /**
         * @return null
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param null $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getTitre()
        {
            return $this->titre;
        }

        /**
         * @param mixed $titre
         */
        public function setTitre($titre)
        {
            $this->titre = $titre;
        }

        /**
         * @return mixed
         */
        public function getIngredientPrincipal()
        {
            return $this->ingredient_principal;
        }

        /**
         * @param mixed $ingredient_principal
         */
        public function setIngredientPrincipal($ingredient_principal)
        {
            $this->ingredient_principal = $ingredient_principal;
        }

        /**
         * @return mixed
         */
        public function getContenu()
        {
            return $this->contenu;
        }

        /**
         * @param mixed $contenu
         */
        public function setContenu($contenu)
        {
            $this->contenu = $contenu;
        }

        /**
         * @return mixed
         */
        public function getImage()
        {
            return $this->file;
        }

        /**
         * @param mixed $file
         */
        public function setImage($file)
        {
            $this->file = $file;
        }

    }
