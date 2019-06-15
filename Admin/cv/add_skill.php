<?php
    session_start();
        if(!$_SESSION['connect'])
        {
            header('location: ../../admin.php');
            exit;
        }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include '../../header_html.php' ?>
        <link rel="stylesheet" href="../style.css">
        <title>Ajouter une compétence</title>
    </head>
    <body>
        <?php include '../navbar_admin.php'; ?>
        <div class="container form_add_skill">
            <h1>
                Ajouter une compétence
            </h1>        

            <form action="./scripts/add_skill.php" method="POST">
                <label for="competence">Compétence</label>
                <input type="text" name="competence" placeholder="Compétence"><br>

                <label for="pourcentage">Pourcentage de connaissance</label>
                <input type="text" name="pourcentage" placeholder="Pourcentage">

                <input class="btn btn-success" type="submit" value="Ajouter">
            </form>
        </div>

        <?php include('../../script.php'); ?>
        <?php include('../../footer.php'); ?>
    </body>
</html>