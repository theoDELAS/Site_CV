<?php
    $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
    $query = $bdd->query('SELECT * FROM accueil');
    $donnees = $query->fetch();
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
        <div class="container">
            <h1>Admin Accueil</h1>
        </div>
        <div class="container">
            <form action="./scripts/edit_accueil.php" method="post">
                <textarea class="form-control" name="texte" cols="20" rows="10"><?= $donnees['texte'] ?></textarea>

                <input class="btn btn-primary btn" type="submit" value="Modifier">
            </form>
        </div>
                                



        <?php include('../../script.php'); ?>
        <?php include('../../footer.php'); ?>
    </body>
</html>