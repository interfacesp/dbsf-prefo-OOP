<?php 

/**
 * Ecrivez une classe BankAccount
 * 
 * - numero de compte
 * - nom-titulaire
 * - montant
 * 
 * Utiliser un constructeur 
 * 
 * Ecrivez une méthode pour lire chaque propriété
 * 
 */

 class BankAccount {
    public string $nom_titulaire;
    public string $acc_number;
    public float $saldo; 

    function __construct(string $titulaire, string $number, float $saldo)
    {
        $this->nom_titulaire = $titulaire;
        $this->acc_number = $number;
        $this->saldo = $saldo;
    }

    function afficherDetails(): void {
        echo "<h1>Compte de $this->nom_titulaire</h1>";
        echo "<h3>Numéro : $this->acc_number</h3>";
        echo "Solde: $this->saldo";
    }


 }

$fortis = new BankAccount("De brouck", "BE99929877939", 20.45);
$belfius = new BankAccount("De Rouck", "BE279912344",0);

$fortis->afficherDetails();
$belfius->afficherDetails();