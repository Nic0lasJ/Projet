<?php

// On démarre la session avant d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION

$_SESSION['prenom'] = 'Nicolas';
$_SESSION['nom'] = 'Jourdan';
$_SESSION['age'] = 25;

 ?>


 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Teste_de_Session</title>
   </head>
   <body>
     <p>
       Salut <?php echo $_SESSION['prenom']; ! ?> <br>
       Tu es à l'acceuil de mon site (index). Tu veux aller sur une autre page ?
     </p>
     <p>
       <a href="test.session.php"> Lien vers test.session.php </a> <br>
       <a href="test.session2.php"> Lien vers test.session2.php </a> <br>
       <a href="test.session3.php"> Lien vers test.session3.php </a> 
     </p>
   </body>
 </html>
