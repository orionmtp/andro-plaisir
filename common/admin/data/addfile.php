<?php
include '../login.php';

if (isset($_GET['folder']))      $folderid=$_GET['folder'];
else $folderid="";


$db = mysqli_connect( $adresse, $login, $password,$database)  or die('Erreur de connexion' .mysqli_error($db));
$sql="select propid from repertoire where id='$folderid'";
$result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
$row = mysqli_fetch_assoc($result);
$propid=$row["propid"];
$sql="insert into fichier values (NULL,'$propid','$folderid','à renommer','')";
$result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));

      echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>';
echo '<meta http-equiv="refresh" content="0; url=fichiers.php?folder='.$folderid.'" />';
echo '</head>';
?> 
