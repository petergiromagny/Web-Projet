<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 22/01/2019
 * Time: 13:10
 */

session_start();

include "form_signup.php";
include "form_login.php";

?>
<?php
if(isset($_POST['Mailform']))
{
    if(!empty($_POST['Mail']) AND !empty($_POST['Message']))
    {

    }
    else
    {
        $msg="Tout les champs doivent être complétés!";
    }
}
?>
<!DOCTYPE html>
<html lang="ENG">
<head>
    <title>Contactez nous</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include "header.php"; ?>

</head>
    <body>
        <form method=""POST" action="">
            <h2> Contactez nous par mail ! </h2>

                        <input type="email" name="Mail" placeholder="Votre mail ..."><br><br />
                        <textarea type="text" name="Message" placeholder="Votre message..."></textarea><br><br />
                        <input type="submit" value="Envoyer" name=""Mailform"><br><br />
        </form>
    <?php
        if(isset($msg))
        {
            echo($msg);
        }
    ?>
    <?php include "footer.php"; ?>
    </body>
</html>
