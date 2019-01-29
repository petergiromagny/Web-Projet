<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 22/01/2019
 * Time: 13:10
 */

session_start();

include "form_signup.php";
include "form_login.php";

?>

<!DOCTYPE html>
<html lang="ENG">
<head>
    <title>Contactez nous</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "header.php"; ?>
    <link rel="stylesheet" href="../public/css/contactus.css">

</head>
    <body>
        <h2 class="titre"> Contactez nous ! ! !</h2> <br/><br/>
        <form method="post">
            <div style="text-align:center;">
                <input type="email" name="email" placeholder="Votre E-Mail ... "  size="60" required><br/><br/><br/>
                <textarea style="width:80%;" cols="8" rows="8" name="message" placeholder="Votre message ... " required></textarea><br/><br/><br/><br/>
                <input style="background-color:#f4ab25" type="submit" name = "envoyer" value = "Envoyer">
            </div>
        </form>
    <?php include "footer.php"; ?>
    </body>
</html>
