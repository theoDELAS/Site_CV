<?php
    // try 
    // {
    //     $db = new PDO('mysql:host=localhost;dbname=cv', 'root', '');
    // } catch (Exception $e)
    // {
    //     die('Erreur : ' . $e -> getMessage());
    // }

    // premiere instance
    $id = $mdp = '';
    $idError = $mdpError = '';

    // deuxieme instance
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $id = secureInput($_POST['id']);
        $mdp = secureInput($_POST['mdp']);

        if($_POST['id'] !== 'admin') 
        {
            $idError = 'L\'identifiant est incorrect.';
        } 
        else 
        {
            if($_POST['mdp'] !== 'admin') 
            {
                $mdpError = 'Le mot de passe est incorrect.';
            } 
            else 
            {
                header('Location: ./accueil_admin.php');
                exit;
            }
        }
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
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include_once '../header_html.php' ?>;
        <link rel="stylesheet" href="style.css">
        <title>Connexion admin</title>
    </head>
    <body>
        <?php
            include('../navbar.php');
        ?>

        <div class="container">
            <h1>Connexion Administateur</h1>
            <div class="row">
                <form action="./test_connexion.php" method="POST">
                    <div class="col-md-12">
                        <input type="text" id="id" name="id" class="form-control" placeholder="Identifiant">
                    </div>
                    <div class="col-md-12">
                        <input type="password" id="mdp" name="mdp" class="form-control" placeholder="Mot de passe">
                    </div>

                    <input id="connexion" type="submit" value="Connexion" class="btn btn-primary">
                </form>
            </div>
        </div>


        <?php include('../footer.php'); ?>

        <?php include('../script.php'); ?>
    </body>
</html>