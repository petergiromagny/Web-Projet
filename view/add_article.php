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

    <!--ADD ARTICLE-->
    <div id="add_article" class="modal-add-article">
        <form class="box-content-add-article animate" id="add-article-fo" name="form-add-article" action="../controller/EventController.php?action=addEvent" method="post">
            <div class="imgcontainer-add-article">
                <span onclick="document.getElementById('add_article').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>

            <div class="container">
                <label for="name"><b>Nom de l'évenement</b></label>
                <input type="text" placeholder="Entrez un nom d'évenement..." name="name" id="name" required>

                <label for="description"><b>Description</b></label>
                <input type="text" placeholder="Entrez une description..." name="description" id="description" required>

                <label for="image"><b>Image</b></label>
                <input type="text" placeholder="Spécifiez le chemin de l'image..." name="image" id="image" required>

                <label for="start_date"><b>Date de début</b></label>
                <input type="date" placeholder="Entrez une description..." name="start_date" id="start_date" required>

                <label for="end_date"><b>Date de fin</b></label>
                <input type="date" placeholder="Entrez une description..." name="end_date" id="end_date" required>

                <label for="place"><b>Lieu</b></label>
                <input type="text" placeholder="Entrez un lieu..." name="place" id="place" required>

                <label for="informations"><b>Informations complémentaires</b></label>
                <input type="text" placeholder="Entrez des informations complémentaires..." name="informations" id="informations" required>

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
