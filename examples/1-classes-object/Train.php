<?php

class Train {
    public int $nbCoaches; 

    function set_nbCoaches(int $nbCoaches ): void {
        $this->nbCoaches = $nbCoaches;
    }
}

    $aTrain = new Train(); 
    $aTrain->set_nbCoaches(3); 
    echo "Nombre de wagons : $aTrain->nbCoaches";
?>