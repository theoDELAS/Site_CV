<?php
    $name = $firstname = $email = $phone = $message = "";
    $nameError = $firstnameError = $emailError = $phoneError = $messageError = "";
    $isSuccess = false;

    // securiser les input
    function secureInput ($var)
    {
        $var = trim($var); /* supprime les espaces */
        $var = stripcslashes($var); /* supprime les anti slashes */
        $var = htmlspecialchars($var);
        return $var;
    }

    function isMail($var)
    {
        return filter_var($var, FILTER_VALIDATE_EMAIL);
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = secureInput($_POST['name']);
        $firstname = secureInput($_POST['firstname']);
        $email = secureInput($_POST['email']);
        $phone = secureInput($_POST['phone']);
        $message = secureInput($_POST['message']);
        $isSuccess = true;

        if(!empty($name) && !empty($firstname) && !empty($email) && !empty($message))
        {
            try 
            {
                $bdd = new PDO('mysql:host=localhost;dbname=cv', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            } catch (Exception $e)
            {
                die('Erreur : ' . $e -> getMessage());
            }
            
            $query = $bdd->prepare('INSERT INTO message (name, firstname, email, phone, message) VALUES ("' . $name . '", "' . $firstname . '","' . $email . '", "' . $phone . '", "' . $message . '")');
            $query->execute([$name, $firstname, $email, $phone, $message]);
        }
        else
        {
            if(empty($name))
            {
                $nameError = "Quel est ton nom ?";
                $isSuccess = false;
            }
            if(empty($firstname))
            {
                $firstnameError = "Quel est ton prénom ?";
                $isSuccess = false;
            }
            if(empty($message))
            {
                $messageError = "Vous ne pouvez pas envoyer de message vide";
                $isSuccess = false;
            }
            if(!isMail($email))
            {
                $emailError = "Email non valide";
                $isSuccess = false;
            };
        }
    }
    else
    {
        echo 'bdd pas trouvé';
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <?php include_once '../header_html.php'; ?>
        <link rel="stylesheet" href="style.css">
        <title>Contactez-moi</title>
    </head>

    <body>
        <header>
            <?php include('../navbar.php'); ?>
        </header>
        
        <div class="container">
            <h1>Contactez-moi</h1>
            <div class="row">        
                <form id="form" action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" role="form">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Nom *" value="<?= $name ?>">
                            <p class="error"><?= $nameError ?></p>
                        </div>

                        <div class="col-lg-6">
                            <input type="text" id="first-name" name="firstname" class="form-control" placeholder="Prénom *" value="<?= $firstname ?>">
                            <p class="error"><?= $firstnameError ?></p>
                        </div>
                        <div class="col-lg-6">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email *" value="<?= $email ?>">
                            <p class="error"><?= $emailError ?></p>
                        </div>
                        <div class="col-lg-6">
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Téléphone" value="<?= $phone ?>">
                        </div>
                        <div class="col-lg-12">
                            <textarea class="form-control" name="message" cols="30" rows="5" placeholder="Votre message *" value="<?= $message ?>"></textarea>
                            <p class="error"><?= $messageError ?></p>
                        </div>
                    </div>
                    <p id="required_field"><span id="requis">*</span> Ces champs sont requis</p>

                    <input id="send" type="submit" value="Envoyer" class="btn btn-primary">

                    
                    <p id="thanks" style="display: <?php if($isSuccess) echo 'block'; else echo 'none';?>">Merci pour votre message. Il sera lu dans les plus brefs délais.</p>
                </form>
            </div>
        </div>
       
        <footer>
            <?php include('../footer.php'); ?>
        </footer>
        

        <?php include('../script.php'); ?>
        
        
        <script src="contact.js"></script>
    </body>
</html>