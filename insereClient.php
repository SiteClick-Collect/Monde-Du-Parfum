<?php
include 'connexion.php';

$id=$_POST['idC'];

$Nom=$_POST['NomC'];

$Prenom=$_POST['PrenomC'];

$DateNais=$_POST['DateNaisC'];

$LieuNais=$_POST['LieuNaisC'];

$Nationalite=$_POST['NationaliteC'];

$AdrVille=$_POST['AdrVilC'];

$CodPos=$_POST['CodPosC'];

$Telephone=$_POST['TelC'];

$req="insert into Client values('".$id."','".$Nom."','".$Prenom."','".$DateNais."','".$LieuNais."','".$Nationalite."','".$AdrVille."','".$CodPos."',".$Telephone.");";
echo $req;
$res=mysqli_query($cx,$req);
if($res)
	{echo "Client ".$id."','".$Nom."','".$Prenom."','".$DateNais."','".$Nationalite."','".$AdrVille."','".$CodPos."',".$Telephone." a ete insere avec succes<br/>";}
	
	else
	{echo "Client ".$id."','".$Nom."','".$Prenom."','".$DateNais."','".$Nationalite."','".$AdrVille."','".$CodPos."',".$Telephone." n'a pas pu etre insere<br/>";}

echo "<a href='indexclient.html'>Retour</a>";
?>
