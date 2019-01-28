<?php
/**
 * Created by PhpStorm.
 * User: alex_
 * Date: 25/01/2019
 * Time: 10:23
 */

include "../model/ItemModel.php";
$bdd = new ItemModel();

$action="";
if(array_key_exists("action", $_GET)){
    $action = $_GET['action'];
}

if($action == "delete"){
    delete();
}else{
    showItems();
}

function delete(){
    $id = $_POST['id'];
}

function showItems(){
    global $bdd;

    $bdd->showAllItems();
}