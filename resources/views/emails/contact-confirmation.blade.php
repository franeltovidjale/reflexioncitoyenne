// resources/views/emails/contact-confirmation.blade.php

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #008C3B; color: white; padding: 20px; text-align: center; }
        .content { background: #f9f9f9; padding: 20px; margin: 20px 0; }
        .footer { text-align: center; color: #666; font-size: 12px; padding: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Message bien reçu !</h1>
        </div>

        <div class="content">
            <p>Bonjour {{ $contact->prenom }} {{ $contact->nom }},</p>

            <p>Nous avons bien reçu votre message concernant : <strong>{{ $contact->sujet }}</strong></p>

            <p>Notre équipe prendra connaissance de votre demande et vous répondra dans les meilleurs délais.</p>

            <p>Merci pour votre intérêt pour la MBRC.</p>

            <p style="margin-top: 30px;">Cordialement,<br><strong>L'équipe MBRC</strong></p>
        </div>

        <div class="footer">
            <p>MBRC - Maison Béninoise de Réflexion Citoyenne</p>
            <p>Ce message est automatique, merci de ne pas y répondre.</p>
        </div>
    </div>
</body>
</html>
