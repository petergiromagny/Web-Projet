<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 28/01/2019
 * Time: 21:00
 */

class add_article
{

}

?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <title>Accueil</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../public/css/add_article.css">

</head>
<body>

    <!--SIGN UP-->
    <div id="add_article" class="modal-add-article">
        <form class="box-content-add-article animate" id="add-article-fo" name="form-add-article">
            <div class="imgcontainer-add-article">
                <span onclick="document.getElementById('add_article').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>

            <div class="container">
                <label for="username"><b>Pseudo</b></label>
                <input type="text" placeholder="Entrez votre pseudo..." name="username" id="username" required>

                <label for="email"><b>E-Mail</b></label>
                <input type="text" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="Entrez votre e-mail..." name="email" id="email" required>

                <label for="promo"><b>Promotion</b></label>
                <select id="promo" name="promo" class="select">
                    <option value="select">Choisissez votre promotion</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="A3">A3</option>
                    <option value="A4">A4</option>
                    <option value="A5">A5</option>
                </select>

                <label for="subject"><b>Sujet</b></label>
                <textarea id="subject" name="subject" placeholder="Ecrivez votre sujet d'activité..."></textarea>

                <button type="button" onclick="document.getElementById('add_article').style.display='none'" class="cancelbtn-article">Quitter</button>
                <button class="signupbtn-signup" name="btn-article" type="submit">Ajouter</button>
            </div>
            <div class="container" style="background-color:#f1f1f1"></div>
        </form>
        <div class="overlay"></div>
    </div>


    <!--SIGN UP-->
    <script>
        // Get the modal
        var modal = document.getElementById('add_article');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>
</html>
