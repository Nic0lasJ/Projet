<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <input type="text" name="prenom" value="prenom">
    <input type="submit" name="valider" value="valider">


  </body>
</html>

<?php

 $connect = mysql_connect("localhost", "nicolas", "nicolas");
      // if (!$connect)
      // {
      //   die('Erreur de connection'.mysql_error());
      // }
mysql_select_db("givebox", $connect);

  $prenom = $_POST['prenom'];
  $email = $_POST['email'];

  $sql = "INSER TO users SET prenom=$prenom, email=$email;";
  // if (!msql_query($sql,$connect))
  // {
  //   die('ERREUR'.mysql_error());
  // }
  // echo "<center>Votre compte a été créer !</center>";


?>
