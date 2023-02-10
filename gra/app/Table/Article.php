<?php 

namespace App\Table;

class Article {

//méthode magique appelée __get(). Elle est appelée automatiquement lorsqu'une propriété inaccessible est appelée sur une instance d'objet.
public function __get($key){
// Il définit une variable $method en utilisant la valeur de $key et en concaténant le préfixe "get" et en utilisant ucfirst() pour mettre en majuscule le premier caractère du nom de la propriété.
    $method = 'get' . ucfirst($key);
// Il affecte la valeur retournée par l'appel de la méthode définie par $method à la propriété $key de l'objet courant.
    $this->$key = $this->$method();
//  La valeur de la propriété $key est retournée en fin de méthode.
    return $this->$key;
}


  //pour obtenir l'url
public function getUrl(){
      // return l'url  pour chaque id 
        return 'index.php?p=article$id='  .$this->id;
}


public function getExtrait(){
// Affiche  le texte de contenu pour la mettre sur la page home.php 
// la function native substr c'est pour affciher le texte du 0 caractére au 100
    $html =  '<p>' .  substr($this->contenu, 0,100)  .  '</p>';
    $html .=  '<p><a href="'  .$this->getURL()   . '"> Voir la suite </a></p>';
    return $html;
    }



}