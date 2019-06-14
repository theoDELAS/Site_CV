<?php
    if(isset($_POST['image']) && isset($_POST['lien']) && isset($_POST['intitule']))
    {
        $image = $_POST['image'];
        $lien = $_POST['lien'];
        $intitule = $_POST['intitule'];

        if(!empty($image) && !empty($lien))
        {
            $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
            $query = $bdd->prepare('INSERT INTO portfolio (image, lien, intitule) VALUES ("' . $image . '", "' . $lien . '", "' . $intitule . '")');
            $query->execute([$image, $lien, $intitule]);
            header('Location: ../index.php');
        }
        else 
        {
            echo 'Merci de renseigner tous les champs';
        }

    }
    else 
    {
        echo 'bdd pas trouvé';
    }
?>