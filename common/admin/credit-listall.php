<?php
include 'login.php';

        //echo "<script>alert(\"la variable est nulle\")</script>";
        // ici on va chercher dans la base de données les informations correspondantes à la reference rfid entrée

        //connection à la base
        $db = mysqli_connect( $adresse, $login, $password,$database)  or die('Erreur de connexion' .mysqli_error($db));
                $sql="select * from bbf";
                $result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));

                //on explose les resultats pour plus de clarté
$i=1;
echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"/>
    <title>transaction banquaire</title>
    <meta name="description" content="accueil de la gestion bancaires">
</head>';

        echo '<body>
<form action="credit-updall.php" method=POST>';
                while($row = mysqli_fetch_assoc($result)) {
                        $id=$row["id"];
			$rfid=$row["rfid"];
			$solde=$row["solde"];
			$solde_r=$row["solde_reset"];
echo '
                        <input type="text" name="id'.$i.'" value="'.$id.'">
                        <input type="text" name="rfid'.$i.'" value="'.$rfid.'">
                	<input type="number" name="solde'.$i.'" value="'.$solde.'" size="5">
                	<input type="number" name="solde_reset'.$i.'" value="'.$solde_r.'" size="5"><br>';
$i++;
                }
echo '<input type="hidden" name="nombri" value="'.$i.'">';
echo '<input type="submit" value="enregistrer">
      </form>';
echo '<a href="index.html">retour a l\'index</a>';
echo '</body>';

//toutes les infos sont dans les variables, il n'y a plus qu'a faire la mise en page et la presentation de ces infos

?>


