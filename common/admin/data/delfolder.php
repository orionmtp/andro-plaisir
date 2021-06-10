<?php
include '../login.php';

if (isset($_POST['id']))      $folder=$_POST['id'];
else $folder="";
if (isset($_POST['prop']))      $id=$_POST['prop'];
else $id="";
$db = mysqli_connect( $adresse, $login, $password,$database)  or die('Erreur de connexion' .mysqli_error($db));

function deleteall ($_folder,$db)
{
$sql="select id from repertoire where parentid='$_folder'";
$result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
while($row = mysqli_fetch_assoc($result)) {
	deleteall ($row["id"],$db);
}
$sql="delete from fichier where folderid='$_folder'";
$result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
$sql="delete from repertoire where id='$_folder'";
$result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));

}

deleteall($folder,$db);
      echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>';
echo '<meta http-equiv="refresh" content="0; url=repertoires.php?id='.$id.'" />';
echo '</head>';
?> 