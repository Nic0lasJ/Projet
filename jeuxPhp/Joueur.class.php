<?php
class Joueur{
  private $_pseudo;
  private $_sante;
  private $_force;
  private $_bouclier;
  // Constructeur de la classe Joueur, initialisation des attributs
  public function __construct($pseudo){
    if (is_string($pseudo))
    //On vérifie qu'il sagit bien d'une chaîne de caractères.
    {
      $this->_pseudo = $pseudo;
    }
      $this->_sante = 100;
      $this->_force = 8;
      $this->_bouclier = false;
  }
  // Fonction qui renvoie le pseudo du joueur
  public function getPseudo(){
    return $this->_pseudo;
  }
  // Fonction qui renvoie la santé du joueur
  public function getSante(){
    return $this->_sante;
  }
  // Fonction qui permet d'attaquer un monstre
  public function attaqueMonstre($de){
    return $de * $this->_force;
  }

  // Fonction qui retire le nombre de points de vie correspondants
  public function subitDegats($degats){
    if ($this->_bouclier) {
      $this->_sante = $this->_sante - $degats / 2;
    }else {
      $this->_sante = $this->_sante - $degats;
    }
  }

  // Fonction qui permet d'activer le bouclier
  public function activeBouclier($de){

    if ($de <= 4) {
      $this->_bouclier = false;
    }else {
      $this->_bouclier = true;
    }

  }

  // Fonction qui indique si le joueur est toujours vivant
  public function estVivant(){
  //si la santé est supérieur a 0 le personnage continue sinon il est mort.

    if ($this->_sante <= 0) {
     return true;
   }else {
     return false;
   }
  }
}
?>
