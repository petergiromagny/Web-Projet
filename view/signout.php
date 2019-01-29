<?php
/**
 * Created by PhpStorm.
 * User: peter
 * Date: 23/01/2019
 * Time: 11:52
 */

if(isset($_GET['logout'])){
    session_start();
    session_unset();
    session_destroy();
    header('Location: ../view/home.php');
}
exit;