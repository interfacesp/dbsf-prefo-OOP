<?php 

/**
 * Ecrivez une classe Product avec les propriétes
 * 
 * - nom 
 * - quantite
 * 
 * Utilisez un constructeur pour l'initialisation 
 */

class Product {

    public string $nom; 
    public int $quantity; 

    function __construct( string $newNom, int $quant)
    {
        $this->nom = $newNom;
        $this->quantity = $quant;
    }

    function set_prod_name(string $newName):void {
        $this->nom= $newName;
    } 

    function setQuant(int $newQuant):void {
        $this->quantity = $newQuant;
    }

    function showMeWhatYouHave():void {
        echo "Nom Produit: ", $this->nom, "<br>", "Quantité:", $this->quantity;
    }

}

$unProduit = new Product("Meuble",0);
// var_dump($unProduit);
$unProduit->showMeWhatYouHave();

$unProduit->set_prod_name("Chaise");
$unProduit->setQuant(2);

$unProduit->showMeWhatYouHave();