<?php
class Produit
{
    private string $nom;
    private float $prix;


public function __construct(string $nom, float $prix)
{
    $this->nom = $nom;
    $this->prix = $prix;


}

public function getNom(): string
{
    return $this->nom;

}

public function getPrix(): float
{
    return $this->prix;

}


public function afficher(): void
{
    echo $this->nom . " - " . $this->prix . " euros<br>";
}

}


$produit1 = new Produit("Clavier", 49.99);
$produit2 = new Produit("Souris", 19.90);
$produit3 = new Produit("Écran", 149.99);

$produit1->afficher();
$produit2->afficher();
$produit3->afficher();
?>