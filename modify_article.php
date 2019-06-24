<?php
	session_start();

	require_once 'base.php';


	require_once 'functions.php';


	$articles = getArticles($db,1,$_GET['id']);

	if (!isset($_GET['id'])) {
		header('location:login.php');
		
	}

	if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
		header('location:admin.php');
	}


	if (isset($_POST) AND !empty($_POST)) {
		if (!empty($_POST['titre']) AND !empty($_POST['texte']) AND !empty($_POST['date'])) {
			$req = $db->prepare(' UPDATE `articles` SET titre = :titre , texte = :texte, date = :date  WHERE id= :id ');
			$req->execute(array( 'titre' => $_POST['titre'], 'texte'=> $_POST['texte'], 'date'=> $_POST['date'] , 'id' => $_GET['id'] ));

			$_SESSION['flash']['succes'] = 'article posté';
		}
		else
		{
			$_SESSION['flash']['error'] = 'champs manquants';
		}
	}

?>

	<h3>modifier article "<?= $articles->titre ?>" </h3>

<?php
	if (isset($_SESSION['flash']['succes'])) {
		echo $_SESSION['flash']['succes'];
	}
	elseif (isset($_SESSION['flash']['erro'])) {
		$_SESSION['flash']['error'];
	}

require_once 'viewformulaires.php';

?>

