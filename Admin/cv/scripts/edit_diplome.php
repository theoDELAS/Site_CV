<?php
    if(isset($_POST['etablissement']) && isset($_POST['date']) && isset($_POST['intitule']) && isset($_POST['site']))
    {
        $etablissement = $_POST['etablissement'];
        $date = $_POST['date'];
        $intitule = $_POST['intitule'];
        $site = $_POST['site'];
        $id = $_POST['id'];


        if(!empty($etablissement) && !empty($date) && !empty($intitule) && !empty($site))
        {
            $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
            $query = $bdd->prepare('UPDATE diplomes SET etablissement = ?, date = ?, intitule = ?, site = ? WHERE id = ?');
            $query->execute([$etablissement, $date, $intitule, $site, $id]);
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