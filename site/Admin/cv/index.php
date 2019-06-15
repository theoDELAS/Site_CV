<?php
    session_start();
    if(!$_SESSION['connect'])
    {
        header('location: ../index.php');
    }
    $bdd = new PDO('mysql:host=localhost;dbname=cv;charset=utf8', 'root', '');
    $query_header = $bdd->query('SELECT * FROM texte_header_cv');
    $donnees_header = $query_header->fetch();

    $query_skills = $bdd->query('SELECT * FROM competences');

    $query_experiences = $bdd->query('SELECT * FROM experiences_pro');

    $query_diplomes = $bdd->query('SELECT * FROM diplomes');


?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include '../../header_html.php'; ?>
        <link rel="stylesheet" href="../style.css">
        <title>Admin CV</title>
    </head>
    <body>
        <?php include '../navbar_admin.php' ?>
        <div class="container" id="form_header">
            <h1>Admin CV</h1>
            <!-- HEADER -->
            <div class="row">
                <div class="col-md-12">
                    <h2>Header</h2>
                    <form action="./scripts/edit_header.php" method="post">
                        <label for="photo">Photo</label>
                        <input type="text" name="photo" value="<?= $donnees_header['photo'] ?>"><br>
                        <label for="statut">Statut</label>
                        <textarea class="ckeditor" name="statut" cols="10" rows="5"><?= $donnees_header['statut'] ?></textarea>
                        <label for="ckeditor">Année</label>
                        <textarea class="form-control" name="annee" cols="10" rows="5"><?= $donnees_header['annee'] ?></textarea>

                        <input class="btn btn-primary btn" type="submit" value="Modifier">
                    </form>
                </div>
            </div>
        </div>
        <hr>


        <!-- /HEADER -->

        <!-- COMPETENCES -->
        <div class="container" id="form_portfolio">
            <h2>Compétences</h2>
            <?php echo '<a class="btn btn-success btn_ajouter" href="./add_skill.php" role="button">Ajouter une compétence</a>';?>
            <div class="row">
                <?php while($donnees_skills = $query_skills->fetch())
                {
                ?>
                    <div class="col-md-4">           
                        <form action="./scripts/edit_skills.php" method="POST">
                            <label for="ma_competence">Ma compétence</label>
                            <input type="text" name="ma_competence" value="<?= $donnees_skills['ma_competence'] ?>"><br>
                            <label for="pourcentage">Pourcentage</label>
                            <input type="text" name="pourcentage" value="<?= $donnees_skills['pourcentage'] ?>"><br>
                            <input type="hidden" value="<?= $donnees_skills['id'] ?>" name="id">

                            <input class="btn btn-primary btn" type="submit" value="Modifier">
                            <?= '<a class="btn_delete_skill btn btn-danger" href="./scripts/delete_skill.php?id=' . $donnees_skills['id'] . '">Supprimer</a>';?>
                        </form>

                        <hr>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <hr>

        <!-- /COMPETENCES -->

        <!-- EXPERIENCES PROFESSIONNELLES -->
        <div class="container" id="form_experiences">
            <h2>Expériences professionnelles</h2>
            <?php echo '<a class="btn btn-success btn_ajouter" href="./add_experience.php" role="button">Ajouter une expériencee</a>';?>
            <div class="row">
                <?php while($donnees_experiences = $query_experiences->fetch())
                {
                ?>
                    <div class="col-md-6">           
                        <form action="./scripts/edit_experiences.php" method="POST">
                            <label for="entreprise">Entreprise</label>
                            <input type="text" name="entreprise" value="<?= $donnees_experiences['entreprise'] ?>"><br>

                            <label for="poste">Poste</label>
                            <input type="text" name="poste" value="<?= $donnees_experiences['poste'] ?>"><br>

                            <label for="texte">Texte</label>
                            <textarea class="ckeditor" name="texte" cols="10" rows="5"><?= $donnees_experiences['texte'] ?></textarea>

                            <label for="duree">Durée</label>
                            <input type="text" name="duree" value="<?= $donnees_experiences['duree'] ?>"><br>
                            
                            <input type="hidden" value="<?= $donnees_experiences['id'] ?>" name="id">


                            <input class="btn btn-primary btn" type="submit" value="Modifier">
                            <?= '<a class="btn_delete_skill btn btn-danger" href="./scripts/delete_experience.php?id=' . $donnees_experiences['id'] . '">Supprimer</a>';?>
                        </form>
                        <hr>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <hr>
        <!-- /EXPERIENCES PROFESSIONNELLES -->

        <!-- DIPLOMES -->
        <div class="container" id="form_diplomes">
            <h2>Diplômes</h2>
            <?php echo '<a class="btn btn-success btn_ajouter" href="./add_diplome.php" role="button">Ajouter un diplôme</a>';?>
            <div class="row">
                <?php while($donnees_diplomes = $query_diplomes->fetch())
                {
                ?>
                    <div class="col-md-4">           
                        <form action="./scripts/edit_diplome.php" method="POST">
                            <label for="etablissement">Etablissement</label>
                            <input type="text" name="etablissement" value="<?= $donnees_diplomes['etablissement'] ?>"><br>
                            <label for="date">Date</label>
                            <input type="text" name="date" value="<?= $donnees_diplomes['date'] ?>"><br>
                            <label for="intitule">Intitulé</label>
                            <input type="text" name="intitule" value="<?= $donnees_diplomes['intitule'] ?>"><br>
                            <label for="site">Site</label>
                            <input type="text" name="site" value="<?= $donnees_diplomes['site'] ?>"><br>
                            <input type="hidden" value="<?= $donnees_diplomes['id'] ?>" name="id">


                            <input class="btn btn-primary btn" type="submit" value="Modifier">
                            <?= '<a class="btn_delete_diplome btn btn-danger" href="./scripts/delete_diplome.php?id=' . $donnees_diplomes['id'] . '">Supprimer</a>';?>
                        </form>
                        <hr>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <hr>
        <!-- /DIPLOMES -->
        
        <?php include('../../script.php'); ?>
        <?php include('../../footer.php'); ?>
    </body>
</html>