<?php
include '../common/admin/login.php';

// On commence par récupérer les champs
if(isset($_POST['id']))      $id=$_POST['id'];
else $id="";
if(isset($_POST['rfid']))      $rfid=$_POST['rfid'];
else $rfid="";
unset($_POST);

// On vérifie si les champs sont vides
if(($id!="")&&($rfid!=""))
// Aucun champ n'est vide, on peut enregistrer dans la table
{
	//echo "<script>alert(\"la variable est nulle\")</script>"; 
	// ici on va chercher dans la base de données les informations correspondantes à la reference rfid entrée

	//connection à la base
	$db = mysqli_connect( $adresse, $login, $password,$database)  or die('Erreur de connexion' .mysqli_error($db));

		$sql="select nom,prenom,matricule,valid from personnage where rfid='$rfid'";
		$result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));

		//on explose les resultats pour plus de clarté
		while($row = mysqli_fetch_assoc($result)) {
                        $valid=$row["valid"];
			$nom=$row["prenom"].' '.$row["nom"];
			$matricule=$row["matricule"];
		}

//toutes les infos sont dans les variables, il n'y a plus qu'a faire la mise en page et la presentation de ces infos

// oui c'est une presentation pourrie, mais ca c'est le boulot de JOFFREY !!! 

echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"/>
    <title>transaction banquaire</title>
    <meta name="description" content="accueil de la gestion bancaires">
</head>';

	echo '<body>';
	echo 'informations<br>';
	echo 'nom : '.$nom.'<br>';
        echo 'matricule : '.$matricule.'<br>';
if ($valid==1)
{
echo '<p style="color:#00FF00">ID VALIDE</p><br>';
}
else
{
echo '<p style="color:#FF0000">ID INVALIDE</p><br>';
}
	echo '<form action="scan_hacker.php" method=POST><input type="hidden" name="id" value="'.$id.'"><input type="submit" value="retour scan"></form>';
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
