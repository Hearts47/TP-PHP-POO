<?php
class Animal
{
    public function crier(): void
    {
        echo "L'animal fait un bruit.<br>";
    }
}

class Chien extends Animal
{
    public function crier(): void
    {
        echo "Wouf !.<br>";
    }
}

class Chat extends Animal
{
    public function crier(): void
    {
        echo "Miaou !.<br>";
    }
}



$chien1 = new Chien();
$chat1 = new Chat();

$chien1->crier();
$chat1->crier();


// le nom est overriding car la méthode crier() est redéfinie dans les classes Chien et Chat, ce qui permet d'avoir un comportement spécifique pour chaque type d'animal.

?>