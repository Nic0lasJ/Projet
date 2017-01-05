<?php

include 'Fichier_class.php';

$file = new Fichier("stats.csv");
// $file->ecrire($_GET['temp'], $_GET['humi']);
echo $file->lire();


?>
