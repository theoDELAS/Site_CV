<?php
    if(isset($_POST['entreprise']) && isset($_POST['poste']) && isset($_POST['texte']) && isset($_POST['duree']))
    {
        $entreprise = $_POST['entreprise'];
        $poste = $_POST['poste'];
        $texte = $_POST['texte'];
        $duree = $_POST['duree'];

        if(!empty($entreprise) && !empty($poste) && !empty($texte) && !empty($duree))
        {
            $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
            $query = $bdd->prepare('INSERT INTO experiences_pro (entreprise, poste, texte, duree) VALUES ("' . $entreprise . '", "' . $poste . '", "' . $texte . '", "' . $duree . '")');
            $query->execute([$entreprise, $poste, $texte, $duree]);
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