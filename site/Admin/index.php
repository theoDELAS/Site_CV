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

        <div class="container" id="form_connexion">
            <h1>Connexion Administrateur</h1>
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