// resources/views/emails/adhesion-confirmation.blade.php

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
            <h1>Demande d'adhésion reçue !</h1>
        </div>

        <div class="content">
            <p>Bonjour {{ $adhesion->prenom }} {{ $adhesion->nom }},</p>

            <p>Nous avons bien reçu votre demande d'adhésion à la Maison Béninoise de Réflexion Citoyenne.</p>

            <p>Notre équipe va examiner votre candidature dans les <strong>48 heures</strong> et vous tiendra informé(e) de la suite.</p>

            <p>Nous vous remercions pour votre intérêt et votre engagement envers le Bénin.</p>

            <p style="margin-top: 30px;">Cordialement,<br><strong>L'équipe MBRC</strong></p>
        </div>

        <div class="footer">
            <p>MBRC - Maison Béninoise de Réflexion Citoyenne</p>
            <p>Ce message est automatique, merci de ne pas y répondre.</p>
        </div>
    </div>
</body>
</html>
