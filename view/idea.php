<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 22/01/2019
 * Time: 13:11
 */
session_start();

if(isset($_SESSION['username']) && isset($_SESSION['email']) && isset($_SESSION['usertype'])){
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $usertype = $_SESSION['usertype'];
}

require_once "includes/form_signup.php";
require_once "includes/form_login.php";

class idea
{

}
?>

<!DOCTYPE html>
<html lang="ENG">
<head>
    <title>Idées</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/idea.css">

    <?php require_once "includes/header.php"; ?>

</head>
<body>

    <!--ADD ARTICLE-->
        <form name="form-idea">

            <div class="container-idea">
                <label for="username"><b>Pseudo</b></label>
                <input type="text" placeholder="Entrez votre pseudo..." name="username" id="username" required>

                <label for="email"><b>E-Mail</b></label>
                <input type="text" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="Entrez votre e-mail..." name="email" id="email" required>

                <label for="promo"><b>Promotion</b></label>
                <select id="promo" name="promo" class="select">
                    <option value="select">Choisissez votre promotion</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="A3">A3</option>
                    <option value="A4">A4</option>
                    <option value="A5">A5</option>
                </select>

                <label for="subject"><b>Sujet</b></label>
                <textarea id="subject" name="subject" placeholder="Ecrivez votre sujet d'activité..."></textarea>

                <button class="btn-idea" name="btn-article" type="submit">Ajouter</button>
            </div>
        </form>
    </div>

    <?php include "includes/footer.php"; ?>
</body>
</html>