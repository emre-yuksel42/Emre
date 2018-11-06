<?php
//Vérifier les données
$email = $_POST['email'];
$password = $_POST['password'];

//On hash le MDP.   $password = hash('md5',$password);

$password = password_hash($password, PASSWORD_DEFAULT, [ 'cost' => 15]);
//On connecte la DB
include_once('db.php');

//on prépare la requete
$sql = "SELECT * FROM users WHERE email = '$email'";
$stmt = $conn->prepare($sql);

//On execute la requete
$stmt->execute();
$user = $stmt->fetch();

//On compare les mots de passes (si mdp meme = ok)

if (isset($users)){
		$passwordIsOk = password_verify($password, $users['password']);

		if ($passwordIsOk){
			
			$_SESSION['users'] = $users;
		}

		else {
			$error = "mauvais identifiants";
		}
 

//On connecte l'utilisateur inscrit


//On le redirige