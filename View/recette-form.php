<?php
$background = "";
if ($recette && $recette->getImage())
    $background = "background-image: url('./uploads/".$recette->getImage()."');";
?>

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

<div class="form-style-5 font-poppins p-t-100">
    <div class="wrapper wrapper--w780">
        <div class="card-3 border-0">
            <div class="card-heading" style="<?php echo $background ?>"></div>
            <div class="card-body">
                <h1 class="titre">
                    <?php
                    if($recette) {
                        echo('Modifier la recette');
                    } else {
                        echo ('Ajouter une recette');
                    }
                    ?>
                    </h1>
                <form method="post" action="index.php?controller=recette&action=<?php echo $action ?>" enctype="multipart/form-data">
                    <div class="input-group">
                        <input class="input--style-3 form-control" type="text" name="titre" required placeholder="Titre" value="<?php if($recette) echo $recette->getTitre() ?>">
                    </div>
                    <div class="input-group">
                        <input class="input--style-3 form-control" type="text" name="ingredient_principal" required placeholder="Ingrédient principal" value="<?php if($recette) echo $recette->getIngredientPrincipal() ?>">
                    </div>
                    <div class="input-group">
                        <textarea name="contenu" class="input--style-3 form-control" placeholder="Les différentes étapes de la recette"><?php if($recette) echo $recette->getContenu() ?></textarea>
                    </div>
                    <div class="input-group">
                        <label>Image</label>
                        <input type="file" class="fichier" required name="image">
                    </div>
                    <div class="p-t-10">
                        <button class="btn btn--pill btn--green" type="submit">Valider</button>
                    </div>
                    <div class="mt-3">
                        <?php
                        if(array_key_exists('errors', $_GET) && $_GET['errors'] == true){
                            echo ('<h4>Le formulaire contient des erreurs</h4>');
                        }
                        ?>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'Parts/scripts.html'
?>
</body>
</html>