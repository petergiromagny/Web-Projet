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

    public function Inscription(){
        $username = $_POST['pseudo'];
        $motDePasse = $_POST['motDePasse'];

        $requete = $this->pdo->prepare("INSERT INTO users (pseudo, motDePasse) VALUES (:pseudo, :motDePasse)");

        $requete->bindValue(':pseudo',$username, PDO::PARAM_STR);
        $requete->bindValue(':motDePasse',$motDePasse, PDO::PARAM_STR);

        $requete->execute();
    }

    public function Connexion(){
        $username = $_POST['pseudo'];
        $motDePasse = $_POST['motDePasse'];


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
    }
}


