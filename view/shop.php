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
    <!--<div class="filter">-->
        <div class="product-filter">

            <h1>Habille toi aux couleurs de notre BDE !!</h1>

            <div class="sort">

                <div class="collection-sort">
                    <label>Filter by:</label>
                    <select>
                        <option value="/">All Jackets</option>
                    </select>
                </div>

                <div class="collection-sort">
                    <label>Sort by:</label>
                    <select>
                        <option value="/">Featured</option>
                    </select>
                </div>
            </div>
        </div>
    <!--</div>-->


<div>
    <p>HOME</p>
    <p>HOME</p>
    <p>HOME</p>
    <p>HOME</p>
    <p>HOME</p>
</div>


<?php include "footer.php"; ?>
</body>
</html>
