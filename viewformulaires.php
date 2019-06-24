<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


	<meta property="og:title" content="" />
	<meta property="og:type" content="" />
	<meta property="og:url" content="" />
</head>
<body>	


<form method="POST">

	<h4>titre : </h4>
	<input type="text" name="titre" value="<?= $articles->titre ?>"/>
	<h5>texte : </h5>
	<textarea  name="texte"><?= $articles->texte ?></textarea>
	<h6>date : </h6>
	<input type="date" name="date" value="<?= $articles->date ?>"/>
	<button>modifier</button>
		 
</form>
<a href="admin.php"><div>espace admin</div>
</body>
</html>