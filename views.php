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


<h1>bienvenue <?php echo  $_SESSION['admin'] ?></h1>



    <?php foreach ($articles as $article): ?>
    <article>
    	<div class="card" style="width: 18rem;">
  			<div class="card-body">
        		<h2 class="card-title"><?php echo $article['titre'] ?></h2>
        		<p class="card-text"><?php echo $article['texte'] ?></p>
				<time><?php echo $article['date'] ?></time>
				<br>
        		<a href="single_art.php?id= <?php echo $article['id'] ?>" class="btn btn-primary">Lire plus</a>
    		</div>
		</div>

    </article>
    <?php endforeach ?>


<form method="POST" action="add_article.php">
<center>
<input type="text" name="titre" size="20" value="titre" maxlength="35"> 
<input type="text" name="text" size="20" value="text" maxlength="35">
<input type="date" name="date" size="20" value="date" maxlength="70"> 
<input type="submit" value="Envoyer" name="envoyer">
</center>
</form>



<a href="deconnexion.php">Déconnexion</a>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>