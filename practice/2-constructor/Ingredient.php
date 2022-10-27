<?php

/**
 * Créer une classe Ingrédient avec comme propriétés:
 * 
 * nom, quantité
 * 
 * Utiliser un constructeur 
 * 
 * Ecrivez une méthode pour chaque propriété
 */

class Ingredient { 
    public string $nom; 
    public int $quantity;

    function __construct(string $newNom, int $quant)
    {
        $this->nom = $newNom;
        $this->quantity= $quant;
        echo "Coucou";
    }
}

$piment = new Ingredient("Piment", 2);
echo $piment->nom;
echo $piment->quantity; 

