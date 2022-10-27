<?php

/**
 * Créer une classe Station (Transport en commun) avec comme propriétés 
 * nom, nbExits
 * 
 * Ecrivez une méthode pour assigner des valeurs à chacune des propriétés 
 */

class Station {
    public string $st_name; 
    public int $nbExits; 


    function set_station_name(string $name): void{
        $this->st_name = $name;
    }

    function set_nb_exits(int $numberExits): void {
        $this->nbExits = $numberExits;
    }

    function pretty_print():void {
        echo "<h1>La station $this->st_name a $this->nbExits sorties </h1>";
    }

    function get_nbExits(): int {
        return $this->nbExits;
    }
}

$simonis = new Station();
$simonis->set_station_name("Simonis");
$simonis->set_nb_exits(3);
$simonis->pretty_print();


$arts_loi = new Station();
$arts_loi->set_station_name("Arts-Loi");
$arts_loi->set_nb_exits(2);
$arts_loi->pretty_print();

