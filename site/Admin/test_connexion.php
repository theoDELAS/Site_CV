<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include_once '../header_html.php' ?>;
        <title>test connexion</title>
    </head>
    <body>
        <?php
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
                    if($_POST['id'] !== 'admin') 
                    {
                        echo 'L\'identifiant est incorrect.';
                        echo '<a href="index.php">Retour</a>';
                    } 
                    else 
                    {
                        if($_POST['mdp'] !== 'admin') 
                        {
                            echo 'Le mot de passe est incorrect.';
                            echo '<a href="index.php">Retour</a>';
                        } 
                        else 
                        {
                            header('Location: ./messagerie/index.php');
                        }
                    }
                }
            }
        ?>



    </body>
</html>