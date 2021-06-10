<?php
include '../login.php';

if (isset($_POST['id']))      $id=$_POST['id'];
else $id="";
if (isset($_POST['nom']))      $nom=$_POST['nom'];
else $nom="";
if (isset($_POST['folder']))      $folderid=$_POST['folder'];
else $folderid="";

$db = mysqli_connect( $adresse, $login, $password,$database)  or die('Erreur de connexion' .mysqli_error($db));
$sql="update fichier set nom='$nom' where id='$id'";
$result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));

      echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>';
echo '<meta http-equiv="refresh" content="0; url=fichiers.php?folder='.$folderid.'" />';
echo '</head>';
?> 