<?php



function getArticles()
{

	require_once 'base.php';


	if(!$_SESSION['admin']){
	header('location:login.php');


	}else
	{

		$articles = $db->query('SELECT * FROM articles ORDER BY id asc');
		return $articles;
	}
}


?>