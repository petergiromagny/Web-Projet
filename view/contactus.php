<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 22/01/2019
 * Time: 13:10
 */

session_start();

require_once "form_signup.php";
require_once "form_login.php";

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

    <?php require_once "header.php"; ?>

</head>
<body>

<div class="container">
    <form action="contactus.php">

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Votre prénom ...">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Votre nom ...">

        <label for="class">Classe</label>
        <select id="class" name="Classe">
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="A3">A3</option>
            <option value="A4">A4</option>
            <option value="A5">A5</option>
        </select>

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Dites nous en plus ..." style="height:200px"></textarea>

        <input type="Envoyer" value="Envoyer">

    </form>
</div>

<?php require_once "footer.php"; ?>
</body>
</html>