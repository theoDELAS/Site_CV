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
        <div class="container form_add_diplome">
            <h1>
                Ajouter un diplôme
            </h1>        

            <form action="./scripts/add_diplome.php" method="POST">
                <label for="etablissement">Etablissement</label>
                <input type="text" name="etablissement" placeholder="Etablissement"><br>

                <label for="date">Date</label>
                <input type="text" name="date" placeholder="Date">

                <label for="intitule">Intitulé</label>
                <input type="text" name="intitule" placeholder="Intitulé">
                
                <label for="site">Site</label>
                <input type="text" name="site" placeholder="Site">

                <input class="btn btn-success" type="submit" value="Ajouter">
            </form>
        </div>

        <?php include('../../script.php'); ?>
        <?php include('../../footer.php'); ?>
    </body>
</html>