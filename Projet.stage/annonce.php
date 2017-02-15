
<!DOCTYPE html>
<html lang="en">
<head>
  <title>GiveBox</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="givebox.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
  <!-- barre de navigation  -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="aide.givebox.php">Besoin d'aide</a>
      </div>

  <!-- Créations d'une bare de navigation  -->


      <ul class="nav navbar-nav">
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Accueil <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href=""><span class="glyphicon glyphicon-question-mark"></span> Des questions</a></li>
            <li><a href=""><span class="glyphicon glyphicon-map-marker"></span>  Emplacement/Coordonnées</a></li>

            <li><a href=""><span ></span>  Mention légal / Droit et devoir</a></li>
          </ul>

        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Déposé une annonce <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="location.givebox.php"><span class="glyphicon glyphicon-list-alt"></span> Location</a></li>
            <li><a href="voiturage.givebox.php"><span class="glyphicon glyphicon-road"></span>  Co-voiturage</a></li>
            <li><a href="jardin.givebox.php"><span class="glyphicon glyphicon-tree-deciduous"></span>  Jardin partagé</a></li>
            <li><a href=""><span class="glyphicon glyphicon-gift"></span>  Givebox </a></li>
            <li><a href="annonce.php">Vendre</a></li>
          </ul>
        </li>
  	  <li><a href="#">Evenements</a></li>
        <!-- <li><a href="#"></a></li> -->
      </ul>

      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Besoin de quelque chose ?">
        </div>
          <button type="submit" class="btn btn-default">Rechercher</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="givebox.enregistrement.php"><span class="glyphicon glyphicon-user"></span> Nouveau ? </a></li>
        <li><a href="givebox.login.php"><span class="glyphicon glyphicon-log-in"></span> Se connecter</a></li>
      </ul>
    </div>
  </nav>


<div class="container">
  <div class="jumbotron">
<form class="form-horizontal">
<fieldset>

<!-- Nom de l'annonce -->
<legend  style="background-color:#7FFFD4">Votre annonce</legend>

<!-- Selecteur de l'annonce -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Catégorie</label>
  <div class="col-md-4">
    <select  id="selectbasic" name="selectbasic" class="form-control">
      <option style="background-color:#E6E6E6" disabled="" value="1">--Emploi/service--</option>
      <option value="">Offre emploi</option>
      <option value="">Service</option>
      <option style="background-color:#E6E6E6" disabled="" value="2">--Véhicule--</option>
<option value="option">Voitures</option>
<option value="option">Motos</option>
<option value="option">Caraving</option>
<option value="option">Utilitaires</option>
<option value="option">Equipement Auto</option>
<option value="option">Equipement Moto</option>
<option value="option">Equipement Caravaning</option>
<option value="option">Nautisme</option>
<option value="option">Equipement Nautisme</option>
      <option style="background-color:#E6E6E6" disabled="" value="3">--Immobilier--</option>
<option value="option">Ventes Immobilières</option>
<option value="option">Locations</option>
<option value="option">Colocations</option>
<option value="option">Bureau et commerces</option>
      <option style="background-color:#E6E6E6" disabled="" value="4">--Multimedia--</option>
<option value="option">Informatique</option>
<option value="option">Consoles & Jeux Vidéo</option>
<option value="option">Image & Son</option>
<option value="option">Téléphonie</option>
      <option style="background-color:#E6E6E6" disabled="" value="5">--Maison--</option>
<option value="option">Ameublement</option>
<option value="option">Electroménager</option>
<option value="option">Décoration</option>
<option value="option">Linge de Maison</option>
<option value="option">Bricolage</option>
<option value="option">Jardinage</option>
<option value="option">Vêtements</option>
<option value="option">Chaussures</option>
<option value="option">Accesoirs & Bagagerie</option>
<option value="option">Montres & Bijoux</option>
<option value="option">Equipement bébé</option>
<option value="option">Vêtements bébé</option>
      <option style="background-color:#E6E6E6" disabled="" value="6">--Loisirs--</option>
<option value="option">DVD / Films</option>
<option value="option">CD / Musique</option>
<option value="option">Livres</option>
<option value="option">Animaux</option>
<option value="option">Vélos</option>
<option value="option">Sports & Hobbies</option>
<option value="option">Instrument de Musique</option>
<option value="option">Collection</option>
<option value="option">Jeux & Jouets</option>
<option value="option">Vin & Gastronomie</option>
      <option style="background-color:#E6E6E6" disabled="" value="7">--Service--</option>
<option value="option">Prestations de Service</option>
<option value="option">Billeterie</option>
<option value="option">Evenement</option>
<option value="option">CoVoiturage</option>
      <option style="background-color:#E6E6E6" disabled="" value="8">---</option>
<option value="option">Autres</option>
    </select>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Type annonce</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input name="radios" id="radios-0" value="1" checked="checked" type="radio">
      Offre
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input name="radios" id="radios-1" value="2" type="radio">
      Demande
    </label>
	</div>
  </div>
</div>


<div class="form-group">
  <label  class="col-md-4 control-label" for="textinput">Titre de l'annonce</label>
  <div class="col-md-4">
  <input id="textinput" style="background-color:#D3D3D3" name="textinput" placeholder="" class="form-control input-md" required="" type="text">

  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Texte de l'annonce</label>
  <div class="col-md-4">
    <textarea style="background-color:#D3D3D3" class="form-control" id="textarea" name="textarea"></textarea>
    <span style="color:black" class="help-block">Soyez explicite</span>
  </div>
</div>

<!-- File Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Photos</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Prix</label>
  <div class="col-md-4">
  <input id="textinput" style="background-color:#D3D3D3" name="textinput" placeholder=" €" class="form-control input-md" required="" type="text">

  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="validation" type="submit" name="validation" class="btn btn-primary">Valider</button>
  </div>
</div>

</fieldset>
</form>
</div>
</div>
</body>
