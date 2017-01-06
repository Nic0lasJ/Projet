
<html>
  <head>

    <title>Récupération de donnée</title>
  </head>
  <body>
    <?php

    include("import.html")


     ?>

<p>Votre fichier sera enregistré sous le nom de : <?php echo strip_tags($_POST['nom']);?> </p>


<p>Le texte que avous avez tapez est : <?php echo strip_tags($_POST['editor']);?></p>

<?php

$fichier = fopen($_POST['nom'].".php","a+");
// crée le fichier avec le nom donnez

fputs($fichier,$_POST['editor']);


fclose($fichier);




?>





  </body>
</html>
