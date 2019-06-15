<?php
    session_start();
        if(!$_SESSION['connect'])
        {
            header('location: ../../admin.php');
        }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include '../../header_html.php' ?>
        <link rel="stylesheet" href="../style.css">
        <title>Ajouter un projet</title>
    </head>
    <body>
        <?php include '../navbar_admin.php'; ?>
        <div class="container form_add_diplome">
            <h1>
                Ajouter un projet
            </h1>        

            <form action="./scripts/add_projet.php" method="POST">
                <label for="intitule">Intitulé</label>
                <input type="text" name="intitule" placeholder="Intitulé"><br>

                <label for="image">Image</label>
                <input type="text" name="image" placeholder="Image"><br>

                <label for="lien">Lien</label>
                <input type="text" name="lien" placeholder="Lien">

                <input class="btn btn-success" type="submit" value="Ajouter">
            </form>
        </div>

        <?php include('../../script.php'); ?>
        <?php include('../../footer.php'); ?>
    </body>
</html>