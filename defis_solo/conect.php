
<?php

// Vérification des identifiants

$pseudo=$_POST['pseudo'];
$password=$_POST['password'];


//connexion linux base de données PDO//

$bdd = new PDO('mysql:host=localhost;dbname=trello;charset=utf8', 'root', 'root');

// séléction de la "colone" de la table "utilisateur" ou le "name input" = la variable pseudo "colone";

$req = $bdd->prepare('SELECT pseudo FROM utilisateur WHERE pseudo = :pseudo AND password = :password');

// La req cherche si la variable pseudo et password correspond à la valeur des colonnes

$req->execute(array(
   'pseudo' => $pseudo,
   'password' => $password));

$resultat = $req->fetch();

// Si la requète n'est pas égale aux champs alors on auras mauvais identifiant.

if (!$resultat)
{
   echo 'Mauvais identifiant ou mot de passe !';
}

else
{
   session_start();
   $_SESSION['pseudo'] = $resultat['pseudo'];
   echo 'Vous êtes connecté !';
   echo 'Bonjour '.$_SESSION['pseudo'];
}

?>
