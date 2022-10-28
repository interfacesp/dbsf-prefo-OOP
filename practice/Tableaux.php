<?php
/**
 * 
 */
class Crepe {
    
    public string $nom_crepe;
    

    function __construct(string $nom)
    {
        $this->nom_crepe = $nom;
    }

}

$menu = [ 
        new Crepe("Sarrasin"), 
        new Crepe("Chocolat"), 
        new Crepe("Patate"),
        new Crepe("Amandes"),
        new Crepe("Pistache")
    ];


for ($i=0; $i < count($menu) ; $i = $i + 1) { 
    // echo $menu[$i]->nom_crepe. " <br>";
    echo $menu[$i]->nom_crepe, "<br>";

}