<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 17/01/2019
 * Time: 09:27
 */

require_once 'singleton.php';

singleton::setConfig('mysql:host=localhost;dbname=phpwebservice;charset=latin1', 'root', '@dmin');
?>