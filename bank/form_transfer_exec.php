<?php
include '../common/admin/login.php';

// On commence par récupérer les champs
if(isset($_POST['id']))      $id=$_POST['id'];
else $id="";
if(isset($_POST['id2']))      $id2=$_POST['id2'];
else $id2="";
if(isset($_POST['montant']))      $montant=$_POST['montant'];
else $montant=0;
unset($_POST);
// On vérifie si les champs sont vides
if($id2!="")
// Aucun champ n'est vide, on peut enregistrer dans la table
    {
		//echo "<script>alert(\"la variable est nulle\")</script>"; 
// ici on va chercher dans la base de données les informations correspondantes à la reference rfid entrée
//connection à la base
$db = mysqli_connect( $adresse, $login, $password,$database)  or die('Erreur de connexion' .mysql_error($db));
$sql="update personnage set solde=solde-'$montant' where id='$id'";
$result= mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
$sql="update personnage set solde=solde+'$montant' where id='$id2'";
$result= mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
$sql="insert into cgbankop values (NULL,'$id','$montant','$id2')";
$result= mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
 
echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
transaction effectuée<br>';
        echo '<form action="form_solde.php" method=POST><input type="hidden" name="id" value="'.$id.'"><input type="submit" value="situation du compte"></form><br>';
        echo '<form action="form_transfer.php" method=POST><input type="hidden" name="id" value="'.$id.'"><input type="submit" value="transfer de compte a compte"></form><br><br>';
        echo '<form action="../form_rfid.php" method=POST><input type="hidden" name="id" value="'.$id.'"><input type="submit" value="quitter l\'app"></form>';
echo '</body>';

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
