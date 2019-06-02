<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include_once '../header_html.php' ?>;
        <link rel="stylesheet" href="style.css">
        <title>Admin</title>
    </head>
    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-xl fixed-top">
                <a class="navbar-brand" href="#"></a>
                <!-- BURGER MENU -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
                    <span class="fas fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="myNavbar">
                    <ul class="navbar-nav nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <h1>Session administrateur</h1>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./index.php">déconnexion</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        

        <?php include('../script.php'); ?>
    </body>
</html>