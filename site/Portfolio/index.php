<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mes projets et créations</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    </head>
    <body>
        <?php 
            include('../navbar.php');
        ?>

        <section id="portfolio">
            <div class="text_portfolio">
                <h2>Portfolio</h2>
            </div>
            <div class="white_divider"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <a href="https://unsplash.com" target="_blank">
                            <img class="img-fluid img-thumbnail img_portfolio" src="../../images/spices.jpg" alt="image test">
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="https://unsplash.com" target="_blank">
                            <img class="img-fluid img-thumbnail img_portfolio" src="../../images/mug.jpg" alt="image test">
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="https://unsplash.com" target="_blank">
                            <img class="img-fluid img-thumbnail img_portfolio" src="../../images/nature.jpg" alt="image test">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <a href="https://unsplash.com" target="_blank">
                            <img class="img-fluid img-thumbnail img_portfolio" src="../../images/colors.jpg" alt="image test">
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="https://unsplash.com" target="_blank">
                            <img class="img-fluid img-thumbnail img_portfolio" src="../../images/work.jpg" alt="image test">
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="https://unsplash.com" target="_blank">
                            <img class="img-fluid img-thumbnail img_portfolio" src="../../images/spices.jpg" alt="image test">
                        </a>
                    </div>
                </div>
            </div>
        </section>


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
        <script src="portfolio.js"></script>
    </body>
</html>