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

    public function inscription($username, $password, $firstname, $lastname, $promotion, $mail){

        $retour = new stdClass();

        $test = $this->pdo->prepare("SELECT username FROM utilisateur WHERE username = :username");
        $test->execute(array("username" => $username));

        if($test->rowCount() >= 1) {
           $retour->message = 'Pseudo/Adresse mail déjà utilisée';
            }
        else{
            $this->register($username, $password, $firstname, $lastname, $promotion, $mail);
            $retour->url_redirect = '../view/home.php';

            header('Cache-Control: no-cache, must-revalidate');
            header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
            header('Content-type: application/json');
            echo json_encode($retour);
        }
    }

    private function register($username, $password, $firstname, $lastname, $promotion, $mail){


        $requete = $this->pdo->prepare("INSERT INTO utilisateur SET username = :username, password = sha1(:password), first_name = :firstname, last_name = :lastname, promotion =  :promotion, mail = :mail");

        $requete->execute([
            "username" => $username,
            "password" => $password,
            "firstname" => $firstname,
            "lastname" => $lastname,
            "promotion" => $promotion,
            "mail" =>$mail
        ]);


    }

    public function connexion($mail, $password){

        $retour = new stdClass();
        $retour->success = false;

        if(empty($mail) || empty($password)) {
            $retour->message = 'Les champs ne sont pas remplis';
        } else {
            $requete = $this->pdo->prepare("SELECT * FROM utilisateur WHERE mail = :mail");
            $requete->execute(array("mail" => $mail));

            $result = $requete->fetch(PDO::FETCH_ASSOC);
            if($result['password'] = sha1($password)){
                $username = $result['username'];
                $usertype = $result['user_type'];
                $promotion = $result['promotion'];
                if($requete->rowCount() > 0){
                    session_start();
                    $retour->success = true;
                    $_SESSION['email'] = $mail;
                    $_SESSION['username'] = $username;
                    $_SESSION['usertype'] = $usertype;
                    $_SESSION['promotion'] = $promotion;
                    $retour->url_redirect = '../view/home.php';
                } else {
                    $retour->message = 'Erreur';
                }
            }
        }

        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        echo json_encode($retour);
    }
}


