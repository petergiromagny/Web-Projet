<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 22/01/2019
 * Time: 13:38
 */

class home_connection
{

}
?>

<!DOCTYPE html>
<html lang="ENG">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/style.css">
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
    <!--<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>-->

</head>
<body>

<div class="wrapper">
    <!-- SIDEBAR  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Menu</h3>
            <div class="line"></div>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="home.php"><i class="fa fa-home"></i> Home</a>
                <a href="events.php"><i class="far fa-calendar-alt"></i> Evénements</a>
                <a href="idea.php"><i class="far fa-lightbulb"></i> Idées</a>
                <a href="contact_us.php"><i class="far fa-question-circle"></i> Contactez-nous</a>
                <a href="https://www.facebook.com/bdecesiaix/" target=_blank><i class="fab fa-facebook-f"></i> Facebook</a>
                <a href="https://discord.gg/WCJtbnY" target=_blank><i class="fab fa-discord"></i> Discord</a>
        </ul>
    </nav>

    <!-- PAGE CONTENT  -->
    <div id="content">
        <nav class="navbar">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn-nav"><i class="fas fa-bars"></i></button>
                <div>
                    <button type="button" class="btn-nav btn-sign-up" id="" style="width: auto;"><span class="glyphicon glyphicon-user"></span><i class="fas fa-user"></i> Bonjour <?php echo $_SESSION['pseudo']; ?></button>
                </div>
            </div>
            <div class="title">
                <span class="BDE">BDE </span><span>CESI AIX</span>
            </div>
        </nav>
    </div>

</div>

<div class="overlay"></div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>


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
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>
</body>
</html>