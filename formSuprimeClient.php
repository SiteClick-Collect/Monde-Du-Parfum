<form method="POST" action="SuprimeClient.php">
<?php
include "connexion.php";
$req="select * from client;";
echo $req;
$res=mysqli_query($cx,$req);

if(!$res)
	{echo "la requete n'a pas pu etre executee";}
	else
	{
	echo "Client : <select name='Client'>";
	$ligne=mysqli_fetch_array($res);

	while($ligne!=false)
		{
		echo "<option value ='".$ligne['idUser']."'>".$ligne['NomC']." ".$ligne['PrenomC']."</option>";
		$ligne=mysqli_fetch_array($res);
		}
	echo "</select><br/>";
	}
?>
<input type="submit" name='supprimer' value='SUPPRIMER'/><br/>
<a href='indexclient.html'>Retour</a>
</form>

