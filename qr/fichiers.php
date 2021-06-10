<?php
include '../common/admin/login.php';

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
	$db = mysqli_connect( $adresse, $login, $password,$database)  or die('Erreur de connexion' .mysqli_error($db));

		$sql="select id,nom from fichier where propid='$id' and folderid='$folderid' order by nom";
		$result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
        $i=0;
		//on explose les resultats pour plus de clarté
		while($row = mysqli_fetch_assoc($result)) {
			$nom[$i]=$row["nom"];
			$id2[$i]=$row["id"];
			$i++;
		}

//toutes les infos sont dans les variables, il n'y a plus qu'a faire la mise en page et la presentation de ces infos

// oui c'est une presentation pourrie, mais ca c'est le boulot de JOFFREY !!! 

echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"/>
    <title>liste des fichiers</title>
    <meta name="description" content="affichage des fichiers d\'un repertoire">
</head>';

	echo '<body>';
for ($j=0;$j<$i;$j++)
{
	echo '<a href="data.php?id='.$id.'&file='.$id2[$j].'" target="donnee">'.$nom[$j].'</a><br>';
}
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
