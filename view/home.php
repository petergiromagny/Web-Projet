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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <?php include "header.php"; ?>

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
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="../assets/image/slide1.JPG" alt="Airsoft" style="width:100%;">
                </div>

                <div class="item">
                    <img src="../assets/image/slide2.jpg" alt="Calendrier" style="width:100%;">
                </div>

                <div class="item">
                    <img src="../assets/image/slide3.png" alt="Evénements" style="width:100%;">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Precedent</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Suivant</span>
            </a>
        </div>
    </div>

    <div class="container-shop">
        <h2>Habillez vous aux couleurs de votre BDE</h2>
        <div>
            <div class="center">
                <img src="../assets/image/aucune_image.gif" alt="sweat" style="width:100%;" class="image-shop">
            </div>
            <div class="center">
                <img src="../assets/image/aucune_image.gif" alt="tee" style="width:100%;" class="image-shop">
            </div>
            <button href="shop.php" class="btn-shop">Allez à la boutique</button>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<?php include "footer.php"; ?>
</body>
</html>