<?php
    class Pancake {
        public string $name; 
        
        function set_name(string $newName): void {
            $this->name= $newName;
        }

    }

     $sarrasin = new Pancake(); 
     $sarrasin->set_name("Sarrasin");
     echo "Nom de la crêpe: $sarrasin->name";  

     $chocolat = new Pancake(); 
     $chocolat->set_name("Chocolat");
     echo "<br>";
     echo "Nom de la Crêpe: $chocolat->name";
     


?>