<?php

$db=new PDO("mysql:host=localhost","root","");
$q="create database mytrain;" ;
$db->exec($q);

?>
