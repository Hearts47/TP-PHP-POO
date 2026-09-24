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


//L'exemple de notificationpush illustre le polymorphisme car la fonction envoyerNotification peut accepter n'importe quelle classe qui implémente l'interface Notification.

?>