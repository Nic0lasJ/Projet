<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>
    <form class="form-horizontal" id=inscription method="POST" action="neutre.php" >
        <fieldset>
          <br><br>
          <div class="container">
            <div class="jumbotron">
        <!-- Form Name -->
        <legend>Inscrption</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Pseudo</label>
          <div class="col-md-4">
          <input id="textinput" name="pseudo" type="text" placeholder="" class="form-control input-md" required="" type="text">
          <span class="help-block">Choisissez un pseudo</span>
          </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Email</label>
          <div class="col-md-4">
          <input id="textinput" type="email" name="email" placeholder="" class="form-control input-md" required="" >
          <span class="help-block">Votre adresse email valide</span>
          </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="passwordinput">Mot de passe</label>
          <div class="col-md-4">
            <input id="passwordinput" name="password" placeholder="" class="form-control input-md" required="" type="password">
            <span class="help-block">Choisissez un mot de passe avec une bonne sécuritée</span>
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"></label>
          <div class="col-md-4">
            <button id="singlebutton" type="submit" name="singlebutton" class="btn btn-primary">Valider</button>
          </div>
        </div>

        </div>
        </div>
        </fieldset>
        </form>

  </body>
</html>

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


?>
