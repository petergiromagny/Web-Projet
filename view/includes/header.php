<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 22/01/2019
 * Time: 16:23
 */


class header
{

}
?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Our font family-->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Font Awesome JS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">



    <div class="wrapper">
        <!-- SIDEBAR  -->
        <header id="sidebar">
            <div class="sidebar-header">
                <h3>Menu</h3>
                <div class="line"></div>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="../view/home.php"><i class="fa fa-home"></i> Home</a>
                    <a href="../view/shop.php"><i class="fas fa-shopping-cart"></i> Boutique</a>
                    <a href="../view/events.php"><i class="far fa-calendar-alt"></i> Evénements</a>
                    <a href="../view/idea.php"><i class="far fa-lightbulb"></i> Idées</a>
                    <a href="../view/contactus.php"><i class="far fa-question-circle"></i> Contactez-nous</a>
                    <a href="https://www.facebook.com/bdecesiaix/" target=_blank><i class="fab fa-facebook-f"></i> Facebook</a>
                    <a href="https://discord.gg/WCJtbnY" target=_blank><i class="fab fa-discord"></i> Discord</a>
            </ul>
        </header>

        <!-- PAGE CONTENT  -->
        <div>
            <header class="navbar">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn-nav"><i class="fas fa-bars"></i></button>
                    <div>
                        <button type="button" onclick="document.getElementById('signup').style.display='block'" class="btn-nav" style="width: auto;"><span class="glyphicon glyphicon-user"></span><i class="fas fa-user-plus"></i> Inscription</button>
                        <button type="button" onclick="document.getElementById('login').style.display='block'" class="btn-nav" style="width: auto;"><span class="glyphicon glyphicon-log-in"></span><i class="fas fa-sign-in-alt"></i> Connexion</button>
                        <button class="btn-nav" onclick="self.location.href='../view/shopping_cart.php'"><i class="fas fa-shopping-cart"></i></button>
                    </div>
                </div>
                <div class="title">
                    <span class="BDE">BDE </span><span>CESI AIX</span>
                </div>
            </header>
        </div>
    </div>



    <div class="overlay"></div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="Ajax.js"></script>


    <!--SIDEBAR-->
    <script type="text/javascript">

        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expandsed', 'false');
            });
            getEvents();
        });
    </script>
    <script type="text/javascript" src="Ajax.js"></script>

