<?php
class Calculatrice
{
    public function additionner(int $a, int $b, int $c = 0): int
    {
        return $a + $b + $c;
    }


    public function additionnerPlusieurs(int ...$nombres): int
    {
        return array_sum($nombres);
    }
}



echo $calculatrice = new Calculatrice();
echo $calculatrice->additionner(10, 20) . "<br>"; // Résultat : 30
echo $calculatrice->additionner(10, 20, 30) . "<br>"; // Résultat : 60

// il ne sagit pas réellement d'une surcharge de méthode par signature comme en java ou ne c++ car php ne supporte pas la surcharge de méthode par signature. Cependant, on peut simuler ce comportement en utilisant des paramètres optionnels et des arguments variables.

?>