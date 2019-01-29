<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 22/01/2019
 * Time: 13:10
 */

session_start();

require_once "includes/form_signup.php";
require_once "includes/form_login.php";

class contactus
{

}
?>

<!DOCTYPE html>
<html lang="ENG">
<head>
    <title>Contactez nous</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require_once "includes/header.php"; ?>

    <link rel="stylesheet" href="../public/css/contactus.css">

</head>
    <body>
        <h2 class="titre"> Contactez nous</h2>

        <!--CONTACT US-->
        <form action="">
            <div class="container-contact">
                <label for="email"><b>E-Mail</b></label>
                <input type="text" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="Entrez votre e-mail..." name="email" required>

                <label for="subject"><b>Sujet</b></label>
                <textarea id="subject" name="subject" placeholder="Ecrivez votre sujet d'activité..."></textarea>

                <button class="signupbtn-signup" name="btn-send" type="submit" style="width: 100%">Ajouter</button>
            </div>
        </form>


    </body>

<?php require_once "includes/footer.php"; ?>
</html>
