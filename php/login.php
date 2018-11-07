<?php
//Vérifier les données
$email		= $_POST['email'];
$password 	= $_POST['password'];

//On connecte la DB
include_once('db.php');

//on prépare la requete
$sql = "SELECT * FROM users WHERE email = '$email'";
$stmt = $conn->prepare($sql);

//On execute la requete
$stmt->execute();
$user = $stmt->fetch();

//On compare les mots de passes (si mdp meme = ok)
if(isset($user)){
	$passwordIsOk = password_verify($password, $user->password);

	if($passwordIsOk){
		//On connecte l'utilisateur inscrit
		session_start();
		$_SESSION['user'] = $user;
	} 
	else {
		$error = 'Mauvais identifiants';
			
		header('Location: ../login');
	}

//On le redirige
header('Location: ../');
}