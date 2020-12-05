<form method="POST" action="ModifierClient.php">
<?php
include "connexion.php";
$req="select * from client;";
echo $req;
$res=mysqli_query($cx,$req);

if(!$res)
	{echo "la requete n'a pas pu etre executee";}
	else
	{
	echo "Client : <select name='idC'>";
	$ligne=mysqli_fetch_array($res);

	while($ligne!=false)
		{
		echo "<option value ='".$ligne['idC']."'>".$ligne['NomC']." ".$ligne['PrenomC']." ".$ligne['NationaliteC']."".$ligne['AdrVilleC']." ".$ligne['TelC']."</option>";
		$ligne=mysqli_fetch_array($res);
		}
	echo "</select><br/>";
	}
?>
<input type="submit" name='Choisir' value='Choisir un client'/><br/>
<a href='indexclient.html'>Retour</a>
</form>

