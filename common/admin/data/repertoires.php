<?php
include '../login.php';

$db = mysqli_connect( $adresse, $login, $password,$database)  or die('Erreur de connexion' .mysqli_error($db));

function repertoire ($propid, $parid,$message,$db, $message2)
{
		$sql="select id,nom from repertoire where propid='$propid' and parentid='$parid' order by nom";
		$result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
		//on explose les resultats pour plus de clarté
		while($row = mysqli_fetch_assoc($result)) {
			$nom=$row["nom"];
			$id2=$row["id"];
			echo '|-'.$message.'><a href="right.php?id='.$propid.'&folder='.$id2.'" target="right">'.$nom.'</a><br>';
			echo '<table><tr><td><form action="upfolder.php" method=POST><input type="text" name="nom" value="'.$nom.'"></td><input type="hidden" name="id" value="'.$id2.'"><input type="hidden" name="prop" value="'.$propid.'"><td><input type="submit" value="renommer"></td></form><form action="delfolder.php" method=POST><input type="hidden" name="prop" value="'.$propid.'"><input type="hidden" name="id" value="'.$id2.'"><td><input type="submit" value="supprimer"></form></td></tr></table>';
			repertoire ($propid,$id2,"--".$message,$db,"sous ".$message2);
			echo '|-'.$message.'--* <a href="addfolder.php?id='.$propid.'&parentfolder='.$id2.'">nouveau '.$message2.' repertoire</a><br>';
		}

}

// On commence par récupérer les champs
if(isset($_GET['id']))      $id=$_GET['id'];
else $id="";
//if (isset($_GET['folder']))      $folderid=$_GET['folder'];
//else $folderid="";
unset($_GET);
$sql="select pseudo from personnage where id='$id'";
$result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
//on explose les resultats pour plus de clarté
while($row = mysqli_fetch_assoc($result)) {
	$nom=$row["pseudo"];
}

echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"/>
    <title>repertoires</title>
    <meta name="description" content="affichage des repertoires">
</head>';

	echo '<body>';
	echo '> '.$nom.'<br><br>';
	repertoire ($id,0,"",$db,"sous");
	echo '|-* <a href="addfolder.php?id='.$id.'&parentfolder=0">nouveau repertoire</a><br>';
	echo '</body>';

//fin de la zone de boulot de JOFFREY :p
?> 
