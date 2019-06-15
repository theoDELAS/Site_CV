<?php
    if(isset($_POST['photo']) && isset($_POST['statut']) && isset($_POST['annee']))
    {
        $photo = $_POST['photo'];
        $statut = $_POST['statut'];
        $annee = $_POST['annee'];



        if(!empty($photo) && !empty($statut) && !empty($annee))
        {
            $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
            $query = $bdd->prepare('UPDATE texte_header_cv SET photo = ?, statut = ?, annee = ?');
            $query->execute([$photo, $statut, $annee]);
            header('Location: ../index.php');
            exit;
        }
        else 
        {
            echo 'ça ne marche pas';
        }

    }
    else 
    {
        echo 'bdd pas trouvé';
    }
?>