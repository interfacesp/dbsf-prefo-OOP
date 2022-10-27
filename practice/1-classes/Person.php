<?php
/**
 * Créer une classe Person qui contient un un nom et prénom 
 * 
 * Ecrivez une méthode pour assigner une valeur à chacune des propriétés 
 * 
 * 
 */

class Person {
    public string $firstname; 
    public string $lastname; 


    function set_firstname(string $name): void{
        $this->firstname = $name;
    }

    function set_lastname(string $name): void {
        $this->lastname = $name;
    }

}