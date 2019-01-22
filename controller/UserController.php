<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 17/01/2019
 * Time: 09:27
 */


include "../model/UserModel.php";
$bdd = new UserModel();

$status = "null";


if(array_key_exists("status", $_GET)){
    $status = $_GET['status'];
}

if($status == "connexion"){
    connexion();
}else{
    inscription();
}


function inscription(){
    global $bdd;

    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $promotion = $_POST['promo'];
    $mail = $_POST['mail'];

    $bdd->Inscription($username, $password, $firstname, $lastname, $promotion, $mail);

}