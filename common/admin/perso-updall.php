<?php
include 'login.php';
if(isset($_POST['nombri']))      $j=addslashes($_POST['nombri']);
else $j="";

        //echo "<script>alert(\"la variable est nulle\")</script>";
        // ici on va chercher dans la base de données les informations correspondantes à la reference rfid entrée

        //connection à la base
        $db = mysqli_connect( $adresse, $login, $password,$database)  or die('Erreur de connexion' .mysqli_error($db));
for ($i=1;$i<$j;$i++)
{
			$rfid=addslashes($_POST["rfid$i"]);
                        $prenom=$_POST["prenom$i"];
			$nom=$_POST["nom$i"];
			$serial=$_POST["patricule$i"];
			$pseudo=$_POST["pseudo$i"];
			$bio=addslashes($_POST["bio$i"]);
			$solde=$_POST["solde$i"];
			$solde_r=$_POST["solde_reset$i"];
			$valid=$_POST["valid$i"];
                $sql="update personnage set rfid='$rfid', prenom='$prenom',nom='$nom',pseudo='$pseudo',matricule='$serial',bio='$bio',solde='$solde',solde_reset='$solde_r',valid='$valid' where id='$i'";
                $result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
}

//toutes les infos sont dans les variables, il n'y a plus qu'a faire la mise en page et la presentation de ces infos
echo '<head>
<meta http-equiv="refresh" content="0; url=perso-listall.php"></meta>
</head>';
?>


