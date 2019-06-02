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
            <div class="row">
                <form action="./test_connexion.php" method="POST">
                    <input type="text" id="id" name="id" class="form-control" placeholder="Identifiant">
                    <p class="error">Erreur</p>

                    <input type="password" id="mdp" name="mdp" class="form-control" placeholder="Mot de passe">

                    <button class="btn btn-primary" type="submit" name="connexion">Connexion</button>
                </form>
            </div>
        </div>


        <?php include('../footer.php'); ?>

        <?php include('../script.php'); ?>
    </body>
</html>