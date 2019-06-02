<?php
    try 
    {
        $db = new PDO('mysql:host=localhost;dbname=cv', 'root', '');
    } catch (Exception $e)
    {
        die('Erreur : ' . $e -> getMessage());
    }

    // premier instance
    $name = $firstname = $phone = $message = $email = '';
    $nameError = $firstnameError = $phoneError = $messageError = $emailError = '';
    $isSuccess = false;

    // deuxieme instance
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = secureInput($_POST['name']);
        $firstname = secureInput($_POST['firstname']);
        $phone = secureInput($_POST['phone']);
        $message = secureInput($_POST['message']);
        $email = secureInput($_POST['email']);
        $isSuccess = true;

        if(empty($firstname)) 
        {
            $firstnameError = 'Tu n\'as pas renseigné ton prénom';
            $isSuccess = false;
        } 
        if(empty($name))
        {
            $nameError = 'Tu n\'as pas renseigné ton nom';
            $isSuccess = false;
        }
        if(empty($message))
        {
            $messageError = 'Tu n\'as rien à me dire ?';
            $isSuccess = false;
        }
        if(empty($email))
        {
            $emailError = 'Je ne pourrais pas te répondre';
            $isSuccess = false;
        }
        if(!isEmail($email))
        {
            $emailError = 'Email non valide';
            $isSuccess = false;
        }
        if(!isPhone($phone))
        {
            $phoneError = 'Seulement chiffres et espaces';
            $isSuccess = false;
        }
        if($isSuccess)
        {
            // envoie email
        }
    }


    //  verifier si c'est un email valide (syntaxe)
    function isEmail($var)
    {
        return filter_var($var, FILTER_VALIDATE_EMAIL);
    }

    // verifie si juste des chiffres et des espaces sont rentrés
    function isPhone($var)
    {
        return preg_match("/^[0-9 ]*$/", $var); //chiffre entre 0 et 9 soit espace, * = permet de repeter autant de fois qu'on veut les chiffres
    }

    // securiser les input
    function secureInput ($var)
    {
        $var = trim($var); /* supprime les espaces */
        $var = stripcslashes($var); /* supprime les anti slashes */
        $var = htmlspecialchars($var);
        return $var;
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
                <form id="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" role="form">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Nom *" value="<?php echo $name; ?>" >
                            <p class="error"><?php echo $nameError; ?></p>
                        </div>

                        <div class="col-lg-6">
                            <input type="text" id="first-name" name="firstname" class="form-control" placeholder="Prénom *" value="<?php echo $firstname; ?>" >
                            <p class="error"><?php echo $firstnameError; ?></p>
                        </div>
                        <div class="col-lg-6">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email *" value="<?php echo $email; ?>" >
                            <p class="error"><?php echo $emailError; ?></p>
                        </div>
                        <div class="col-lg-6">
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Téléphone" value="<?php echo $phone; ?>">
                            <p class="error"><?php echo $phoneError; ?></p>
                        </div>
                        <div class="col-lg-12">
                            <textarea class="form-control" name="message" cols="30" rows="5" placeholder="Votre message *" value="<?php echo $message; ?>" ></textarea>
                            <p class="error"><?php echo $messageError; ?></p>
                        </div>
                    </div>
                    <p id="required_field">* Ces champs sont requis</p>

                    <input id="send" type="submit" value="Envoyer" class="btn btn-primary">

                    
                    <p id="thanks" style="display:
                        <?php
                            if($isSuccess)
                            {
                                echo 'block';
                            }
                            else
                            {
                                echo 'none';
                            } 
                            ?>">Merci pour votre message. Il sera lu dans les plus brefs délais.</p>



                    <!-- <div class="container btn_envoyer">
                        <a href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal_envoyer">Envoyer</a>
                        <div class="modal fade" id="modal_envoyer">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title">Merci pour votre message</h3>
                                    </div>
                                    <div class="modal-body">
                                        <p>Il sera lu dans les plus brefs délais</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
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