<?php
// Connexion à la base de données

//variable des champs input

$pseudo=$_POST['pseudo'];
// $prenom=$_POST['prenom'];
$email=$_POST['email'];
$password=$_POST['password'];
// $identifiant=$_POST['identifiant'];

$bdd = new PDO('mysql:host=localhost;dbname=trello;charset=utf8', 'root', 'root');//connexion linux base de données PDO//

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=trello;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
    die ('Erreur : '.$e->getMessage());
}

// Insertion des champs inputs
$req = $bdd->prepare('INSERT INTO utilisateur (pseudo, email, password) VALUES(:pseudo, :email, :password) ');
$req->execute(array(
   'pseudo' => $pseudo,
   'email' => $email,
   'password' => $password,
  //  'mdp' => $mdp,
  //  'identifiant' => $identifiant,
   ));
// $req->execute(array($_POST['pseudo'], $_POST['email'], $_POST['password']));

echo 'L\'utilisateur a bien été ajouté !';

?>
<a href="defis.solo.conection.php"> La connection ce fait ici ! </a>
<?php

// echo 'Vous venez de vous inscrir Clic <a href="defis.solo.conection.php">Ici</a> pour vous connecter ';
 ?>
