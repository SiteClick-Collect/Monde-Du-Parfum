<?php
include 'connexion.php';
$id=$_POST['idC'];
$Nom=$_POST['NomC'];
$Prenom=$_POST['PrenomC'];
$DateNais=$_POST['DatNaisC'];
$LieuNais=$_POST['LieuNaisC'];
$Nationalite=$_POST['NationaliteC'];
$AdrVille=$_POST['AdrVilC'];

$CodePos=$_POST['CodPosC'];
$Telephone=$_POST['TelC'];

$req="update Client set idC='".$id."', NomC='".$Nom."', PrenomC='".$Prenom."',DatNaisC='".$DateNais."',NationaliteC='".$Nationalite."',AdrVilC='".$AdrVille."',CodPosC='".$CodePos."',TelC=".$Telephone.";";
echo $req;
$res=mysqli_query($cx,$req);
if($res)
	{echo "Le client a ete modifie avec succes<br/>";}
	
	else
	{echo "Le client  n'a pas pu etre modifier<br/>";}
echo "<a href='indexclient.html'>Retour</a>";
?>
