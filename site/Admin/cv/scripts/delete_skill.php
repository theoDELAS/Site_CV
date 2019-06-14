<?php

    if(isset($_GET['id']) && !empty($_GET['id']))
    {
        $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');

        $requete = $bdd->prepare('DELETE FROM competences WHERE id=?');
        $requete->execute([$_GET['id']]);
        header('Location: ../index.php');
    }
    else 
    {
        echo 'Error';
    }
?>