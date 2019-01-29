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
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
        <li>6</li>
        <li>7</li>
        <li>8</li>
        <li>9</li>
        <li>10</li>
        <li><span class="active">11 <b>Airsoft</b></span></li>
        <li>12</li>
        <li>13</li>
        <li>14</li>
        <li>15</li>
        <li>16</li>
        <li>17</li>
        <li>18</li>
        <li>19</li>
        <li>20</li>
        <li>21</li>
        <li>22</li>
        <li>23</li>
        <li>24</li>
        <li>25</li>
        <li>26</li>
        <li>27</li>
        <li>28</li>
        <li>29</li>
        <li>30</li>
        <li>31</li>
    </ul>


</body>
<?php require_once "includes/footer.php"; ?>
</html>