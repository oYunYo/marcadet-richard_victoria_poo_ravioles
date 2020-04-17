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


<div id="detail" class="card mb-3 text-center container mt-5 pt-5">
    <img style="max-width: 500px;" class="m-auto card-img-top img-fluid pb-5" src="uploads/<?php echo($recette->getImage()); ?>"
         alt="Image de la recette <?php echo $recette->getTitre()?>"
    <div class="card-body">
        <h2 class="card-title">Nom de la recette : <?php echo $recette->getTitre()?></h2>
        <p class="card-text">ID : <?php echo $recette->getId()?></p>
        <p>L'ingrédient principal : <?php echo $recette->getIngredientPrincipal()?></p>
        <p>Les différentes étapes : </p>
            <p><?php echo nl2br($recette->getContenu())?></p>
    </div>
</div>
<?php
include 'Parts/scripts.html'
?>
</body>
</html>