<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 17/01/2019
 * Time: 09:31
 */

require_once 'config.php';

class UserModel {

    public function __construct(){
        $this->pdo = singleton::getInstance();
    }

    public function Inscription($username, $password, $firstname, $lastname, $promotion, $mail){

        $requete = $this->pdo->prepare("INSERT INTO users SET username = :username, password = :password, first_name = :firstname, last_name = :lastname, promotion =  :promotion, mail = :mail");

        $requete->execute([
            "fimbu" => $username,
            "peter" => $password,
            "Peter" => $firstname,
            "Giromagny" => $lastname,
            "A2" => $promotion,
            "peter.giromagny@viacesi.fr" =>$mail
            /*"username" => $username,
            "password" => $password,
            "firstname" => $firstname,
            "lastname" => $lastname,
            "promotion" => $promotion,
            "mail" =>$mail*/
        ]);
    }

 /*   public function Connexion(){


        if(empty($username) || empty($motDePasse)) {
            $message = 'Les champs ne sont pas remplis';
        } else {
            $requete = $this->pdo->prepare("SELECT * FROM users WHERE pseudo =? AND  motDePasse =?");
            $requete->execute(array($username, $motDePasse));
            $row = $requete->fetch(PDO::FETCH_BOTH);

            if($requete->rowCount() > 0){
                session_start();
                $_SESSION['pseudo'] = $username;
                $_SESSION['password'] = $motDePasse;
                header('location:connected.php');
            } else {
                echo "Error, wrong password/username";
            }
        }
    }*/
}


