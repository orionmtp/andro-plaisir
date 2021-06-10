<?php
include '../login.php';

// On commence par récupérer les champs
	//connection à la base
	$db = mysqli_connect( $adresse, $login, $password,$database)  or die('Erreur de connexion' .mysqli_error($db));
	$sql="select id,pseudo,nom,prenom from personnage order by pseudo";
		$result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
		$i=0;
		//on explose les resultats pour plus de clarté
		while($row = mysqli_fetch_assoc($result)) {
			$id[$i]=$row["id"];
			if ($row['pseudo']!="")
			$pseudo[$i]=$row['pseudo'];
			else $pseudo[$i]=$row['prenom'].' '.$row['nom'];
			$i++;
		}


echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"/>
    <title>presentation generale</title>
    <meta name="description" content="welcome basique">
</head>';

	echo '<body>';
	for ($j=0;$j<$i;$j++)
	{
		echo '<a href="bottom.php?id='.$id[$j].'" target="2">'.$pseudo[$j].'</a><br>';
	}
	echo '</body>';

//fin de la zone de boulot de JOFFREY :p

?> 
