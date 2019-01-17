<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 17/01/2019
 * Time: 09:27
 */

include "UserModel.php";

class UserController{

    public function __construct()
    {
        $this->controller();
    }

    private function controller(){
        $bdd = new UserModel();

        if(/*connexion*/ ){
            $bdd->Connexion();
        }

        elseif(/*inscription*/){
            $bdd->Inscription();
        }


    }
}