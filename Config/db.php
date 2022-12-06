<?php
$host = "localhost";
 $username = "root";
 $password = "";
 $database = "gestionhopital";
 $message = "";
		//Connexion à la base de données
		try
		{
		$bdd = new PDO("mysql:host=$host; dbname=$database;charset=UTF8", $username, $password);
		}
		catch (Exception $e)
		{
		die('Erreur de Connexion à la base de données : ' . $e->getMessage());
		}
?>