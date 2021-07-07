<?php

$dns = 'mysql:host=localhost;dbname=id17065435_bacpluspluspdf';
$user = 'id17065435_alban';
$pass = 'Obfl25L+YNq?<=i0';
$trouver = "alban";

try{
	$db = new PDO($dns, $user, $pass);
}catch(PDOException $e){
	$error = $e->getMessage();
	echo $error;
}

$bac = "SELECT * FROM Bac";
$lbac = $db->query($bac);
$matieres = $db->query("SELECT * FROM Matiere");
$les_matieres = array();
$les_bacs = array();
$usersname = array();
$userspass = array();
$users = $db->query("SELECT username,password FROM Administrateurs");
$serie = $db->query("SELECT * FROM Serie");
$les_series = array();

?>