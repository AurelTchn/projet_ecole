<?php

/* use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 */


// Please specify your Mail Server - Example: mail.example.com.
ini_set("SMTP","localhost");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","1025");


/* ------------------------------------------------------------------*/
// Destinataire
$destinataire = "aureltchanhouin@gmail.com";

// Sujet de l'email
$sujet = "Test d'envoi d'email depuis PHP";

// Corps de l'email
$message = "Bonjour,\n\nCeci est un test d'envoi d'email depuis PHP.";



// Envoi de l'email



mail($destinataire,$sujet,$message);

if (mail($destinataire, $sujet, $message)) {
    echo "L'email a été envoyé avec succès.";
} else {
    echo "Une erreur s'est produite lors de l'envoi de l'email.";
}

/* --------------------------------------------------------------------*/


?>
