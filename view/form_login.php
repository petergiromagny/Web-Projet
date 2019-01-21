<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 21/01/2019
 * Time: 10:32
 */

class form_login
{

}

?>

<!DOCTYPE html>
<html lang="ENG">
<head>
    <title>signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/login.css">

</head>
<body>
    <!--LOGIN CONNEXION-->
    <div id="login" class="modal-login">
        <form class="box-content-login animate" id="form-login" action="action_page.php">
            <div class="imgcontainer">
                <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>

            <div class="container">
                <label for="mail"><b>E-Mail</b></label>
                <input type="text" placeholder="Entrez votre e-mail" name="mail" required>

                <label for="psw"><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrez votre mot de passe" name="psw" required>

                <button class="btn-login" type="submit">Login</button>
                <label style="float: right">
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn-login">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
        <div class="overlay"></div>
    </div>



    <script>
        // Get the modal
        var modal = document.getElementById('login');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
