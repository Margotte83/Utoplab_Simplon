<?php
/* Instancier la classe "Calc" qui va créer les objets*/

class Calc {
/* Variables = attributs (propriétés) des objets*/
    public $num1; /* 'public'visibilité accessible partout*/
    public $num2;
    public $cal;

/* Méthodes = fonctions*/
/* Déclarer une méthode dont le seul but ici est de calculer*/
/* Le constructeur de la classe, soit la fonction qui 
s'exécute automatiquement et qui permet d'exploiter les variables qu'on peut passer 
quand on instancie la classe. */
    public function __construct($nb1, $nb2, $calcul) {
        $this->num1 = $nb1;/* $this fait référence à l'objet appelant*/ 
        $this->num2 = $nb2;
        $this->cal = $calcul;
    }

    public function calculatrice() {
      /* Au cas ou*/switch ($this->cal) {
        case 'add':
            $result = $this->num1 + $this->num2;
            break;
        case 'sous':
            $result = $this->num1 - $this->num2;
            break;
        case 'mul':
            $result = $this->num1 * $this->num2;
            break;
        case 'div':
                $result = $this->num1 / $this->num2;
             break;
/*'instruction à exécuter par défaut lorsque la variable ne prend aucune des valeurs définies 
dans les différents 'case'.*/ 
        default:
            echo ' Erreur !';
            break;
      }
      return $result;
    }

}

 ?>