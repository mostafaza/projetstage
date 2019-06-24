


<?php
session_start();

require_once 'base.php';

if (isset($_POST) AND !empty($_POST)) {
	if (!empty(htmlspecialchars($_POST['username'])) AND !empty(htmlspecialchars($_POST['password']))) {
		$req = $db->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
		$req->execute([
			'username' => $_POST['username'],
			'password' => $_POST['password']

		]);

		$user = $req->fetchObject();

		if($user)
		{
			$_SESSION['admin']= $_POST['username'];
			header('location:admin.php');
		}
		else
		{
			$error='idenetifiants incorrects';
		}
	}
	else
	{
		$error='veillez remplir tout les champs';
	}
}

if (isset($error)) {
	echo $error;
}



require 'viewlogin.php';


?>


