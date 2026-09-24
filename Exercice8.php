<?php
trait Logger
{
    public function log(string $message): void
    {
        echo "[LOG] " . $message . "<br>";
    }
}

class UtilisateurService
{
    use Logger;

    public function creerUtilisateur(): void
    {
        $this->log("Creation d'un utilisateur");
    }
}

class CommandeService
{
    use Logger;

    public function creerCommande(): void
    {
        $this->log("Creation d'une commande");
    }
}




//Car un trait permet de partager des méthodes entre plusieurs classes sans imposer un héritage.