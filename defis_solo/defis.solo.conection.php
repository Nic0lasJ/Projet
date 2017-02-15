
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

     <form class="form-horizontal" id=inscription method="POST" action="conect.php">
<fieldset>
<br><br>
  <div class="container">
    <div class="jumbotron">
<legend>Connection</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Pseudo</label>
  <div class="col-md-4">
  <input id="textinput" name="pseudo" placeholder="" class="form-control input-md" required="" type="text">
  <span class="help-block">Choisissez un pseudo</span>
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
