<?php
include '../common/admin/login.php';

$db = mysqli_connect( $adresse, $login, $password,$database)  or die('Erreur de connexion' .mysqli_error($db));

function repertoire ($propid, $parid,$message,$db)
{
		$sql="select id,nom from repertoire where propid='$propid' and parentid='$parid' order by nom";
		$result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
		//on explose les resultats pour plus de clarté
		while($row = mysqli_fetch_assoc($result)) {
			$nom=$row["nom"];
			$id2=$row["id"];
			echo '|-'.$message.'><a href="right.php?id='.$propid.'&folder='.$id2.'" target="right">'.$nom.'</a><br>';
			repertoire ($propid,$id2,"--".$message,$db);
		}
}

// On commence par récupérer les champs
if(isset($_GET['id']))      $id=$_GET['id'];
else $id="";
if (isset($_GET['folder']))      $folderid=$_GET['folder'];
else $folderid="";
unset($_GET);
if($id!="")
// Aucun champ n'est vide, on peut enregistrer dans la table
{
	//echo "<script>alert(\"la variable est nulle\")</script>"; 
	// ici on va chercher dans la base de données les informations correspondantes à la reference rfid entrée

	//connection à la base
	
//toutes les infos sont dans les variables, il n'y a plus qu'a faire la mise en page et la presentation de ces infos

// oui c'est une presentation pourrie, mais ca c'est le boulot de JOFFREY !!! 

echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"/>
    <title>repertoires</title>
    <meta name="description" content="affichage des repertoires">
</head>';

	echo '<body>';
	repertoire ($id,0,"",$db);
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
