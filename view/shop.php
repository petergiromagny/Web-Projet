<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 23/01/2019
 * Time: 16:50
 */

include "form_signup.php";
include "form_login.php";

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

    <!--Our font family-->
    <!--<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">-->



</head>
<body>

    <?php include "header.php"; ?>

    <div class="container">
        <ul>
            <li>
                <img src="img_avatar.png" alt="Avatar" class="image" style="width:100%">
                <button href="#" class="middle">
                    <div class="text">John Doe</div>
                </button>
            </li>
            <li> <div class="bottom">Heading</div> </li>
            <li> <div class="bottom">Heading</div> </li>
            <li> <div class="bottom">Heading</div> </li>
            <li> <div class="bottom">Heading</div> </li>
            <li> <div class="bottom">Heading</div> </li>
            <li> <div class="bottom">Heading</div> </li>
            <li> <div class="bottom">Heading</div> </li>

        </ul>
    </div>


<?php include "footer.php"; ?>
</body>
</html>
