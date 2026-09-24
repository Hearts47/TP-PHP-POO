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
        echo "SMS : " . $message . "<br>";
    }
}


class NotificationPush implements Notification
{
    public function envoyer(string $message): void
    {
        echo "PUSH : " . $message . "<br>";
    }
}

function envoyerNotification(
    Notification $notification,
    string $message
): void
{
    $notification->envoyer($message);
}


$email = new Email();
$sms = new SMS();

envoyerNotification($email, "Creation du compte terminee.");
envoyerNotification($sms, "Creation du compte terminee.");

$push = new NotificationPush();
envoyerNotification($push, "Creation du compte terminee.");

// Non, je n'ai pas eu besoin de modifier envoyerNotification() pour ajouter NotificationPush.
// Cela illustre le polymorphisme : la fonction traite tout objet qui implémente Notification
// de la même façon, sans se soucier de sa classe réelle.
?>