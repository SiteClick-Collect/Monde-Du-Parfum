<?php
$serv='127.0.0.1';
$util='root';
$pwd='';
$base='clickandcollect';
//connexion au serveur de données
$cx=mysqli_connect($serv,$util,$pwd) or die('connexion au serveur '.$serv.' impossible');
//connexion a la base de données
$cxb=mysqli_select_db($cx,$base) or die('connexion à la base '.$base.' impossible');
?>