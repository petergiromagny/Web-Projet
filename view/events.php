<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 22/01/2019
 * Time: 13:11
 */

session_start();

$_SESSION[''] = 'Peter';
$_SESSION['password']   = '12345';

include "form_signup.php";
include "form_login.php";

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

<br><br><br>
<br>LE FOOTER
<br>LE FOOTER
<br>LE FOOTER
<br>LE FOOTER
<br>LE FOOTER
<hr>
<p>Bonjour <?php echo $_SESSION['firstname']?> ton mot de passe est : <?php echo $_SESSION['password']?></p>
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