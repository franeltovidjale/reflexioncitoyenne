
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
            <h1>Nouvelle Demande d'Adhésion</h1>
        </div>

        <div class="content">
            <div class="field">
                <span class="label">Nom :</span> {{ $adhesion->nom }}
            </div>

            <div class="field">
                <span class="label">Prénom :</span> {{ $adhesion->prenom }}
            </div>

            <div class="field">
                <span class="label">Email :</span> {{ $adhesion->email }}
            </div>

            <div class="field">
                <span class="label">Téléphone :</span> {{ $adhesion->telephone ?? 'Non renseigné' }}
            </div>

            <div class="field">
                <span class="label">Date de naissance :</span> {{ $adhesion->date_naissance->format('d/m/Y') }}
            </div>

            <div class="field">
                <span class="label">Ville/Pays :</span> {{ $adhesion->ville_pays }}
            </div>

            <div class="field">
                <span class="label">Domaine d'activité :</span> {{ $adhesion->domaine_activite ?? 'Non renseigné' }}
            </div>

            <div class="field">
                <span class="label">Domaines d'intérêt :</span><br>
                {{ $adhesion->domaines_interet ?? 'Non renseigné' }}
            </div>

            <div class="field">
                <span class="label">Motivation :</span><br>
                {{ $adhesion->motivation }}
            </div>

            <div class="field">
                <span class="label">Date de soumission :</span> {{ $adhesion->created_at->format('d/m/Y à H:i') }}
            </div>
        </div>

        <div class="footer">
            <p>MBRC - Maison Béninoise de Réflexion Citoyenne</p>
        </div>
    </div>
</body>
</html>
