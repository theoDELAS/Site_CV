<?php
    if(isset($_POST['texte']))
    {
        $texte = $_POST['texte'];


        if(!empty($texte))
        {
            $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
            $query = $bdd->prepare('UPDATE accueil SET texte = ?');
            $query->execute([$texte]);
            $reussite = true;
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