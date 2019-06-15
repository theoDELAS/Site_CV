<?php
    $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
    $query = $bdd->query('SELECT * FROM utilisateurs');
    $donnees = $query->fetch();
    if(isset($_POST['id']) && isset($_POST['mdp']))
    {
        $id = secureInput($_POST['id']);
        $mdp = secureInput($_POST['mdp']);

        if(!empty($_POST['id']) && !empty($_POST['mdp']))
        {
            if($_POST['id'] == $donnees['login']) 
            {
                if($_POST['mdp'] == $donnees['mdp'])
                {
                    session_start();
                    $_SESSION['connect'] = 1;
                    header('location: ./messagerie');
                    exit;
                }
            } 
            else 
            {
                header('Location: ./index.php');
                exit;
            }
        }
        else
        {
            header('Location: ./index.php');
            exit;
        }
    }
    else 
    {
        header('Location: ./index.php');
        exit;
    }

    // securiser les input
    function secureInput ($var)
    {
        $var = trim($var); /* supprime les espaces */
        $var = stripcslashes($var); /* supprime les anti slashes */
        $var = htmlspecialchars($var);
        return $var;
    }
?>