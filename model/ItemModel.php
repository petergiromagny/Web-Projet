<?php
/**
 * Created by PhpStorm.
 * User: alex_
 * Date: 24/01/2019
 * Time: 09:15
 */

require_once 'config.php';

class ItemModel{
    public function __construct(){
        $this->pdo = singleton::getInstance();
    }

    public function deleteItem($id){

        $stmt = $this->pdo->prepare("DELETE * FROM article where id = :id");
        $stmt->bindParam('id',$id);
        $stmt->execute();

    }

    public function addItem($champs){
        $stmt = $this->pdo->prepare("INSERT INTO article (champs) VALUES ()");
        $stmt->execute();
    }
}

