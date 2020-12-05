<?php
$idC=$_POST['client'];
include "connexion.php";
$req="select * from client where idC ='".$idC."';";
$res=mysqli_query($cx,$req);
if(!$res)
	{echo "la requete n'a pas pu etre executee";}
	else
	{
	$ligne=mysqli_fetch_array($res);
	
echo "<form method='POST' action='ValideModifClient.php'>";
echo "Numero:<input type='text' name='idC' value='".$ligne['idC']."'/><br/>";
echo "Nom: <input type='text' name='NomC' value='".$ligne['NomC']."'/><br/>";
echo "Prenom : <input type='text' name='PrenomC' value='".$ligne['PrenomC']."'/><br/>";
echo "DateNais: <input type='text' name='DatNaisC' value='".$ligne['DatNaisC']."'/><br/>";
echo "LieuNais: <input type='text' name='LieuNaisC' value='".$ligne["LieuNaisC"]."'/><br/>";
echo "Nationalite: <input type='text' name='NationaliteC'value='".$ligne['NationaliteC']."'/><br/>";
echo"AdrVille: <input type='text' name='AdrVilC'value='".$ligne['AdrVilC']."'/><br/>";
echo "CodPos: <input type='text' name='CodPosC'Value='".$ligne['CodPosC']."'/><br/>";
echo "Telephone: <input type='text' name='TelC'value='".$ligne['TelC']."'/><br/>";
echo "<input type='submit' name='enregistrer' value='ENREGISTRER'/><br/>";
echo "<a href='indexClient.html'>Retour</a>";
echo "</form>";
}

?>

