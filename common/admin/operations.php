<?php
include "login.php";

echo '
<head>
  <meta http-equiv="refresh" content="30">
</head>';

        $db = mysqli_connect( $adresse, $login, $password,$database)  or die('Erreur de connexion' .mysqli_error($db));

                $sql="select vend,montant,ach from cgbankop";
                $result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
echo '<body>';
echo 'transactions banquaires CG';
echo '<table>';
echo '<tr>';
echo '<td>acheteur</td>';
echo '<td>montant</td>';
echo '<td>destinataire</td>';
echo '</tr>';
                //on explose les resultats pour plus de clarté
                while($row = mysqli_fetch_assoc($result)) {
$montant=$row["montant"];
$id=$row["ach"];
$id2=$row["vend"];
                $sql="select nom,prenom from personnage where id='$id'";
                $result2=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
                while($row = mysqli_fetch_assoc($result2)) {
 $nom=$row["prenom"].' '.$row["nom"];
}
                $sql="select nom,prenom from personnage where id='$id2'";
                $result2=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
                while($row = mysqli_fetch_assoc($result2)) {
 $nom2=$row["prenom"].' '.$row["nom"];
}

echo '<tr>';
echo '<td>'.$nom.'</td>';
echo '<td>'.$montant.'</td>';
echo '<td>'.$nom2.'</td>';
echo '</tr>';
}
echo '</table><br>';
                $sql="select vend,montant,ach from bbfbankop";
                $result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));

echo 'transactions banquaires BBF';
echo '<table>';
echo '<tr>';
echo '<td>acheteur</td>';
echo '<td>montant</td>';
echo '<td>destinataire</td>';
echo '</tr>';
                //on explose les resultats pour plus de clarté
                while($row = mysqli_fetch_assoc($result)) {
$montant=$row["montant"];
$id=$row["ach"];
$id2=$row["vend"];
                $sql="select rfid from bbf where id='$id'";
                $result2=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
                while($row = mysqli_fetch_assoc($result2)) {
 $rfid=$row["rfid"];
}
                $sql="select rfid from bbf where id='$id2'";
                $result2=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));
                while($row = mysqli_fetch_assoc($result2)) {
 $rfid2=$row["rfid"];
}

mysqli_close($db);
echo '<tr>';
echo '<td>'.$rfid.'</td>';
echo '<td>'.$montant.'</td>';
echo '<td>'.$rfid2.'</td>';
echo '</tr>';

}

echo '</table>';


echo '</body>';
?>
