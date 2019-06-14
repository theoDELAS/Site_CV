<?php
    if(isset($_POST['texte']) && isset($_POST['titre']))
    {
        $texte = $_POST['texte'];
        $titre = $_POST['titre'];


        if(!empty($texte))
        {
            $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
            $query = $bdd->prepare('UPDATE accueil SET texte = ?, titre = ?');
            $query->execute([$texte, $titre]);
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