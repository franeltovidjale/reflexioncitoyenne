
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
        .btn { display: inline-block; padding: 12px 24px; background: #008C3B; color: white; text-decoration: none; border-radius: 5px; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🇧🇯 Bienvenue dans la Newsletter MBRC</h1>
        </div>

        <div class="content">
            <p>Bonjour,</p>

            <p>Merci de vous être inscrit(e) à la newsletter de la Maison Béninoise de Réflexion Citoyenne !</p>

            <p>Vous recevrez désormais nos dernières actualités, analyses et informations sur nos événements directement dans votre boîte mail.</p>

            <p><strong>Ce que vous allez recevoir :</strong></p>
            <ul>
                <li>Analyses et réflexions sur les enjeux nationaux</li>
                <li>Annonces d'ateliers et événements</li>
                <li>Actualités de la communauté MBRC</li>
                <li>Publications et rapports citoyens</li>
            </ul>

            <a href="{{ config('app.url') }}" class="btn">Découvrir la MBRC</a>
        </div>

        <div class="footer">
            <p>MBRC - Maison Béninoise de Réflexion Citoyenne</p>
            <p>Pour vous désinscrire, contactez-nous à contact@reflexioncitoyenne.com</p>
        </div>
    </div>
</body>
</html>
