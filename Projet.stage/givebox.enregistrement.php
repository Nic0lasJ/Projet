<!DOCTYPE HTML>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php include("nav.givebox.php"); ?>

<?php

// definir les variables attention ! les mêmes variables avec juste une majuscule seront les mêmes
$voiturage || $Jardin || $covoiturage = $jardinpartager = $name = $email = $gender = $comment || $website = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
  $voiturage = test_input($_POST["voiturage"]);
  $Jardin = test_input($_POST["Jardin"]);
  $covoiturage = test_input($_POST["covoiturage"]);
  $jardinpartager = test_input($_POST["jardinpartager"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="container">
  <div class="jumbotron">
    <h2>Formulaire inscription </h2>
  <br><br>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group">
          <!--input avec : Largeur 4 col longeur 2-->
          <label class="control-label col-sm-2" for="name">Prénom:</label>
          <div class="col-sm-4">
            <input type="text" class="form-control" name="prenom" id="name" placeholder="Votre prénom">
          </div>
        </div>
  <br><br><br>
          <div class="form-group">
            <!--input avec : Largeur 4 col longeur 2-->
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" name="email" id="email" placeholder="Entrer votre e-mail">
            </div>
          </div>
  <br><br>
          <div class="form-group">
            <!--input avec : Largeur 4 col longeur 2-->
            <label class="control-label col-sm-2" for="website">Website:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="website" id="text" placeholder="Votre site Web">
            </div>
          </div>
  <br><br>
          <div class="form-group">
            <!--input avec : Largeur 4 col longeur 2-->
            <label class="control-label col-sm-2" for="website">Information</label>
            <div class="col-sm-4">
              <textarea class="form-control" name="comment" rows="1" cols="40" id="comment"></textarea>
            </div>
          </div>
  <br><br><br>
<label class="control-label col-sm-2" for="website">Genre:</label>

  <input type="radio" name="gender" value="Femme">Femme
  <input type="radio" name="gender" value="Homme">Homme


<br><br>
  <!--Les cheks box qui ont le même name s'annule !-->
  <!-- <label class="control-label col-sm-2" for="website">  Vous chercher :</label>
  <input type="checkbox" name="covoiturage" value="Co-voiturage">Co-voiturage
  <input type="checkbox" name="jardinpartager" value="Jardin-partager">Jardin partager
  <br><br>
  <label class="control-label col-sm-2" for="website">Vous proposer :</label>

  <input type="checkbox" name="voiturage" value="Co-voiturage">Co-voiturage
  <input type="checkbox" name="Jardin" value="Jardin-partager">Jardin partager
  <br><br> -->
  <br><br>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="Valider" value="Submit" class="btn btn-default">Valider </button>
     </form>
    </div>
  </div>
</form>
<br><br>
<h2>Charte d'utilisateur !</h2>
<a href="#demo" class="btn btn-info" data-toggle="collapse">Clic ici  </a>
<div id="demo" class="collapse">
  Afin de faciliter la bonne marche des transactions effectuées sur ce site, voici quelques règles et informations utiles. Merci d’être le plus précis dans vos annonces : cela sera plus clair pour tout le monde et vous permettra de mieux acheter/vendre !


  I- Règles à respecter sur ce site pour poster des annonces

  A- Prérogatives à la mise en ligne d’annonces

  ·         Le site est réservé aux transactions entre particuliers.
  ·         Pour chaque annonce doit être créé un nouveau sujet (toutefois, ne postez une annonce d’achat que si une recherche parmi les ventes disponibles a été infructueuse, et vice-versa pour poster une annonce de vente).
  ·         Le vendeur fixe le prix qu'il souhaite. Libre à vous de négocier si vous êtes intéressés, libre à lui de refuser s'il trouve le prix trop faible.
  ·         Vous pouvez utiliser le sujet créé pour dialoguer avec les acheter/vendeurs ainsi que les MP.
  ·          Veuillez nous indiquer lorsque la transaction est faite pour que nous puissions fermer le sujet svp.

  B - Le langage sur le site

  ·         Toute annonce, ou message, posté sur le forum doit conserver une écriture soignée ; le langage SMS est prié de rester sagement à l’entrée du forum, de même que toute vulgarité. En cas de non-respect de cela, nous nous réservons le droit de retirer tout post inconvenant. Personne n'étant infaillible, les fautes d'orthographes sont néanmoins tolérées mais les acheteurs et vendeurs doivent faire un effort afin de rendre leurs posts lisibles par tout le monde.
  ·         Nous demandons aux membres de ne pas polluer les messages de ventes par des remarques déplacées ou non constructives. Tout avis est le bienvenue dès lors que cela reste constructif. Tout ce qui n’aura pas lieu d’être dans un topic sera soit modéré, déplacé là où il se doit d’être, voire supprimé.
  ·         Toute pollution de topic par des messages répétés inutiles ou toute vulgarité ou comportement incorrect envers autrui sera sanctionnée d’un avertissement.  Si  l’avertissement ne suffit pas, nous nous permettrons de bannir temporairement ou définitivement l’individu du forum.


  C- Légalité de l’annonce

  ·         Les annonces de ventes d’objets illégaux sont interdites et seront supprimées sans préavis.
  ·         Il est strictement interdit de proposer ou même d'aiguiller les lecteurs vers des démarches illégales (piratage, prostitution, drogue, etc.).
  ·         Le vendeur doit être en mesure de prouver l'origine du bien vendu si elle lui est demandée.


  II- Format des annonces

  A- Titre de l’annonce

  Que vous cherchiez à acheter ou à vendre un bien, votre annonce doit respecter un certain formalisme :

  1-      La balise : [ACHETE] ou [VENDS] ou [ECHANGE]
  2-      Le nom de l’objet
  3-      Sa marque (indiquez « GENERIQUE » s’il n’y en a pas)
  4-      Son état : NEUF ou COMME NEUF ou OCCASION
  5-      Son prix (ou l’objet contre lequel vous souhaitez l’échanger)

  Ex1 : [VENDS] Ballon de foot Nike - OCCASION - 10€
  Ex2 : [ECHANGE] chaussettes bleues « GENERIQUES » - NEUF – Contre chaussettes rouges

  B- Contenu de l’annonce
  Afin que votre annonce soit bien saisie par les lecteurs potentiels, clarté et précision sont impératives. Ainsi, indiquez les informations pertinentes sur votre objet dans le corps de texte de l’annonce. Vous pouvez y faire figurer notamment :

  -        Le nom et la marque de l’objet vendu.
  -        Un descriptif aussi détaillé que possible pour renseigner l’acheteur/vendeur potentiel.
  -        L’état général de l’objet.
  -        Une photo de l’objet ! (surtout dans le cas des ventes).
  -        Indiquez TOUJOURS un prix si vous vendez, même s’il est à débattre.
  -        Indiquez un moyen de vous contacter : téléphone et/ou email.



  III- Responsabilité du site


  Le bon coin de l’Inseec est un service gratuit. Ainsi, nous ne nous tenons aucunement responsable en cas de litige et déclinons toute responsabilité :

  ·         en cas d'interruption du site www.leboncoindelinseec.xooit.fr pour des opérations de maintenance techniques ou d'actualisation des informations publiées,
  ·          en cas d'impossibilité momentanée d'accès au site (et/ou aux sites lui étant liés) en raison de problèmes techniques et ce quelles qu'en soient l'origine et la provenance,
  ·         en cas de dommages directs ou indirects causés à l'utilisateur, quelle qu'en soit la nature, résultant du contenu, de l'accès, ou de l'utilisation du site (et/ou des sites qui lui sont liés),
  ·         en cas d'utilisation anormale ou d'une exploitation illicite du site. L'utilisateur de Le bon coin de l’Inseec est alors seul responsable des dommages causés aux tiers et des conséquences des réclamations ou actions qui pourraient en découler. L'utilisateur renonce également à exercer tout recours contre l’association gérant le site www.leboncoindelinseec.xooit.fr (Grinseec) dans le cas de poursuites diligentées par un tiers à son encontre du fait de l'utilisation et/ou de l'exploitation illicite du site,
  ·         en cas de perte par le membre de www.leboncoindelinseec.xooit.fr de son identifiant et/ou de son mot de passe ou en cas d'usurpation de son identité.

  Le bon coin de l’Inseec se réserve le droit de fournir l’adresse IP d’un membre, ainsi que les sauvegardes de ses posts aux autorités compétentes dans le cas de tentative d’escroquerie.


  Cette charte n'est naturellement pas figée et pourra évoluer au fil du temps.

  Bonnes ventes et bons achats à toutes et tous. ;-)

  </div>
</div>
</div>
<?php

//variable des champs input
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$gender=$_POST['gender'];
//connection a mysql

$connect = mysql_connect("localhost", "nicolas", "nicolas");
if (!$connect)
{
  die('Erreure de connection'.mysql_error());
}

//sélection de la database
mysql_select_db("givebox", $connect);


//insertion de donnée d'enregistrement sur la database users

mysql_query ("INSERT INTO users VALUES ('id', '$prenom', '$email', '$gender') ") ;


?>



</body>
</html>
