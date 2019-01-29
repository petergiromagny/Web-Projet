<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 28/01/2019
 * Time: 23:35
 */

require_once "includes/form_signup.php";
require_once "includes/form_login.php";
require_once "includes/function_shop.php";

$_SESSION['panier'] = array();
$_SESSION['panier']['libelleProduit']=array();
$_SESSION['panier']['qteProduit']=array();
$_SESSION['panier']['prixProduit']=array();

class shopping_cart
{

}
?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <title>Accueil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/shopping_cart.css">

    <?php require_once 'includes/header.php'; ?>

</head>
<body>

<br>
<hr>

    <form method="post" action="">
        <table width="400px ">
            <tr>
                <td colspan="4">Votre Panier</td>
            </tr>
            <tr>
                <td>Libellé produit</td>
                <td>Prix unitaire</td>
                <td>Quantité</td>
                <td>Action</td>
            </tr>
            <?php

                $nbProduits = count($_SESSION['panier']['libelleProduit']);

                if ($nbProduits <= 0){

                    echo'<p style="color:Red">Pas d\'article</p>';

                }else{

                    for ($i = 0; $i<$nbProduits; $i++){

                        echo'salut';

                    }

                }

            ?>
        </table>
    </form>
<hr>

    <?php require_once 'includes/footer.php'; ?>
</body>
</html>
