<?php

session_start();

require_once 'base.php';

if (isset($_SESSION['admin']) AND !empty($_SESSION['admin'])) {
	if(isset($_GET['id']))
	{
		$req = $db->query('SELECT * FROM articles WHERE id = '.$_GET['id']);
		$articles = $req->fetch();
		if ($articles) {
			$req = $db->query('DELETE FROM articles WHERE id = '.$_GET['id']);
			header('location:admin.php');
		}
		else
		{
			header('location:admin.php');
		}
	}
}
else
{
	header('location:admin.php');
}


?>

