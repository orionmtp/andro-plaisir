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
    <title>gestionnaire de fichiers</title>
    <meta name="description" content="gestionnaire de fichiers">
</head>';
	echo '<frameset rows="60,*">';
	echo '<frame name="haut" src="top.php?id='.$id.'">';
	echo '<frame name="bas" src="bottom.php?id='.$id.'">';
	echo '</frameset>';
	echo '</html>';

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
