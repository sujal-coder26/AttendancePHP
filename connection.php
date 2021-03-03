<?php
$server = 'localhost'; //server
$username = 'root'; //server username
$password = ''; //server user password

$schema ='attendance'; //database name

$pdo = new PDO('mysql:dbname='.$schema.';host='.$server , $username, $password, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ]) ;
?>