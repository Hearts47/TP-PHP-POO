<?php
interface Notification
{
    public function envoyer(string $message): void;
}


class Email implements Notification
{
    public function envoyer(string $message): void
    {
        echo "EMAIL : " . $message . "<br>";
    }
}

class SMS implements Notification
{
    public function envoyer(string $message): void
    {
        echo "SMS :" . $message . "<br>";
    }
}

$emailNotification = new Email();
$smsNotification = new SMS();

$emailNotification->envoyer("Votre commande est prête.");
$smsNotification->envoyer("Votre commande est prête.");



// une interface peut être considérée comme un contrat car elle définit un ensemble de méthodes que les classes qui l'implémentent doivent obligatoirement fournir.