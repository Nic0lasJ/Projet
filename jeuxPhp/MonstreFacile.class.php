<?php
// Classe MonstreFacile, qui représente un monstre de niveau facile
class MonstreFacile{
  // Constructeur de la classe MonstreFacile, initialisation des attributs
  public function __construct($nom){

      $this->nom = $nom;

  }
  // Fonction qui renvoie le nom du monstre
  public function getNom(){

      return $this -> $nom;

  }
  // Fonction qui renvoie la santé du monstre
  public function getSante(){

      return $this->$_sante;

  }


  // Fonction qui permet au monstre d'attaquer le joueur
  public function attaqueJoueur($de){
  }
  // Fonction qui retire les points de vie correspondants au monstre
  public function subitDegats($degats){
  }
  // Fonction qui indique si un monstre est encore vivant
  public function estVivant(){
  }
}
?>
