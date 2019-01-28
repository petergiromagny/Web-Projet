<?php
/**
 * Created by PhpStorm.
 * User: alex_
 * Date: 28/01/2019
 * Time: 10:18
 */

require_once 'config.php';

class EventModel{
    public function __construct(){
        $this->pdo = singleton::getInstance();
    }


    public function addStudent($username){

        $stmt = $this->pdo->prepare("INSERT INTO event_students SET username = :username");
        $stmt->bindParam(':username',$username);
        $stmt->execute();
    }
}

