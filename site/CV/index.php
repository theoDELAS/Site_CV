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
                <img src="../../images/photo_CV.png" alt="photo de profil Théo Delas" class="rounded-circle">
            </div>
            <div id="text_about_me">
                <h1>Théo Delas</h1>
                <h2>Etudiant à Ingésup - Ynov Informatique</h2>
                <h3>1ère année</h3>
                <a href="../../Documents/CV Théo DELAS 2019.pdf" class="button1">Télécharger CV</a>
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
                    <!-- CONTAINER LEFT PROGRESS-BAR -->
                    <div class="col-md-6">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                <h5>HTML 70%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width:65%">
                                <h5>CSS 65%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                <h5>JAVASCRIPT 60%</h5>
                            </div>
                        </div>
                    </div>
                    <!-- CONTAINER RIGHT PROGRESS-BAR -->
                    <div class="col-md-6">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                <h5>JQUERY 50%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width:65%">
                                <h5>PYTHON 65%</h5>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                <h5>GIT 60%</h5>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <li>
                        <!-- ICON VALISE -->
                        <div class="timeline_icon"><span class="fas fa-briefcase"></span></div>
                        <div class="timeline_panel_container">
                            <div class="timeline_panel">
                                <div class="timeline_text">
                                    <h4>Aquitaine Verre Décor / Concept Emballage</h4>
                                    <h3>Manutentionnaire - Intérimaire</h3>
                                    <p class="duration"><span><img src="../../images/time.png" alt="période d'embauche"></span> 2017 - 2018</p>
                                </div>
                                <div class="timeline_body">
                                    <p>Contrôle qualité</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="timeline_icon"><span class="fas fa-briefcase"></span></div>
                        <div class="timeline_panel_container_inverted">
                            <div class="timeline_panel">
                                <div class="timeline_text">
                                    <h4>ALED Sécurité</h4>
                                    <h3>Assistant Technique - Stagiaire</h3>
                                    <p class="duration"><span><img src="../../images/time.png" alt="période d'embauche"></span> 2016 - 2017</p>
                                </div>
                                <div class="timeline_body">
                                    <p>Observation et aide à l'installation de systèmes de vidéosurveillance</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="timeline_icon"><span class="fas fa-briefcase"></span></div>
                        <div class="timeline_panel_container">
                            <div class="timeline_panel">
                                <div class="timeline_text">
                                    <h4>Pinasse Café</h4>
                                    <h3>Emploi saisonnier - Runner</h3>
                                    <p class="duration"><span><img src="../../images/time.png" alt="période d'embauche"></span> 2016 - 2017</p>
                                </div>
                                <div class="timeline_body">
                                    <p>Interface entre cuisines et salles : transport sur des plateaux les commandes des clients aux serveurs</p>
                                    <p>Mise en place et nettoyage des salles</p>
                                    <p>Réception marchandises</p>
                                    <p>Gestion de stocks</p>
                                    <p>Cuisson des pains</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="timeline_icon"><span class="fas fa-briefcase"></span></div>
                        <div class="timeline_panel_container_inverted">
                            <div class="timeline_panel">
                                <div class="timeline_text">
                                    <h4>G-TEC</h4>
                                    <h3>Responsable méthode QSE - Stagiaire</h3>
                                    <p class="duration"><span><img src="../../images/time.png" alt="période d'embauche"></span> Juillet 2016 - Août 2016</p>
                                </div>
                                <div class="timeline_body">
                                    <p>Création de procès verbaux de prise en charge d'installation</p>
                                    <p>Créations d'étiquettes préventives</p>
                                    <p>Tri de dossiers</p>
                                    <p>Contrôle du bon fonctionnement de climatisations</p>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="timeline_icon"><span class="fas fa-briefcase"></span></div>
                        <div class="timeline_panel_container">
                            <div class="timeline_panel">
                                <div class="timeline_text">
                                    <h4>HUDEL Ebénisterie d'Art</h4>
                                    <h3>Stage d'observation</h3>
                                    <p class="duration"><span><img src="../../images/time.png" alt="période d'embauche"></span> 2012</p>
                                </div>
                                <div class="timeline_body">
                                    <p>Observation et travail du bois, réfection de mobiliers</p>
                                </div>
                            </div>
                        </div>
                    </li>
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
                    <div class="col-lg-4">
                        <div class="diplome_block">
                            <h5>2015</h5>
                            <span><img src="../../images/graduate_icon.png" alt="diplomes icon"></span>
                            <h4><a href="https://www.smb33.fr/" target="_blank" title="site st marie bastide" alt="site st marie bastide">Lycée Sainte Marie Bastide</a></h4>
                            <div class="blue_divider"></div>
                            <h3>Baccalauréat Scientifique SVT</h3>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="diplome_block">
                            <h5>2017</h5>
                            <span><img src="../../images/graduate_icon.png" alt="diplomes icon"></span>
                            <h4><a href="http://www.lyceekastler.fr/" target="_blank" title="site st marie bastide" alt="site st marie bastide">Lycée Alfred Kastler</a></h4>
                            <div class="blue_divider"></div>
                            <h3>BTS Assistance Technique d'Ingénieur</h3>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="diplome_block">
                            <h5>2018 - Aujourd'hui</h5>
                            <span><img src="../../images/graduate_icon.png" alt="diplomes icon"></span>
                            <h4><a href="https://www.ynov.com/" target="_blank" title="site st marie bastide" alt="site st marie bastide">Ynov Informatique</a></h4>
                            <div class="blue_divider"></div>
                            <h3>Ingésup - Ecole d'informatique</h3>
                        </div>
                    </div>
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