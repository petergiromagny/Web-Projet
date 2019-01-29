<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 22/01/2019
 * Time: 13:11
 */
session_start();

require_once "includes/form_signup.php";
require_once "includes/form_login.php";
require_once 'includes/add_article.php';

if(isset($_SESSION['username']) && isset($_SESSION['email']) && isset($_SESSION['usertype']) && isset($_SESSION['promotion'])){
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $usertype = $_SESSION['usertype'];
    $promotion = $_SESSION['promotion'];
}

class events
{

}
?>

<!DOCTYPE html>
<html lang="ENG">
<head>
    <title>Evénements</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/events.css">

    <?php require_once "includes/header.php"; ?>

</head>
<body>



    <!--<div id="eventlists" style="padding-top:50px;">
        liste de evenements
        <div id="listeEvents"></div>
    </div>

<script>
    var user = '<?php /*echo $username */?>';
    var usertype = '<?php /*echo $usertype */?>';
</script>-->

    <!--CALENDAR-->
    <div class="month">
        <ul>
            <li>
                Janvier<br>
                <span style="font-size:18px">2019</span>
            </li>
        </ul>
    </div>

    <ul class="weekdays">
        <li>Lundi</li>
        <li>Mardi</li>
        <li>Mercredi</li>
        <li>Jeudi</li>
        <li>Vendredi</li>
        <li>Samedi</li>
        <li>Dimanche</li>
    </ul>

    <ul class="days">
        <li><button class="btn-day">1</button></li>
        <li><button class="btn-day">2</button></li>
        <li><button class="btn-day">3</button></li>
        <li><button class="btn-day">4</button></li>
        <li><button class="btn-day">5</button></li>
        <li><button class="btn-day">6</button></li>
        <li><button class="btn-day">7</button></li>
        <li><button class="btn-day">8</button></li>
        <li><button class="btn-day">9</button></li>
        <li><button class="btn-day">10</button></li>
        <li><button class="btn-day">11 <b>Airsoft</b></button></li>
        <li><button class="btn-day">12</button></li>
        <li><button class="btn-day">13</button></li>
        <li><button class="btn-day">14</button></li>
        <li><button class="btn-day">15</button></li>
        <li><button class="btn-day">16</button></li>
        <li><button class="btn-day">17</button></li>
        <li><button class="btn-day">18</button></li>
        <li><button class="btn-day">19</button></li>
        <li><button class="btn-day">20</button></li>
        <li><button class="btn-day">21</button></li>
        <li><button class="btn-day">22</button></li>
        <li><button class="btn-day">23</button></li>
        <li><button class="btn-day">24</button></li>
        <li><button class="btn-day">25</button></li>
        <li><button class="btn-day">26</button></li>
        <li><button class="btn-day">27</button></li>
        <li><button class="btn-day">28</button></li>
        <li><button class="btn-day">29</button></li>
        <li><button class="btn-day">30</button></li>
        <li><button class="btn-day">31</button></li>
    </ul>


</body>
<?php require_once "includes/footer.php"; ?>
</html>