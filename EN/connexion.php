<?php 

try{
	$bdd = new PDO('mysql:host=localhost;dbname=kctb7549_spiteful;charset=utf8','kctb7549_admin','Admin2021!',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
	die('Erreur: '.$e->getMessage());
}
?>