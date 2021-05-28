<?php


// connexion

$servername ="localhost" ;
$username = "root";
$password = "";
$dbname = "permute";

// créer la connexion
$conn = mysqli_connect ($servername, $username, $password, $dbname);

if(!$conn){
    die('Could not Connect My Sql:' .mysql_error());
 }
?>