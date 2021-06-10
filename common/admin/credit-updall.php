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
			$solde=$_POST["solde$i"];
			$solde_r=$_POST["solde_reset$i"];
                $sql="update bbf  set rfid='$rfid', solde='$solde',solde_reset='$solde_r' where id='$i'";
                $result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
}

//toutes les infos sont dans les variables, il n'y a plus qu'a faire la mise en page et la presentation de ces infos
echo '<head>
<meta http-equiv="refresh" content="0; url=credit-listall.php"></meta>
</head>';
?>


