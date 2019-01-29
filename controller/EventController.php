<?php
/**
 * Created by PhpStorm.
 * User: alex_
 * Date: 28/01/2019
 * Time: 09:19
 */

include "../model/EventModel.php";
$bdd = new EventModel();


$action="";
if(array_key_exists("action", $_GET)){
    $action = $_GET['action'];
}

if($action == "addstudent"){
    addStudent($username);
}elseif ($action == "showItems"){
    showItems();
}else{
    addEvents();
}

function addEvents(){

    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $place = $_POST['place'];
    $informations = $_POST['informations'];

    global $bdd;
    $bdd->addEvent($name,$description,$image,$start_date,$end_date,$place,$informations);
}
function addStudent(){
    global $bdd;
    $username = $_POST['username'];
    $bdd->addStudent($username);
}

function showItems(){
    global $bdd;
    $bdd->showAllItems();
}