<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 22/01/2019
 * Time: 13:11
 */
session_start();

require_once "../view/includes/form_signup.php";
require_once "../view/includes/form_login.php";
require_once "add_article.php";

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

    <link href="https://fonts.googleapis.com/css?family=Lato:900i" rel="stylesheet">

    <?php require_once "includes/header.php"; ?>

</head>
<body>



    <div id="eventlists" style="padding-top:10px;">
        <h1>Evenements</h1>
        <div id="listeEvents">

        </div>
        <?php if(isset($_SESSION['usertype'])){
            if ($_SESSION['usertype'] == 1 || $_SESSION['usertype'] == 3) {
                echo "<button class='btn-add-event' onclick=\"document.getElementById('add_article').style.display='block'\">Ajouter un evenement</button>";
            }
        } ?>
    </div>


    <script type="text/javascript" src="Ajax.js">
        $(document).ready(function () {
            getEvents();
        });
    </script>
</body>
<?php require_once "includes/footer.php"; ?>
</html>