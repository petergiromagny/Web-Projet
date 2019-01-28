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


    public function showAllItems(){

        $stmt = $this->pdo->prepare("SELECT * FROM article");
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);


        /*foreach ($result as $object){
            echo "<div class='Eventname'>Evenement : ".$object['name']."<br></div>";
            echo "<div class='Eventdesc'>Description : ".$object['description']."<br></div>";
        }*/

        header('Cache-Control: no-cache, must-revalidate');
        header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
        header('Content-type: application/json');
        echo json_encode($result);
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

