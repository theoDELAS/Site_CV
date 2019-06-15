<?php
    if(isset($_POST['competence']) && isset($_POST['pourcentage']))
    {
        $competence = $_POST['competence'];
        $pourcentage = $_POST['pourcentage'];


        if(!empty($competence) && !empty($pourcentage))
        {
            $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
            $query = $bdd->prepare('INSERT INTO competences (ma_competence, pourcentage) VALUES ("' . $competence . '", "' . $pourcentage . '")');
            $query->execute([$competence, $pourcentage]);
            header('Location: ../index.php');
            exit;
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