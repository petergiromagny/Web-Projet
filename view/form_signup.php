<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 21/01/2019
 * Time: 10:32
 */

class form_signup
{

}

?>

<!DOCTYPE html>
<html lang="ENG">
<head>
    <title>signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/signup.css">

</head>
<body>

    <!--SIGN UP-->
    <div id="signup" class="modal-sign-up">
        <form class="box-content-sign-up animate" id="form-signup" action="action_page.php">
            <div class="imgcontainer">
                <span onclick="document.getElementById('signup').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>

            <div class="container">
                <label for="pseudo"><b>Pseudonyme</b></label>
                <input type="text" placeholder="Entrez votre pseudonyme" name="pseudo" required>

                <label for="name"><b>Nom</b></label>
                <input type="text" placeholder="Entrez votre nom" name="name" required>

                <label for="lastname"><b>Prénom</b></label>
                <input type="text" placeholder="Entrez votre prénom" name="lastname" required>

                <label for="promo"><b>Promotion</b></label>
                <select id="promo" name="promo" class="select">
                    <option value="select">Choisissez votre promotion</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="A3">A3</option>
                    <option value="A4">A4</option>
                    <option value="A5">A5</option>
                </select>

                <label for="mail"><b>E-Mail</b></label>
                <input type="text" placeholder="Entrez votre e-mail" name="mail" required>

                <label for="psw"><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrez votre mot de passe" name="psw" required>

                <label for="psw2"><b>Confirmez votre mot de passe</b></label>
                <input type="password" placeholder="Entrez votre mot de passe" name="psw2" required>

                <button class="btn-sign-up" type="submit">S'inscrire</button>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('signup').style.display='none'" class="cancelbtn">Quitter</button>
            </div>
        </form>
        <div class="overlay"></div>
    </div>


    <!--SIGN UP-->
    <script>
        // Get the modal
        var modal = document.getElementById('signup');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
