<?php
    try 
    {
        $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');     
    } 
    catch (Exception $e) 
    {
        die('Erreur : ' . $e->getMessage());
    }

    $query = $bdd->query('SELECT * FROM accueil');
    $donnees = $query->fetch();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Théo DELAS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    </head>
    <body>
        <header>
            <?php
                include('../navbar.php');
            ?>
        </header>

        <div id="main_background">
            <div class="container" id="text">
                <div class="row">
                    <div class="col-md-12">
                        <h2><?= $donnees['titre'] ?></h2>
                        <p>
                            <?= $donnees['texte'] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <?php
            include('../footer.php');
        ?>

        <!-- SCRIPTS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous">
        </script>
        <script 
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous">
        </script>
        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
        </script>
        <script src="script.js"></script>
    </body>
</html>