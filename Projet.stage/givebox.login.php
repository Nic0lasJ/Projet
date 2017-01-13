<?php session_start(); ?>
<!DOCTYPE html>

<html>

    <head>

<title>Formulaire d'identification</title>

    </head>

  <body>
  <?php include("nav.givebox.php");  ?> <!-- barre de navigation  -->


<div class="container">
  <!-- Bandeau latérale gris  -->
    <div class="jumbotron">

<!--Formulaire mail pw et chekbox rapelle-->

    <form class="form-horizontal" action="connexion.php" method="POST">
         <div class="form-group">
           <!--input avec : Largeur 4 col longeur 2-->
           <label class="control-label col-sm-2" for="email">Email:</label>
           <div class="col-sm-4">
             <input type="email" class="form-control" id="mail" placeholder="Enter email">
           </div>
         </div>
         <div class="form-group">
           <label class="control-label col-sm-2" for="pwd">Mot de passe:</label>
           <div class="col-sm-4">
             <input type="password" class="form-control" id="motdepasse" placeholder="Enter password">
           </div>
         </div>
         <div class="form-group">
           <div class="col-sm-offset-2 col-sm-10">
             <div class="checkbox">
               <label><input type="checkbox"> Se souvenir de moi ! </label>
             </div>
           </div>
         </div>
         <div class="form-group">
           <div class="col-sm-offset-2 col-sm-10">
             <button type="submit" name="submit" value="Submit" class="btn btn-default">Valider </button>
            </form>

         </div>
       </div>
      </div>
    </div>
  </div>
  </body>
</html>
