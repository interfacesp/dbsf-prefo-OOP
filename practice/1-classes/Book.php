<?php

/**
 * Créer une classe Book avec les propriétés
 * 
 * - name
 * - nbPages 
 * - author (Person)
 * 
 * Ecrivez une méthode pour assigner des valeurs à chaucune des propriétes 
 * 
 */

 class Book {
    public  string $nom;
    

    function set_name(string $nouveau) :void{
        $this->nom = $nouveau;
    }

    function get_name(): string{
        return $this->nom;
    }
    
 }

$harryPotter = new Book(); 
$harryPotter->set_name("Voldemore");
echo $harryPotter->get_name()." <br>";
echo "$harryPotter->nom <br>";
echo "<p>$harryPotter->nom </p>";
echo ("$harryPotter->nom <br>");
echo ("<p>$harryPotter->nom </p>");

echo "<h1>$harryPotter->nom</h1>";
$titre= "<h1>$harryPotter->nom</h1>";
echo $titre;
print "<p>Echo</p>";

echo $titre, $titre,$titre;

print "<p>Print</p>";
print $titre;

