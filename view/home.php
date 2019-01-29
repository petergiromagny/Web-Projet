<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 16/01/2019
 * Time: 12:42
 */
session_start();

include "form_signup.php";
include "form_login.php";

if(isset($_SESSION['username']) && isset($_SESSION['email']) && isset($_SESSION['usertype']) && isset($_SESSION['promotion'])){
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $usertype = $_SESSION['usertype'];
    $promotion = $_SESSION['promotion'];
}

class home
{

}

?>

<!DOCTYPE html>
<html lang="ENG">
<head>
    <title>Accueil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/style.css">

    <!--Our font family-->
    <!--<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">-->

    <?php include "header.php"; ?>

</head>
<body>

    <div class="container-img">
        <img src="../assets/image/airsoft.JPG" alt="Nature" style="width:100%;">
        <div class="text-block">
            <h4>Activité Airsoft</h4>
            <a href="events.php" class="link">Plus d'information sur cette activitée</a>
        </div>
    </div>


    <div>
        <p>HOME</p>
        <p>HOME</p>
        <p>HOME</p>
        <p>HOME</p>
        <p>HOME</p>
        <p>HOME</p>
        <p>HOME</p>
        <p>HOME</p>
        <p>HOME</p>
        <p>HOME</p>
        <p>HOME</p>
        <p>HOME</p>
        <p>HOME</p>
        <p>HOME</p>
        <p>HOME</p>
    </div>

<?php include "footer.php"; ?>
</body>
</html>