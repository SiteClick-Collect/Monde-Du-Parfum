<?php
$id=$_POST['idUser'];
include "connexion.php";
$req="delete from client where idUser ='".$id."';";
$res=mysqli_query($cx,$req);
if($res)
	{echo "le client a ete supprime<br/>";
	}
	else
	{echo "le client a ete supprime<br/>";}
echo "<a href='indexclient.html'>Retour</a>";
?>

