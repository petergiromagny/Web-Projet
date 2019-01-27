<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 16/01/2019
 * Time: 12:42
 */
include "form_signup.php";
include "form_login.php";

class home
{

}

?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <title>Accueil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/style.css">

    <?php include_once 'header.php'; ?>

    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->


</head>
<body>


    <!--<div class="container-img">
        <img src="../assets/image/slide1.JPG" alt="Nature" style="width:100%;">
        <div class="text-block">
            <h4>Activité Airsoft</h4>
            <a href="events.php" class="link">Plus d'information sur cette activitée</a>
        </div>
    </div>-->

    <div class="container-slide">
        <!-- Wrapper for slides -->
        <div class="column">
            <img src="../assets/image/slide1.JPG" alt="Airsoft" class="img" style="width:100%;">
            <button class="btn-slide">Button</button>
        </div>
        <div class="column">
                <img src="../assets/image/slide2.jpg" alt="Calendrier" class="img" style="width:100%;">
        </div>
        <div class="column">
                <img src="../assets/image/slide3.png" alt="Evénements" class="img" style="width:100%;">
        </div>
    </div>

    <div class="container-shop">
        <h2>Habillez vous aux couleurs de votre BDE</h2>
            <div class="center">
                <img src="../assets/image/aucune_image.gif" alt="sweat" style="width:100%;" class="image-shop">
            </div>
            <div class="center">
                <img src="../assets/image/aucune_image.gif" alt="tee" style="width:100%;" class="image-shop">
            </div>
            <button href="shop.php" class="btn-shop">Allez à la boutique</button>
    </div>

    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->

<?php include_once 'footer.php'; ?>
</body>
</html>