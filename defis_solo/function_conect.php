<?php
function connexionbdd()
{
	//Définition des variables de connexion à la base de données
	$bd_nom_serveur='localhost';
	$bd_login='root';
	$bd_mot_de_passe='root';
	$bd_nom_bd='trello';

	//Connexion à la base de données
	mysql_connect($bd_nom_serveur, $bd_login, $bd_mot_de_passe);
	mysql_select_db($bd_nom_bd);
	mysql_query("set names 'utf8'");
}
?>
