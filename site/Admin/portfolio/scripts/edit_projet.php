<?php
    if(isset($_POST['intitule']) && isset($_POST['image']) && isset($_POST['lien']))
    {
        $intitule = $_POST['intitule'];
        $image = $_POST['image'];
        $lien = $_POST['lien'];
        $id = $_POST['id'];


        if(!empty($intitule) && !empty($image) && !empty($lien))
        {
            $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
            $query = $bdd->prepare('UPDATE portfolio SET intitule = ?, image = ?, lien = ? WHERE id = ?');
            $query->execute([$intitule, $image, $lien, $id]);
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