<?php
    session_start();
    if(!$_SESSION['connect'])
    {
        header('location: ../../admin.php');
    }
    $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
    $query = $bdd->query('SELECT * FROM portfolio ORDER BY id DESC');
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include '../../header_html.php'; ?>
        <link rel="stylesheet" href="../style.css">
        <title>Admin portfolio</title>
    </head>
    <body>
        <?php include '../navbar_admin.php' ?>
        <div class="container" id="form_portfolio">
            <h1>Admin portfolio</h1>
            <?php echo '<a class="btn btn-success btn_ajouter" href="./add_projet.php" role="button">Ajouter un projet</a>';?>
            <div class="row">
                <?php while($donnees = $query->fetch())
                {
                ?>
                    <div class="col-md-4">           
                        <form action="./scripts/edit_projet.php" method="POST">
                            <label for="intitule">Projet</label>
                            <input type="texte" name="intitule" value="<?= $donnees['intitule'] ?>"><br>

                            <label for="image">Image</label>
                            <input type="texte" name="image" value="<?= $donnees['image'] ?>"><br>

                            <label for="lien">Lien</label>
                            <input type="texte" name="lien" value="<?= $donnees['lien'] ?>"><br>

                            <input type="hidden" value="<?= $donnees['id'] ?>" name="id">

                            <input class="btn btn-primary btn" type="submit" value="Modifier">
                            <?= '<a class="btn_delete_skill btn btn-danger" href="./scripts/delete_projet.php?id=' . $donnees['id'] . '">Supprimer</a>';?>
                        </form>

                        <hr>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
                                



        <?php include('../../script.php'); ?>
        <?php include('../../footer.php'); ?>
    </body>
</html>