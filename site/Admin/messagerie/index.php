<?php
    $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
    $query = $bdd->query('SELECT * FROM message ORDER BY id');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include '../../header_html.php'; ?>
        <link rel="stylesheet" href="../style.css">
        <title>Messagerie</title>
    </head>
    <body>
        <?php include '../navbar_admin.php' ?>
        <div class="container">
            <h1>Messages</h1>
            <?php 
                while ($donnees = $query->fetch())
            {
            ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <?php 
                                echo 'De : ' . $donnees['firstname'] . ' ' . $donnees['name'] . '<br>';
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php 
                                echo 'Mail : ' . $donnees['email'] . '<br>';
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php 
                                echo 'Téléphone : ' . $donnees['phone'] . '<br>';
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php 
                                echo '<p>Message :<br> ' . $donnees['message'] . '</p><br>';
                            ?>
                        </div>
                    </div>
                    <?php
                        echo '<a class="delete btn btn-danger" href="./scripts/script_delete.php?id=' . $donnees['id'] . '">Supprimer</a>';
                    ?>
                    <hr>
                </div>
            <?php
            }
            ?>
        </div>
                                



        <?php include('../../script.php'); ?>
        <?php include('../../footer.php'); ?>
    </body>
</html>