<?php
    // Nommer les valeurs du fichier givebox.login.php
    $username = $_POST['mail'];
    $password = $_POST['motdepasse'];


    // injection du Mysql
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);
    //
    // connexion au serveur et séléction de la Database


    $connect = mysql_connect("localhost:3306", "root", "root") or die ("Erreur de connexion");
    mysql_select_db("site", $connect) or die ("Erreur de connexion à la base");
    
    la database de username
    $result = mysql_query("select * from users where username = '$username' and password = '$password'")
                or die("failed to query database ".mysql_error());
    echo "$result";
       $row = mysql_fetch_array($result)
    {
    if ($row['username'] == $username && $row['password'] == $password)
    {
      echo "Vous ete connecter ! Bienvenu ".$row['username'];
    }
    else
    {
      echo "Erreur de connexion !";
    }
  }
 ?>
