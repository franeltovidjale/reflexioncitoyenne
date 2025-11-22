<?php

namespace App\Http\Controllers;

use App\Models\Adhesion;
use App\Mail\AdhesionReceived;
use App\Mail\AdhesionConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdhesionController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'nullable|string|max:20',
            'date_naissance' => 'required|date',
            'ville_pays' => 'required|string|max:255',
            'domaine_activite' => 'nullable|string|max:255',
            'domaines_interet' => 'nullable|string',
            'motivation' => 'required|string',
            'acceptation' => 'required|accepted',
        ]);
        $adhesion = Adhesion::create($validated);

        // Email à l'admin
        Mail::to(config('mail.admin_email'))->send(new AdhesionReceived($adhesion));

        // Email de confirmation à l'utilisateur
        Mail::to($adhesion->email)->send(new AdhesionConfirmation($adhesion));
        return back()->with('success', 'Votre demande d\'adhésion a été envoyée avec succès !');
    }
}
