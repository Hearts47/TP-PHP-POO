<?php
class Vehicule
{
    private string $marque;

    public function __construct(string $marque)
    {
        $this->marque = $marque;
    }

    public function getMarque(): string
    {
        return $this->marque;
    }


public function demarrer(): void
    {
        echo "Le véhicule de marque " . $this->marque . " démarre.<br>";
    }
}


class Voiture extends Vehicule
{
    public function ouvrirCoffre(): void
    {
        echo "Le coffre de la voiture de marque " . $this->getMarque() . " est ouvert.<br>";
    }
}


class Moto extends Vehicule
{
    public function mettreBequille(): void
    {
        echo "La béquille de la moto de marque " . $this->getMarque() . " est mise.<br>";
    }
}

$moto1 = new Moto("Yamaha");
$voiture1 = new Voiture("Toyota");

$moto1->demarrer();
$voiture1->demarrer();
$moto1->mettreBequille();
$voiture1->ouvrirCoffre();



// il est logique que Voiture et Moto héritent de Véhicule car elles partagent des caractéristiques communes.

?>