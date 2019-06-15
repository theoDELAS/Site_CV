<?php
    session_start();
        if(!$_SESSION['connect'])
        {
            header('location: ../index.php');
        }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include '../../header_html.php' ?>
        <link rel="stylesheet" href="../style.css">
        <title>Ajouter une expérience</title>
    </head>
    <body>
        <?php include '../navbar_admin.php'; ?>
        <div class="container form_add_experience">
            <h1>
                Ajouter une expérience
            </h1>        

            <form action="./scripts/add_experience.php" method="POST">
                <label for="entreprise">Entreprise</label>
                <input type="text" name="entreprise" placeholder="Entreprise"><br>

                <label for="poste">Poste</label>
                <input type="text" name="poste" placeholder="Poste">

                <label for="texte">Texte</label>
                <textarea class="ckeditor" name="texte" cols="10" rows="5" placeholder="Texte"></textarea>
                
                <label for="duree">Durée</label>
                <input type="text" name="duree" placeholder="Durée">

                <input class="btn btn-success" type="submit" value="Ajouter">
            </form>
        </div>

        <?php include('../../script.php'); ?>
        <?php include('../../footer.php'); ?>
    </body>
</html>