<?php
include '../common/admin/login.php';

// On commence par récupérer les champs
if(isset($_POST['id']))      $id=$_POST['id'];
else $id="";
unset($_POST);

// On vérifie si les champs sont vides
if($id!="")
// Aucun champ n'est vide, on peut enregistrer dans la table
{

echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"/>
    <title>transaction banquaire</title>
    <meta name="description" content="accueil de la gestion bancaires">
</head>';

	echo '<body>';
        echo 'scannez l\'ID à vérifier<br>';
	echo '<form action="form_cop.php" method=POST><input type="hidden" name="id" value="'.$id.'"><input type="text" name="rfid" id="rfid" maxlength=30 autofocus></form><br>';
        echo '<form action="../form_rfid.php" method=POST><input type="hidden" name="id" value="'.$id.'"><input type="submit" value="quitter l\'app"></form>';
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
