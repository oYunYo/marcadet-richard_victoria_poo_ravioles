<html>
    <head>
        <?php
        include 'Parts/stylesheets.html'
        ?>
    </head>
<body>
<?php
include 'nav.php';
?>

<section class="container p-t-20">
    <h1 class="text-center text-white mb-4"><strong>Toutes nos recettes</strong></h1>
    <h2 class="text-white text-center mb-4">Cliquez sur "Voir le détail" pour voir la recette complète</h2>
    <div class="row services justify-content-around">
        <?php
        foreach ($recettes as $recette) {
        ?>
            <div class="col-md-4 col-10 rounded d-flex flex-column justify-content-between service">
                <div class="bg-fond rounded p-4 mb-3">
                    <img class="img-fluid" src="uploads/<?php echo($recette->getImage()); ?>"
                         alt="Image de la recette <?php echo $recette->getTitre()?>"/>
                    <h3 class="text-center mt-3"><?php echo $recette->getTitre()?></h3>
                    <hr class="mx-5">
                    <p class="text-justify">L'ingrédient principal : <?php echo $recette->getIngredientPrincipal()?></p>
                    <div id="details">
                        <a href="../POO_exam/index.php?controller=recette&action=detailRecette&id=<?php echo $recette->getId()?>"><button type="button"
                                                                                                                                          class="btn btn--green btn-lg btn-block">Voir le détail
                            </button></a>
                    </div>
                    <div id="edit" class="mt-2">
                        <a href="../POO_exam/index.php?controller=recette&action=displayUpdateForm&id=<?php echo $recette->getId()?>"><button type="button"
                                                                                         class="btn btn--green btn-lg btn-block">Editer la recette
                            </button></a>
                    </div>
                    <div id="delete" class="mt-2">
                        <a href="../POO_exam/index.php?controller=recette&action=delete&id=<?php echo $recette->getId()?>"><button type="button"
                                                                                          class="btn btn--green btn-lg btn-block">Supprimer la recette
                            </button></a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</section>
<?php
include 'Parts/scripts.html'
?>
</body>
</html>
