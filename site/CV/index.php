<?php
    try 
    {
        $bdd = new PDO('mysql:host=localhost;dbname=cv', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    } catch (Exception $e)
    {
        die('Erreur : ' . $e -> getMessage());
    }
    $query = $bdd->query('SELECT * FROM texte_header_cv');
    $donnees = $query->fetch();

    $query2 = $bdd->query('SELECT * FROM competences ORDER BY id');

    $query3 = $bdd->query('SELECT * FROM experiences_pro ORDER BY id DESC');
    $donnees3 = $query3->fetchAll();

    $query6 = $bdd->query('SELECT * FROM diplomes ORDER BY id');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Curriculum vitæ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="CV.css" />
    </head>
    <!-- SCROLL SPY -->
    <body data-spy="scroll" data-target=".navbar" data-offset="60">
        <header>
            <!-- NAVABAR -->
           <?php
                include('../navbar.php');
           ?>
        </header>


        <section id="container_about_me" class="container-fluid">
            <div class="col-xs-8 col-md-4 profil_picture">
                <img src=<?='"' . $donnees['photo'] . '"'?> alt="photo de profil Théo Delas" class="rounded-circle">
            </div>
            <div id="text_about_me">
                <h1><?= $donnees['titre1'] ?></h1>
                <h2><?= $donnees['titre2'] ?></h2>
                <h3><?= $donnees['titre3'] ?></h3>
                <a href="../../Documents/CV DELAS Théo 2019.pdf" class="button1">Télécharger CV</a>
            </div>
        </section>
        <!-- SKILLS -->
        <section id="skills">
            <div class="blue_divider"></div>
            <div id="text_skills">
                <h2>Compétences</h2>
            </div>
            <div class="container">
                <div class="row">
                <?php 
                while ($donnees2 = $query2->fetch()) 
                {
                ?>

                    <!-- CONTAINER LEFT PROGRESS-BAR -->
                    <div class="col-md-6">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="<?= $donnees2['pourcentage'] ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?= $donnees2['pourcentage'] ?>%">
                                <h5><?= $donnees2['ma_competence'] . ' ' . $donnees2['pourcentage'] . '%' ?></h5>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </section>
        <!-- EXPERIENCES -->
        <section id="experiences">
            <div class="container">
                <div class="white_divider"></div>
                <div id="text_experiences">
                    <h2>Epériences professionelles</h2>
                    
                </div>
                <ul class="timeline">
                    <?php foreach ($donnees3 as $index => $competence) {
                        if($index %2 == 0) 
                        {
                        ?>
                            <li>
                                <!-- ICON VALISE -->
                                <div class="timeline_icon"><span class="fas fa-briefcase"></span></div>
                                <div class="timeline_panel_container">
                                    <div class="timeline_panel">
                                        <div class="timeline_text">
                                            <h4><?= $competence['entreprise'] ?></h4>
                                            <h3><?= $competence['poste'] ?></h3>
                                            <p class="duration"><span><img src="../../images/time.png" alt="période d'embauche"></span> <?= $competence['duree'] ?></p>
                                        </div>
                                        <div class="timeline_body">
                                            <p><?= $competence['texte'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php
                        }
                        else
                        {
                        ?>
                            <li>
                                <div class="timeline_icon"><span class="fas fa-briefcase"></span></div>
                                <div class="timeline_panel_container_inverted">
                                    <div class="timeline_panel">
                                        <div class="timeline_text">
                                            <h4><?= $competence['entreprise'] ?></h4>
                                            <h3><?= $competence['poste'] ?></h3>
                                            <p class="duration"><span><img src="../../images/time.png" alt="période d'embauche"></span> <?= $competence['duree'] ?></p>
                                        </div>
                                        <div class="timeline_body">
                                            <p><?= $competence['texte'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php   
                        }

                    }
                    ?>
                </ul>
            </div>
        </section>

        <section id="diplomes">
            <div class="blue_divider"></div>
            <div id="text_diplomes">
                <h2>Diplômes</h2>
            </div>
            <div class="container">
                <div class="row">
                <?php while($donnees6 = $query6->fetch())
                    {
                    ?>
                        <div class="col-lg-4">
                            <div class="diplome_block">
                                <h5><?= $donnees6['date'] ?></h5>
                                <span><img src="../../images/graduate_icon.png" alt="diplomes icon"></span>
                                <h4><a href=<?='"' . $donnees6['site'] . '"'?> target="_blank" title=<?= '"site ' . $donnees6['etablissement'] . '"'?> alt="site st marie bastide"><?= $donnees6['etablissement'] ?></a></h4>
                                <div class="blue_divider"></div>
                                <h3><?= $donnees6['intitule'] ?></h3>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </section>

        <!-- BACK TO TOP -->
        <div id="backTop" class="text-center">
            <a href="#container_about_me">
                <img src="../../images/chevron_top.png" alt="retour en haut de la page">
            </a>
        </div>
        
        <!-- FOOTER -->
        <?php
            include('../footer.php');
        ?>

        <!-- SCRIPT JS & BOOTSTRAP -->
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
        <script src="CV.js"></script>
    </body>
</html>