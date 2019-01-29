<?php
/**
 * Created by PhpStorm.
 * User: alex_
 * Date: 23/01/2019
 * Time: 09:45
 */

$bdd = new PDO('mysql:host=localhost;dbname=projet_web;charset=latin1', 'root', '');

$mail = "xxx@xxx.xxx";
$password = "xxx";

$requete = $bdd->prepare("SELECT * FROM users WHERE mail = :mail AND  password = :password");
$requete->execute(array("mail" => $mail, "password" => $password));

$result = $requete->fetch(PDO::FETCH_ASSOC);
$username = $result['username'];

echo $username;