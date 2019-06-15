<?php
    if(isset($_POST['entreprise']) && isset($_POST['poste']) && isset($_POST['texte']) && isset($_POST['duree']))
    {
        $entreprise = $_POST['entreprise'];
        $poste = $_POST['poste'];
        $texte = $_POST['texte'];
        $duree = $_POST['duree'];
        $id = $_POST['id'];


        if(!empty($entreprise) && !empty($poste) && !empty($texte) && !empty($duree))
        {
            $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
            $query = $bdd->prepare('UPDATE experiences_pro SET entreprise = ?, poste = ?, texte = ?, duree = ? WHERE id = ?');
            $query->execute([$entreprise, $poste, $texte, $duree, $id]);
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