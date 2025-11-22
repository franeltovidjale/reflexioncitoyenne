// resources/views/emails/contact-received.blade.php

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #008C3B; color: white; padding: 20px; text-align: center; }
        .content { background: #f9f9f9; padding: 20px; margin: 20px 0; }
        .field { margin-bottom: 15px; }
        .label { font-weight: bold; color: #008C3B; }
        .footer { text-align: center; color: #666; font-size: 12px; padding: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Nouveau Message de Contact</h1>
        </div>

        <div class="content">
            <div class="field">
                <span class="label">Nom :</span> {{ $contact->nom }}
            </div>

            <div class="field">
                <span class="label">Prénom :</span> {{ $contact->prenom }}
            </div>

            <div class="field">
                <span class="label">Email :</span> {{ $contact->email }}
            </div>

            <div class="field">
                <span class="label">Sujet :</span> {{ $contact->sujet }}
            </div>

            <div class="field">
                <span class="label">Message :</span><br>
                {{ $contact->message }}
            </div>

            <div class="field">
                <span class="label">Date :</span> {{ $contact->created_at->format('d/m/Y à H:i') }}
            </div>
        </div>

        <div class="footer">
            <p>MBRC - Maison Béninoise de Réflexion Citoyenne</p>
        </div>
    </div>
</body>
</html>
