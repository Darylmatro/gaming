<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les données du formulaire
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Adresse e-mail de destination
    $to = "votre-boitemail : moi@gmail.com";

    // Sujet du courriel avec le nom de l'expéditeur
    $subject = "Nouveau message de $name";

    // En-têtes du courriel
    $headers = "From: $email";

    // Corps du message
    $messageBody = "Nom : $name\n email : $email\n Message : $message";

    // Envoyer le courriel en utilisant la fonction mail()
    $success = mail($to, $subject, $messageBody, $headers);

    // Vérifier si le courriel a été envoyé avec succès
    if ($success) {
        echo "Votre message a bien été transmis.";
        //Message d'erreur
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }
}
?>
