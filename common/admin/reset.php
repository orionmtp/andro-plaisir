<?php
include 'login.php';

$db = mysqli_connect( $adresse, $login, $password,$database)  or die('Erreur de connexion' .mysqli_error($db));
$sql="update personnage set solde=solde_reset";
$result= mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
$sql="update bbf set solde=solde_reset";
$result= mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db)); 
$sql="drop table bbfbankop";
$result= mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
$sql="drop table cgbankop";
$result= mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
$sql="CREATE TABLE `cgbankop` (   `id` int(11) NOT NULL AUTO_INCREMENT,   `ach` int DEFAULT NULL,   `montant` int(11) DEFAULT NULL,   `vend` int(11) DEFAULT NULL,   PRIMARY KEY (`id`) ) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1";
$result= mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
$sql="CREATE TABLE `bbfbankop` (   `id` int(11) NOT NULL AUTO_INCREMENT,   `ach` int DEFAULT NULL,   `montant` int(11) DEFAULT NULL,   `vend` int(11) DEFAULT NULL, PRIMARY KEY (`id`) ) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1";
$result= mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="0; url=index.html" />
</head>';


?> 
