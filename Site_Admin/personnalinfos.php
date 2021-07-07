<?php
//met a jour les infos personnelles du tuteur

include("db_connexion.php");

$fullname = $_POST['fullname'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$email = $_POST['email'];

try{
    $sql = $db->prepare("SELECT * FROM users WHERE email= '$email'");
    $sql->execute();
    $count = $sql->rowCount();
}catch(Exception $e){
    echo json_encode("Error");
}

if($count == 0){
    echo json_encode("Error");
}else{
    
    $update = "UPDATE users SET fullname ='$fullname',age = '$age',phone ='$phone' WHERE users.email ='$email'";
    $query = $db->query($update);

    if($query){
        echo json_encode("Success");
    }
}
?>