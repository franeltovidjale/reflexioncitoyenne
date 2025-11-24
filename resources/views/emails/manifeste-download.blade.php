
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
        .btn { display: inline-block; padding: 15px 30px; background: #008C3B; color: white; text-decoration: none; border-radius: 5px; margin-top: 20px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🇧🇯 Votre Manifeste MBRC</h1>
        </div>

        <div class="content">
            <p>Bonjour {{ $download->prenom }} {{ $download->nom }},</p>

            <p>Merci pour votre intérêt pour la Maison Béninoise de Réflexion Citoyenne !</p>

            <p>Vous trouverez ci-dessous le lien pour télécharger notre <strong>Manifeste Fondateur</strong> :</p>

            <div style="text-align: center;">
                <a href="{{ asset('documents/LE MANIFESTE MBRC.pdf') }}" class="btn">📥 Télécharger le Manifeste</a>
            </div>

            <p style="margin-top: 30px;"><strong>Ce manifeste présente :</strong></p>
            <ul>
                <li>Notre vision pour le Bénin</li>
                <li>Nos valeurs fondamentales</li>
                <li>Les 7 principes qui nous guident</li>
                <li>Notre mission et nos objectifs</li>
            </ul>

            <p>N'hésitez pas à le partager avec d'autres citoyens engagés !</p>

            <p style="margin-top: 30px;">Cordialement,<br><strong>L'équipe MBRC</strong></p>
        </div>

        <div class="footer">
            <p>MBRC - Maison Béninoise de Réflexion Citoyenne</p>
            <p>Ce message est automatique, merci de ne pas y répondre.</p>
        </div>
    </div>
</body>
</html>
