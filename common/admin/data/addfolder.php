<?php
include '../login.php';

if (isset($_GET['parentfolder']))      $parentid=$_GET['parentfolder'];
else $parentid="";
if (isset($_GET['id']))      $id=$_GET['id'];
else $id="";

$db = mysqli_connect( $adresse, $login, $password,$database)  or die('Erreur de connexion' .mysqli_error($db));
$sql="insert into repertoire values (NULL,'$id','$parentid','à renommer')";
$result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));

      echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>';
echo '<meta http-equiv="refresh" content="0; url=repertoires.php?id='.$id.'" />';
echo '</head>';
?> 
