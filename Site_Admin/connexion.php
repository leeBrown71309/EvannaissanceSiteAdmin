<?php

$host = "localhost";
$user = "root";
$dbname = "annalebac";
$password = "";



try{
    $conn= new PDO("mysql:host=".$host.";dbname=".$dbname,$user,$password);

} catch(Exception $e){
    echo $e->getMessage();
    
}


?>