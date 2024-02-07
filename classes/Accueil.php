<?php


class Accueil {
  // Propriétés de la classe
  private $titre;
  private $description;
  private $title;
  
  // Constructeur de la classe
  public function __construct($title) {
    $this->title = $title;
    //$this->description = $description;
  }
  
  // Méthodes de la classe
  public function afficherTitre() {
    echo "<h1>" . $this->titre . "</h1>";
  }
  
  public function afficherDescription() {
    echo "<p>" . $this->description . "</p>";
  }

  public function afficherTitle(){
      echo $this->title;
  }

  public function afficherFavIcon(){
      echo "<link rel='shortcut icon' type='image/png' href='/static/image/favicon.png' ";
  }
  
  public function afficherPage() {
    $this->afficherTitre();
    $this->afficherDescription();
  }


}
