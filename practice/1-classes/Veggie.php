<?php

/**
 * Créer une classe Veggie qui contient comme propriétés:
 * nom (string), nomrbe de calories (int)
 * 
 * Ecrivez une méthode pour assigner des valeurs chacune des propriétés
 */

 class Veggie {
    public string $name;
    public int $nbCalories; 


    function set_name(string $newName): void {
        $this->name = $newName;
    }

    function set_nbCalories(int $nbCalories):void {
        $this->nbCalories = $nbCalories;
    }

    function pretty_print():void {
        echo " <p>$this->name</p>";
    }

 }

 $poireau = new Veggie();
 $poireau->set_name("Poireau");
 $poireau->set_nbCalories(29);

 $chouDBxl = new Veggie();
 $chouDBxl->set_name("Choux De Bruxelles");
 $chouDBxl->set_nbCalories(31);
 $chouDBxl->pretty_print();

 echo "Les légumes du panier: $poireau->name, $chouDBxl->name";

 

 echo "<p>Votre Panier: </p>", 
      "<ul>",
      "<li>$poireau->name</li>",
      "<li>$chouDBxl->name</li>",
      "</ul>";

echo $poireau->name, "<br>", $chouDBxl->name;
