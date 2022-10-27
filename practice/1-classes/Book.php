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
    public int $nbPages; 
    public string $author;  


    function set_name(string $nouveau) :void{
        $this->nom = $nouveau;
    }

    function set_author(string $author):void {
        $this->author= $author;
    }

    function set_nbPages(int $nbPages ): void {
        $this->nbPages = $nbPages;
    }

    function get_name(): string{
        return $this->nom;
    }
    
 }

 
 class Book2 {
    public  string $nom;
    public int $nbPages; 
    public Person $author; 
 }

 $aBook2  = new Book2();



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



$book = new Book();
$book->set_name("Harry Potter");
$book->set_nbPages(360);
$book->set_author("Hermione");

echo $book->nom, 
    $book->nbPages,
    $book->author;