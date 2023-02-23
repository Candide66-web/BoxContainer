<?php

// DEVIS

if (isset($_POST["submit"])){

    $nom = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $conteneur = $_POST['conteneur'];
    $livraison = $_POST['livraison'];
    $etat = $_POST['etat'];
    $entreprise = $_POST['entreprise'];
    $messages = $_POST['message'];

    $message = "
        <html>
        <head>
        <title>Message</title>
        </head>
        <body>
        <h1>Demande de devis </h1></br></br></br>
        <p>' Je me nomme : .$nom.'</p>
        <p>' Email : .$email.'</p>
        <p>' Téléphone : .$phone.'</p>
        <p>' Conteneur voulu : .$conteneur.'</p>
        <p>' Addresse de livraison : .$livraison.'</p>
        <p>' Etat du conteneur voulu : .$etat.'</p>
        <p>' Mon entreprise ou société : .$entreprise.'</p>
        <p>' Voici mon message : .$messages.'</p>
        <p>' Langue : Italien'</p>

        </body>
        </html>
        ";

    if (!empty($nom) && !empty($email) && !empty($phone) && !empty($conteneur) && !empty($livraison) && !empty($etat)&& !empty($message)){

        if (filter_var($email, FILTER_VALIDATE_EMAIL)){

            // Envoi de mail, PENSEZ A CHANGER LE MAIL LORSQUE LE PRO SERA DISPONIBLE
            $to = "contact@nomsite.com";

            $subject = "Demande de devis";

            $from = "From: $email \r\n Nom : $nom ";
            
            mail($to, $subject, $messages, $from);

            $successMsg = "Message envoyé avec succès";
            header("Location:index.html");
            
        }else{
            $errorMsg = "Format de l'email incorrect, veuillez réessayer";
        }

    }else{
        $errorMsg = "Veuillez remplir toutes les cases";
    }

}

// COntact


if (isset($_POST["contact"])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $messages = $_POST['message'];

    $message = "
        <html>
        <head>
        <title>Message</title>
        </head>
        <body>
        <h1>Demande de devis </h1></br></br></br>
        <p>' Bonjour / Bonsoir Box Container. Je vous contacte pour vous dire : .$messages.'</p>
        <p>' Mes coordonnées <br> Email : .$email.'</p>
        <p>' Téléphone : .$phone.'</p>
        <p>' Langue : Italien'</p>

        </body>
        </html>
        ";

    if (!empty($username) && !empty($email) && !empty($phone) && !empty($subject) && !empty($messages)){

        if (filter_var($email, FILTER_VALIDATE_EMAIL)){

            // Envoi de mail, PENSEZ A CHANGER LE MAIL LORSQUE LE PRO SERA DISPONIBLE
            $to = "contact@nomsite.com";

            $from = "From: $email \r\n Nom : $username ";
            
            mail($to, $subject, $messages, $from);

            $successMsg = "Message envoyé avec succès";
            header("Location:index.html");
            
        }else{
            $errorMsg = "Format de l'email incorrect, veuillez réessayer";
        }

    }else{
        $errorMsg = "Veuillez remplir toutes les cases";
    }

}