<?php
    $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
    $query = $bdd->query('SELECT * FROM texte_header_cv');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include '../../header_html.php'; ?>
        <link rel="stylesheet" href="../style.css">
        <title>Admin CV</title>
    </head>
    <body>
        <?php include '../navbar_admin.php' ?>
        <div class="container">
            <h1>Admin CV</h1>
            <?php
                while($donnees = $query->fetch())
                {
                ?>
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                <?php
                }
                ?>
        </div>


                                



        <?php include('../../script.php'); ?>
        <?php include('../../footer.php'); ?>
    </body>
</html>