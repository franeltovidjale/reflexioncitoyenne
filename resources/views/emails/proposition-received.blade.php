
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
            <h1>Nouvelle Proposition de Soutien</h1>
        </div>

        <div class="content">
            <div class="field">
                <span class="label">Type de structure :</span> {{ $proposition->type_structure }}
            </div>

            <div class="field">
                <span class="label">Nom de la structure :</span> {{ $proposition->nom_structure }}
            </div>

            <div class="field">
                <span class="label">Contact :</span> {{ $proposition->nom_contact }}
            </div>

            <div class="field">
                <span class="label">Email :</span> {{ $proposition->email }}
            </div>

            <div class="field">
                <span class="label">Type de soutien :</span> {{ $proposition->type_soutien }}
            </div>

            <div class="field">
                <span class="label">Description :</span><br>
                {{ $proposition->description }}
            </div>

            <div class="field">
                <span class="label">Date de soumission :</span> {{ $proposition->created_at->format('d/m/Y à H:i') }}
            </div>
        </div>

        <div class="footer">
            <p>MBRC - Maison Béninoise de Réflexion Citoyenne</p>
        </div>
    </div>
</body>
</html>
