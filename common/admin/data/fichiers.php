<?php
include '../login.php';

if (isset($_GET['folder']))      $folderid=$_GET['folder'];
else $folderid="";
unset($_GET);
	$db = mysqli_connect( $adresse, $login, $password,$database)  or die('Erreur de connexion' .mysqli_error($db));

		$sql="select id,nom from fichier where folderid='$folderid' order by nom";
		$result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
        $i=0;
		//on explose les resultats pour plus de clarté
		while($row = mysqli_fetch_assoc($result)) {
			$nom[$i]=$row["nom"];
			$id2[$i]=$row["id"];
			$i++;
		}

echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"/>
    <title>liste des fichiers</title>
    <meta name="description" content="affichage des fichiers d\'un repertoire">
</head>';

	echo '<body>';
if ($folderid!=0)
{	
	$sql="select nom from repertoire where id='$folderid'";
		$result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
		//on explose les resultats pour plus de clarté
		while($row = mysqli_fetch_assoc($result)) {
			echo '> '.$row["nom"].'<br><br>';
		}
}
else
	echo '/<br><br>';
		for ($j=0;$j<$i;$j++)
{
	echo '<a href="data.php?file='.$id2[$j].'" target="donnee">'.$nom[$j].'</a><br><table><form action="upfile.php" method=POST><tr><td><input type="text" name="nom" value="'.$nom[$j].'"></td><td><input type="hidden" name="id" value="'.$id2[$j].'"><input type="hidden" name="folder" value="'.$folderid.'"><input type="submit" value="renommer"></td></form><td><form action="delfile.php" method=POST><input type="hidden" name="id" value="'.$id2[$j].'"><input type="hidden" name="folder" value="'.$folderid.'"><input type="submit" value="supprimer"></form></td></tr></table><br>';
}
echo '<br><a href="addfile.php?folder='.$folderid.'">nouveau fichier </a>';
	echo '</body>';

//fin de la zone de boulot de JOFFREY :p

?> 
