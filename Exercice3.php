<?php
class CompteBancaire
{
private string $titulaire;
private float $solde;

public function __construct(string $titulaire, float $solde = 0.0)
{
    $this->titulaire = $titulaire;
    $this->solde = $solde;
}


public function getSolde(): float
{
    return $this->solde;
}

public function getTitulaire(): string
{
    return $this->titulaire;
}

public function deposer(float $montant): void
{
    if ($montant > 0) {
        $this->solde += $montant;
        echo "Dépôt de " . $montant . " euros effectué. Nouveau solde : " . $this->solde . " euros.<br>";
    } else {
        echo "Le montant du dépôt doit être positif.<br>";
    }
}

public function retirer(float $montant): void
{
    if ($montant > 0 && $montant <= $this->solde) {
        $this->solde -= $montant;
        echo "Retrait de " . $montant . " euros effectué. Nouveau solde : " . $this->solde . " euros.<br>";
    } else {
        echo "Le montant du retrait est invalide ou dépasse le solde disponible.<br>";
    }
}
}
$compte1 = new CompteBancaire("Alice", 100);
$compte1->deposer(50);
$compte1->retirer(30);
$compte1->retirer(150);

echo "Solde final du compte de " . $compte1->getTitulaire() . " : " . $compte1->getSolde() . " euros.<br>";
?>