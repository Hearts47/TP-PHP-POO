<?php 
class Livre
{
    public string $titre;
    public string $auteur;
    public int $nombrePages;
}


$livre1 = new Livre();
$livre1->titre = "1984";
$livre1->auteur = "George Orwell";
$livre1->nombrePages = 328;

$livre2 = new Livre();
$livre2->titre = "Le Petit Prince";
$livre2->auteur = "Antoine de Saint-Exupéry";
$livre2->nombrePages = 96;

echo "Livre 1 : " . $livre1->titre . " par " . $livre1->auteur . ", Nombre de pages : " . $livre1->nombrePages . "<br>";
echo "Livre 2 : " . $livre2->titre . " par " . $livre2->auteur . ", Nombre de pages : " . $livre2->nombrePages . "<br>";

?>