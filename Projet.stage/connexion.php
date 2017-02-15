<?php
    // Nommer les valeurs du fichier givebox.login.php
    // $username = $_POST['mail'];
    // $password = $_POST['motdepasse'];
    //
    //
    // // injection du Mysql
    // $username = stripcslashes($username);
    // $password = stripcslashes($password);
    // $username = mysql_real_escape_string($username);
    // $password = mysql_real_escape_string($password);
    // //
  	// $query = "SELECT * FROM `users`";
  	// $result = mysql_query($query, $link) or die($query . " - " . mysql_error());
    //
  	// $nbResults = mysql_num_rows($result);


//la database de username


    // $result = mysql_query("select * from users where username = '$username' and password = '$password'")
    //             or die("failed to query database ".mysql_error());
    // echo "$result";
    //    $row = mysql_fetch_array($result)
    // {
  //   if ($row['username'] == $username && $row['password'] == $password)
  //   {
  //     echo "Vous ete connecter ! Bienvenu ".$row['username'];
  //   }
  //   else
  //   {
  //     echo "Erreur de connexion !";
  //   }
  // }
  ?>
  <?php
  // On démarre la session
  session_start();
  $loginOK = false;  // cf Astuce

  // connexion au serveur et séléction de la Database
  $link = mysql_connect("localhost", "nicolas", "nicolas");

  mysql_select_db("givebox", $link) or die(mysql_error());
  // On n'effectue les traitement qu'à la condition que
  
  // les informations aient été effectivement postées
  if ( isset($_POST) && (!empty($_POST['mail'])) && (!empty($_POST['motdepasse'])) ) {

    extract($_POST);  // je vous renvoie à la doc de cette fonction

    // On va chercher le mot de passe afférent à ce login
    $sql = "SELECT username, password FROM givebox WHERE submit = '".addslashes($login)."'";
    $req = mysql_query($sql) or die('Erreur SQL : <br />'.$sql);

    // On vérifie que l'utilisateur existe bien
    if (mysql_num_rows($req) > 0) {
       $data = mysql_fetch_assoc($req);

      // On vérifie que son mot de passe est correct
      if ($password == $data['password']) {
        $loginOK = true;
      }
    }
  }

  // Si le login a été validé on met les données en sessions
  if ($loginOK) {
    $_SESSION['pseudo'] = $data['pseudo'];
    // $_SESSION['age'] = $data['age'];
    //    $_SESSION['sexe'] = $data['sexe'];
    // $_SESSION['ville'] = $data['ville'];
  }
  else {
    echo 'Une erreur est survenue, veuillez réessayer !';
  }
  ?>
