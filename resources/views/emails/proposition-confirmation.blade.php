// resources/views/emails/proposition-confirmation.blade.php

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
            <h1>Proposition bien reçue !</h1>
        </div>

        <div class="content">
            <p>Bonjour {{ $proposition->nom_contact }},</p>

            <p>Nous avons bien reçu votre proposition de soutien pour la MBRC au nom de <strong>{{ $proposition->nom_structure }}</strong>.</p>

            <p><strong>Type de soutien :</strong> {{ $proposition->type_soutien }}</p>

            <p>Notre équipe va examiner votre proposition avec attention et vous recontactera rapidement pour discuter des modalités de collaboration.</p>

            <p>Nous vous remercions sincèrement pour votre intérêt et votre soutien à la réflexion citoyenne au Bénin.</p>

            <p style="margin-top: 30px;">Cordialement,<br><strong>L'équipe MBRC</strong></p>
        </div>

        <div class="footer">
            <p>MBRC - Maison Béninoise de Réflexion Citoyenne</p>
            <p>Ce message est automatique, merci de ne pas y répondre.</p>
        </div>
    </div>
</body>
</html>
