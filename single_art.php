<?php
session_start();

require_once 'base.php';

require_once 'functions.php';


$articles = getArticles($db,1,$_GET['id']);


echo "<h1>".$articles->titre."</h1>";
echo "<p>".$articles->texte."</p>";

?>


<?php  if (isset($_SESSION['admin']) AND !empty($_SESSION['admin'])) : ?>


<a href="delete_article.php?id=<?= $articles->id ?>"><div>supprimer l'article</div>
<a href="modify_article.php?id=<?= $articles->id ?>"><div>modifier l'article</div>
<a href="admin.php"><div>espace admin</div>

<?php endif  ?>