<?php

//On récupere les champs
if(isset($_POST)){
		$username 	= $_POST['username'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];
}

//On hash le MDP.   $password = hash('md5',$password);
$password = password_hash($password, PASSWORD_DEFAULT, [ 'cost' => 10]);

//On connecte la DB
include_once('db.php');

//On prépare la requete
$sql = "INSERT INTO users (username, email, password) values (:username, :email, :password)";
$stmt = $conn->prepare($sql);

//ON prépare les données
$stmt-> bindValue (":username", $username);
$stmt-> bindValue (":email", $email);
$stmt-> bindValue (":password", $password);

//On execute la requete
$stmt->execute();

//On redirige
header('Location: ../');