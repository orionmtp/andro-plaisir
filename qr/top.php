<?php
include '../common/admin/login.php';

// On commence par récupérer les champs
if(isset($_GET['id']))      $id=$_GET['id'];
else $id="";

if($id!="")
// Aucun champ n'est vide, on peut enregistrer dans la table
{
	//echo "<script>alert(\"la variable est nulle\")</script>"; 
	// ici on va chercher dans la base de données les informations correspondantes à la reference rfid entrée

	//connection à la base
	$db = mysqli_connect( $adresse, $login, $password,$database)  or die('Erreur de connexion' .mysqli_error($db));

		$sql="select prenom from personnage where id='$id'";
		$result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));

		//on explose les resultats pour plus de clarté
		while($row = mysqli_fetch_assoc($result)) {
			$pseudo=$row["prenom"];
		}

//toutes les infos sont dans les variables, il n'y a plus qu'a faire la mise en page et la presentation de ces infos

// oui c'est une presentation pourrie, mais ca c'est le boulot de JOFFREY !!! 

echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"/>
    <title>presentation generale</title>
    <meta name="description" content="welcome basique">
</head>';

	echo '<body>';
	echo 'Bienvenu sur votre gestionnaire centralisé de fichiers, '.$pseudo.' ';
	echo '<a href="index.php?id='.$id.'" target="_parent">déconnection</a>';
	echo '</body>';

//fin de la zone de boulot de JOFFREY :p
} 
else
{
	echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="0; url=../index.html" />
</head>';
}

?> 