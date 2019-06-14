<?php
    if(isset($_POST['photo']) && isset($_POST['titre1']) && isset($_POST['titre2']) && isset($_POST['titre3']))
    {
        $photo = $_POST['photo'];
        $titre1 = $_POST['titre1'];
        $titre2 = $_POST['titre2'];
        $titre3 = $_POST['titre3'];


        if(!empty($photo) && !empty($titre1) && !empty($titre2) && !empty($titre3))
        {
            $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
            $query = $bdd->prepare('UPDATE texte_header_cv SET photo = ?, titre1 = ?, titre2 = ?, titre3 = ? ');
            $query->execute([$photo, $titre1, $titre2, $titre3]);
            header('Location: ../index.php');
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