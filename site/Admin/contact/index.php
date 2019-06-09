<?php
    $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
    $query = $bdd->query('SELECT * FROM contact ORDER BY id');
    $donnees = $query->fetch();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include '../../header_html.php'; ?>
        <link rel="stylesheet" href="../style.css">
        <title>Admin contact</title>
    </head>
    <body>
        <?php include '../navbar_admin.php' ?>
        <div class="container">
            <h1>Admin contact</h1>
        </div>
                                



        <?php include('../../script.php'); ?>
        <?php include('../../footer.php'); ?>
    </body>
</html>