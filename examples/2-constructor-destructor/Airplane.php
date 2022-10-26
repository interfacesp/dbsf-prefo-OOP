<?php

class Airplane {

    public string $type; 
    public int $nbPassengers; 


    function __construct(string $aType, int $nbPassengers)
    {
        $this->type= $aType;
        $this->nbPassengers = $nbPassengers;   
    }

    function get_NbPassengers(): int {
        return $this->nbPassengers;
    }
    
    function get_Type(): string {
        return $this->type;
    }
 }

 $boeing777 = new Airplane("boeing", 250);

 echo $boeing777->get_Type(); 
 echo $boeing777->get_NbPassengers(); 


 ?>