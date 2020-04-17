<?php
require_once 'include.php';
?>

<nav class="navbar navbar-expand-lg navbar-dark container-fluid">
    <div class="container justify-content-around">
        <a class="navbar-brand" href="../POO_exam/index.php?controller=default&action=home"><img class="img-fluid" src="assets/img/lelogo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="../POO_exam/index.php?controller=default&action=home">Voir les recettes </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="../POO_exam/index.php?controller=recette&action=displayForm">Ajouter une recette</a>
                </li>
            </ul>
        </div>
    </div>
</nav>