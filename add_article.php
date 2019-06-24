<?php 
session_start();


// On commence par récupérer les champs 
if(isset($_POST['titre']))      $titre=$_POST['titre'];
else      $titre="";

if(isset($_POST['texte']))      $texte=$_POST['texte'];
else      $texte="";

if(isset($_POST['date']))      $date=$_POST['date'];
else      $date="";



// On vérifie si les champs sont vides 
if(empty($titre) OR empty($texte) OR empty($date)) 
    { 
    echo '<font color="red">Attention champs vides !</font>'; 
    } 

// Aucun champ n'est vide, on peut enregistrer dans la table 
else      
    { 
       // connexion à la base
$db = mysql_connect('localhost', 'root', '')  or die('Erreur de connexion '.mysql_error());
// sélection de la base  

    mysql_select_db('fokuza_mvc',$db)  or die('Erreur de selection '.mysql_error()); 
	
	 $idusers= $_GET['idusers'];
     
    // on écrit la requête sql 
    $sql = "INSERT INTO articles(titre, texte, date, idusers) VALUES('$titre','$texte','$date', '$idusers')"; 
     
    // on insère les informations du formulaire dans la table 
    mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error()); 

    // on affiche le résultat pour le visiteur 
    echo 'Vos infos on été ajoutées.'; 

    mysql_close();  // on ferme la connexion 
    }  
?>