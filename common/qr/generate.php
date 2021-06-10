<?php
include '../admin/login.php';
include '../phpqrcode/qrlib.php';
        $db = mysqli_connect( $adresse, $login, $password,$database)  or die('Erreur de connexion' .mysqli_error($db));

                $sql="select matricule from personnage";
                $result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));

                //on explose les resultats pour plus de clarté
	$i=0;
        while($row = mysqli_fetch_assoc($result)) {
                $mat[$i]=$row["matricule"];
		$i++;
        }

for ($j=0;$j<$i;$j++)
{
$nom=$mat[$j].".png";
$message="=http://www.corpusgenesis.fr/tests/akim/qr/index.php?mat=".$mat[$j];
QRcode::png($message, $nom, 'L', 4, 2);
}
?>
