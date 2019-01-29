<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 23/01/2019
 * Time: 16:50
 */

session_start();

include "includes/form_signup.php";
include "includes/form_login.php";


if(isset($_SESSION['username']) && isset($_SESSION['email']) && isset($_SESSION['usertype']) && isset($_SESSION['promotion'])){
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $usertype = $_SESSION['usertype'];
    $promotion = $_SESSION['promotion'];
}

class shop
{

}
?>

<!DOCTYPE html>
<html lang="ENG">
<head>
    <title>Boutique</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/shop.css">

</head>
<body>

    <?php require_once "includes/header.php"; ?>

    <div class="main-container">
        <div class="left">
            <img src="../assets/image/sweat.jpg" alt="Avatar" class="image" style="width:100%">
            <button href="#" class="btn-buy"> Ajouter au panier </button>
        </div>
        <div class="left">
            <img src="../assets/image/t-shirt1.png" alt="T-shirt" class="image" style="width:100%">
            <button type="button" href="#" class="btn-buy"> Ajouter au panier </button>
        </div>
        <div class="left">
            <img src="../assets/image/sweat.jpg" alt="Avatar" class="image" style="width:100%">
            <button type="button" href="#" class="btn-buy"> Ajouter au panier </button>
        </div>
        <div class="left">
            <img src="../assets/image/sweat.jpg" alt="Avatar" class="image" style="width:100%">
            <button type="button" href="#" class="btn-buy"> Ajouter au panier </button>
        </div>
        <div class="left">
            <img src="../assets/image/t-shirt1.png" alt="T-shirt" class="image" style="width:100%">
            <button type="button" href="#" class="btn-buy"> Ajouter au panier </button>
        </div>
        <div class="left">
            <img src="../assets/image/sweat.jpg" alt="Avatar" class="image" style="width:100%">
            <button type="button" href="#" class="btn-buy"> Ajouter au panier </button>
        </div>
        <div class="left">
            <img src="../assets/image/t-shirt1.png" alt="T-shirt" class="image" style="width:100%">
            <button type="button" href="#" class="btn-buy"> Ajouter au panier </button>
        </div>
        <div class="left">
            <img src="../assets/image/sweat.jpg" alt="Avatar" class="image" style="width:100%">
            <button type="button" href="#" class="btn-buy"> Ajouter au panier </button>
        </div>
    </div>



</body>
<?php require_once "includes/footer.php"; ?>
</html>
