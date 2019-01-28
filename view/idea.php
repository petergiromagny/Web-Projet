<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 22/01/2019
 * Time: 13:11
 */
session_start();

if(isset($_SESSION['username']) && isset($_SESSION['email']) && isset($_SESSION['usertype'])){
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $usertype = $_SESSION['usertype'];
}

session_start();

include "form_signup.php";
include "form_login.php";

class idea
{

}
?>

<!DOCTYPE html>
<html lang="ENG">
<head>
    <title>Idées</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include "header.php"; ?>

</head>
<body>

<br><br><br>
<br>LE FOOTER
<br>LE FOOTER
<br>LE FOOTER
<br>LE FOOTER
<br>LE FOOTER
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
<br>LE FOOTER
<br>LE FOOTER
<br>LE FOOTER
<br>LE FOOTER
<br>LE FOOTER
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