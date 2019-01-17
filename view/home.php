<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 16/01/2019
 * Time: 12:42
 */

class home
{

}
?>

<!DOCTYPE html>
<html lang="ENG">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

    <div class="navbar">
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
        </div>

        <div id="main">
            <button class="openbtn" onclick="openNav()">☰</button>
        </div>
        <div class="title">
            <span class="BDE">BDE </span><span>Cesi</span>
        </div>
        <div class="bouton-align">
            <button onclick="" class="connexion" style="width:auto;"><span class="glyphicon glyphicon-user"></span>Sign Up</button>
            <button onclick="" class="connexion" style="width:auto;"><span class="glyphicon glyphicon-log-in"></span>Login</button>
        </div>
    </div>


    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "150px";
            document.getElementById("main").style.marginLeft = "150px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
        }
    </script>
</body>
</html>
