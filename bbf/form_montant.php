<?php
include '../common/admin/login.php';

// On commence par récupérer les champs
if(isset($_POST['id']))      $id=$_POST['id'];
else $id="";
if(isset($_POST['rfid']))      $rfid=$_POST['rfid'];
else $rfid="";

unset($_POST);
// On vérifie si les champs sont vides
if($id!="")
// Aucun champ n'est vide, on peut enregistrer dans la table
{
	//echo "<script>alert(\"la variable est nulle\")</script>"; 
	// ici on va chercher dans la base de données les informations correspondantes à la reference rfid entrée

	//connection à la base
	$db = mysqli_connect( $adresse, $login, $password,$database)  or die('Erreur de connexion' .mysqli_error($db));	
		$sql="select solde from  bbf where id='$id'";
		$result= mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
		//on explose les resultats pour plus de clartéi
		while($row = mysqli_fetch_assoc($result)) {
			$solde=$row["solde"];
		}
		$sql="select id from  bbf where rfid='$rfid'";
		$result= mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
		//on explose les resultats pour plus de clartéi
		while($row = mysqli_fetch_assoc($result)) {
			$id2=$row["id"];
		}		

//toutes les infos sont dans les variables, il n'y a plus qu'a faire la mise en page et la presentation de ces infos

// oui c'est une presentation pourrie, mais ca c'est le boulot de JOFFREY !!! 

echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"/>
    <title>transaction banquaire</title>
    <meta name="description" content="gestion des transactions bancaires">
</head>';
{
	echo '<body>';
        echo '<form action="form_transfer_exec.php" method=POST>
                <input type="hidden" name="id" value="'.$id.'">
                <input type="hidden" name="id2" value="'.$id2.'">				
		montant du transfert<br>
		<input type="number" name="montant" min="0" max="'.$solde.'"><br>
        <input type="submit" name="action" value="valider"></form><br>';
echo '<form action="../index.html" method=POST><input type="submit" value="déconnection"></form>
	</body>';
}
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
