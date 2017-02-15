<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="givebox.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="Interface.givebox.php">Accueil</a>
    </div>

<!-- Créations d'une bare de navigation  -->


    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Besoin d'aide <span class="caret"></span></a>
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
          <li><a href="give.givebox.php"><span class="glyphicon glyphicon-gift"></span>  Givebox </a></li>
          <li><a href="achat.vente.php">Vendre / Acheter</a></li>
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

  <!--Si la personne n'est pas connecter, ça affiche "alert" et renvoi a la page login sinon, sa montre le contenue -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
      $('img').click(function()
      {
          alert("Vous devez vous connectez pour voir ceci !");
      });
  });
  </script>
  <div class="container">

  <div class="jumbotron">
    <div class="container text-center">

      <h3>Besoin d'un service ? De chose que vous voulez partager ?</h3>


      <p>La barre de Navigation est là pour vous !</p>
    </div>
  </div>
</div>
<div class="container-fluid bg-3 text-center">
  <h3>Les Annonces récentes</h3><br>
  <div class="row">
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br>

<div class="container-fluid bg-3 text-center">
  <div class="row">
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Some text..</p>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>


</body>
</html>
