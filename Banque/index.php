<?php

class CompteBancaire {
    private $nom;
    private $solde;

    public function __construct($nom = 'Dupont', $solde = 1000) {
        $this->nom = $nom;
        $this->solde = $solde;
    }

    public function depot($somme) {
        if ($somme > 0) {
            $this->solde += $somme;
        }
    }

    public function retrait($somme) {
        if ($somme > 0 && $somme <= $this->solde) {
            $this->solde -= $somme;
        }
    }

    public function affiche() {
        return "Le solde du compte bancaire de {$this->nom} est de {$this->solde} euros.";
    }
}

// Exemples d'utilisation de la classe
$compte1 = new CompteBancaire('Duchmol', 800);
$compte1->depot(100);
$compte1->retrait(1);
echo $compte1->affiche();  // Le solde du compte bancaire de Duchmol est de 950 euros.

$compte2 = new CompteBancaire();
$compte2->depot(25);
echo $compte2->affiche();  // Le solde du compte bancaire de Dupont est de 1025 euros.
