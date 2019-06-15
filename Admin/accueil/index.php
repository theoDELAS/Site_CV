<?php
    session_start();
    if(!$_SESSION['connect'])
    {
        header('location: ../../admin.php');
        exit;
    }
    $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
    $query = $bdd->query('SELECT * FROM accueil');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include '../../header_html.php'; ?>
        <link rel="stylesheet" href="../style.css">
        <title>Admin Accueil</title>

    </head>
    <body>
        <?php include '../navbar_admin.php' ?>
        <h1>Admin Accueil</h1>
        <div class="container" id="form_accueil">
            <?php while($donnees = $query->fetch())
            {
            ?>
                <form action="./scripts/edit_accueil.php" method="post">
                    <label for="titre">Titre</label>
                    <input type="text" name="titre" value="<?= $donnees['titre'] ?>"><br>

                    <label for="texte">Texte</label>
                    <textarea class="ckeditor" name="texte" cols="20" rows="10"><?= $donnees['texte'] ?></textarea>

                    <input class="btn btn-primary btn" type="submit" value="Modifier">
                </form>
            <?php
            }
            ?>
        </div>
                                
        <?php include('../../script.php'); ?>
        <?php include('../../footer.php'); ?>
    </body>
</html>