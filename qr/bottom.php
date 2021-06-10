<?php
include '../common/admin/login.php';

// On commence par récupérer les champs
if(isset($_GET['id']))      $id=$_GET['id'];
else $id="";
unset($_GET);
if($id!="")
// Aucun champ n'est vide, on peut enregistrer dans la table
{

echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"/>
    <title>presentation generale</title>
    <meta name="description" content="welcome basique">
</head>';

	echo '<frameset cols="300,*">';
	echo '<frame name="arbo" src="repertoires.php?id='.$id.'">';
	echo '<frame name="right" src="right.php?id='.$id.'&folder=0">';
	echo '</frameset>';

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