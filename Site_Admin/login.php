
<?php
 

include("db_connexion.php");

$email = $_POST['email'];
$password = $_POST['password'];


try{
    $sql = $db->prepare("SELECT * FROM users WHERE email= '".$email."' AND password= '".$password."'");
    $sql->execute();
    $count = $sql->rowCount();
} catch(Exception $e){
    echo json_encode("Error");
}
   if($count == 0){
       echo json_encode("Error");
   }else{
       echo json_encode("Success");
   }
   
    
/*
   $result = $conn->prepare($sql);
   $result->execute();
   $count = $result->num_rows();
    

    if($count == 1){
        echo json_encode("Success");
    }else{
        echo json_encode("Error");
    }
    

  */
?>