<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 22/01/2019
 * Time: 13:11
 */
session_start();

include "form_signup.php";
include "form_login.php";

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

    <?php include "header.php"; ?>

</head>
<body>



    <div id="eventlists" style="padding-top:50px;">
        liste de evenements
        <div id="listeEvents"></div>
        <!--IMAGE-->
    </div>

<script>
    var user = '<?php echo $username ?>';
    var usertype = '<?php echo $usertype ?>';
</script>

<hr>
<br>LE FOOTER
<br>LE FOOTER
<br>LE FOOTER
<br>LE FOOTER
<br>LE FOOTER
<br>LE FOOTER
<br>LE FOOTER
<br>LE FOOTER
<br>LE FOOTER
<?php include "footer.php"; ?>
</body>
</html>