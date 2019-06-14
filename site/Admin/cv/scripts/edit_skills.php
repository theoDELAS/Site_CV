<?php
    if(isset($_POST['ma_competence']) && isset($_POST['pourcentage']) && isset($_POST['id']))
    {
        $ma_competence = $_POST['ma_competence'];
        $pourcentage = $_POST['pourcentage'];
        $id = $_POST['id'];


        if(!empty($ma_competence) && !empty($pourcentage))
        {
            $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
            $query = $bdd->prepare('UPDATE competences SET ma_competence = ?, pourcentage = ? WHERE id = ?');
            $query->execute([$ma_competence, $pourcentage, $id]);
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