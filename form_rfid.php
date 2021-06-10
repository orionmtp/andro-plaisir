<?php
include 'common/admin/login.php';

// On commence par récupérer les champs
if(isset($_POST['rfid']))      $rfid=addslashes($_POST['rfid']);
else $rfid="";
if(isset($_POST['id']))      $id=$_POST['id'];
else if (isset($_GET['id']))      $id=$_GET['id'];
else $id="";
unset($_POST);
unset($_GET);

// On vérifie si les champs sont vides
if(($rfid!="")or($id!=""))
// Aucun champ n'est vide, on peut enregistrer dans la table
{
        //echo "<script>alert(\"la variable est nulle\")</script>";
        // ici on va chercher dans la base de données les informations correspondantes à la reference rfid entrée

        //connection à la base
        $db = mysqli_connect( $adresse, $login, $password,$database)  or die('Erreur de connexion' .mysqli_error($db));
if ($id=="")
{
                $sql="select id,nom,prenom from personnage where rfid='$rfid'";
                $result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));

                //on explose les resultats pour plus de clarté
                while($row = mysqli_fetch_assoc($result)) {
                        $id=$row["id"];
                        $pseudo=$row["prenom"].' '.$row["nom"];
                }
echo "$rfid $id $pseudo";
}
else
{
                $sql="select nom,prenom from personnage where id='$id'";
                $result=mysqli_query($db,$sql) or die('Erreur SQL !'.$sql.'<br>'.mysqli_error($db));

                //on explose les resultats pour plus de clarté
                while($row = mysqli_fetch_assoc($result)) {
                        $pseudo=$row["prenom"].' '.$row["nom"];
                }

}
//toutes les infos sont dans les variables, il n'y a plus qu'a faire la mise en page et la presentation de ces infos

// oui c'est une presentation pourrie, mais ca c'est le boulot de JOFFREY !!!

echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html"/>
    <title>transaction banquaire</title>
    <meta name="description" content="accueil de la gestion bancaires">
</head>';

        echo '<body>';
        echo 'Bienvenu dans votre espace personnel sécurisé, '.$pseudo.'.<br>';
        echo 'veuillez choisir une opération<br>';
        echo '<form action="data/index.php" method=POST><input type="hidden" name="id" value="'.$id.'"><input type="submit" value="accéder à vos notes personnelles"></form><br>';
echo '<form action="id/form_info.php" method=POST><input type="hidden" name="id" value="'.$id.'"><input type="submit" value="informations sur votre compte"></form><br>';
echo '<br>utilitaires<br>';
echo '<form action="bank/form_choix.php" method=POST><input type="hidden" name="id" value="'.$id.'"><input type="submit" value="la banque CG"></form><br>';
if (($id==5) ||($id==4))
{
echo '<form action="id/scan_cop.php" method=POST><input type="hidden" name="id" value="'.$id.'"><input type="submit" value="vérification ID"></form><br>';
}
echo '<form action="index.html" method=POST><input type="submit" value="deconnection"></form><br><br><br>';


echo 'à mettre genre en bas de page<br>';
        echo 'pour des raisons de sécurité, veuillez ne pas accéder à des services non supportés pour éviter tout risque de piratage<br><br>';

echo 'à mettre genre pages par dessus/popup illegaux<br>';
//le popup pour la banque illegale
        echo '<form action="bbf/index.html" method=POST><input type="submit" value="BBF, la Banque des Bas Fonds"></form><br>';

//un programme d'utilitaire pour hacker, uniquement pour onix
if ($id==21)
{
echo '<br>apps<br>';
echo '<form action="id/scan_hacker.php" method=POST><input type="hidden" name="id" value="'.$id.'"><input type="submit" value="vérification ID"></form><br>';
}



echo '</body>';

//fin de la zone de boulot de JOFFREY :p
}
else
{
        echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="0; url=index.html" />
</head>';
}

?>


