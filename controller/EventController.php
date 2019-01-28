<?php
/**
 * Created by PhpStorm.
 * User: alex_
 * Date: 28/01/2019
 * Time: 09:19
 */

include "../model/EventModel.php";
$bdd = new EventModel();

$username = $_POST['username'];

$action="";
if(array_key_exists("action", $_GET)){
    $action = $_GET['action'];
}

if($action == "addstudent"){
    addStudent($username);
}else{
    showItems();
}

function addStudent($username){
    global $bdd;

    $bdd->addStudent($username);
}

function showItems(){
    global $bdd;
    $bdd->showAllItems();
}