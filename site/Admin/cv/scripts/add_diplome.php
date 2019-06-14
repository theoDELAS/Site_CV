<?php
    if(isset($_POST['etablissement']) && isset($_POST['date']) && isset($_POST['intitule']) && isset($_POST['site']))
    {
        $etablissement = $_POST['etablissement'];
        $date = $_POST['date'];
        $intitule = $_POST['intitule'];
        $site = $_POST['site'];

        if(!empty($etablissement) && !empty($date) && !empty($intitule) && !empty($site))
        {
            $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
            $query = $bdd->prepare('INSERT INTO diplomes (etablissement, date, intitule, site) VALUES ("' . $etablissement . '", "' . $date . '", "' . $intitule . '", "' . $site . '")');
            $query->execute([$etablissement, $date, $intitule, $site]);
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