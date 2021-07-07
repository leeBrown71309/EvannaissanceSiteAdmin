
<?php

   include("db_connexion.php");


    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    try{
        $sql = $db->query("SELECT * FROM users WHERE  login='$login' AND email='$email' AND password='$password'");
        $sql->execute();
        $count = $sql->rowCount();
    }catch(Exception $e){
        echo json_encode("Error");
    }

    if($count == 1){
        echo json_encode("Error");    
    }else {
        $insert = "INSERT INTO users(login,email,password) VALUES('$login','$email','$password')";
        $query = $db->query($insert);

        if($query){
            echo json_encode("Success");
        }
    }
?>