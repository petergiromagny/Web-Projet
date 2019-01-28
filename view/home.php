<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 16/01/2019
 * Time: 12:42
 */
require_once "includes/form_signup.php";
require_once "includes/form_login.php";

/*session_start();*/

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

    <?php require_once 'includes/header.php'; ?>

</head>
<body>

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

<?php require_once 'includes/footer.php'; ?>
</body>
</html>