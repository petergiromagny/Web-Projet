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

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/signup.css">
</head>
<body>

    <!--SIGN UP-->
    <div id="signup" class="modal-sign-up">
        <form class="box-content-sign-up animate" id="signup-fo" name="form-signup">
            <div class="imgcontainer">
                <span onclick="document.getElementById('signup').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>

            <div class="container">
                <label for="pseudo"><b>Pseudonyme</b></label>
                <input type="text" placeholder="Entrez votre pseudonyme" name="username" id="username" required>

                <label for="name"><b>Nom</b></label>
                <input type="text" placeholder="Entrez votre nom" name="lastname" id="lastname" required>

                <label for="lastname"><b>Prénom</b></label>
                <input type="text" placeholder="Entrez votre prénom" name="firstname" id="firstname" required>

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
                <input type="text" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="Entrez votre e-mail" name="mail" id="mail" required>

                <label for="psw"><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrez votre mot de passe" name="password" id="password" required>

                <label for="psw2"><b>Confirmez votre mot de passe</b></label>
                <input type="password" placeholder="Comfirmez votre mot de passe" name="psw2" id="psw2" required>

                <button type="button" onclick="document.getElementById('signup').style.display='none'" class="cancelbtn-signup">Quitter</button>
                <button class="signupbtn-signup" name="button-signup" type="submit">S'inscrire</button>
            </div>

            <div class="container" style="background-color:#f1f1f1">


            </div>
            <div>Salut</div>
        </form>
        <div class="overlay"></div>
    </div>


    <!--SIGN UP JS-->
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
    <script>
        var password = document.getElementById("password")
            , confirm_password = document.getElementById("psw2");

        function validatePassword(){
            if(password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Les mots de passes de correspondent pas");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
</body>
</html>
