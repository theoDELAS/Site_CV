<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include_once '../header_html.php' ?>;
        <title>Document</title>
    </head>
    <body>
        <?php
            if(isset($_POST['connexion'])) 
            {
                if(empty($_POST['id'])) 
                {
                    echo 'Le champ identifiant est vide.';
                    echo '<a href="index.php">Retour</a>';
                } 
                else 
                {
                    if(empty($_POST['mdp'])) 
                    {
                        echo 'Le champ mot de passe est vide.';
                        echo '<a href="index.php">Retour</a>';
                    } 
                    else 
                    {
                        if($_POST['id'] !== 'root') 
                        {
                            echo 'L\'identifiant est incorrect.';
                            echo '<a href="index.php">Retour</a>';
                        } 
                        else 
                        {
                            if($_POST['mdp'] !== 'root') 
                            {
                                echo 'Le mot de passe est incorrect.';
                                echo '<a href="index.php">Retour</a>';
                            } 
                            else 
                            {
                                include_once 'accueil_admin.php';
                            }
                        }
                    }
                }
            }
        ?>



    </body>
</html>