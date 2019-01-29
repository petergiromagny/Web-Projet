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

    public function deleteImg($img){
        $stmt = $this->pdo->prepare("UPDATE evenement SET image = '' WHERE image = :image");
        $stmt->bindParam(':image',$img);
        $stmt->execute();
    }

    public function addEvent($event_name,$description,$image,$start_date,$end_date,$lieu,$informations){

        $stmt = $this->pdo->prepare("INSERT INTO evenement SET event_name = :event_name, description = :description, image = :image, start_date = :start_date, end_date = :end_date, lieu = :lieu, informations = :informations");
        $stmt->execute([
            "event_name" => $event_name,
            "description" => $description,
            "image" => $image,
            "start_date" => $start_date,
            "end_date" => $end_date,
            "lieu" => $lieu,
            "informations" => $informations
        ]);
    }
}

