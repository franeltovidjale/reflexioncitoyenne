<?php

namespace App\Http\Controllers;

use App\Models\Proposition;
use App\Mail\PropositionReceived;
use App\Mail\PropositionConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PropositionController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type_structure' => 'required|string|max:255',
            'nom_structure' => 'required|string|max:255',
            'nom_contact' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'type_soutien' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $proposition = Proposition::create($validated);

        // Email à l'admin
        Mail::to(config('mail.admin_email'))->send(new PropositionReceived($proposition));

        // Email de confirmation à l'utilisateur
        Mail::to($proposition->email)->send(new PropositionConfirmation($proposition));

        return back()->with('success', 'Votre proposition a été envoyée avec succès !');
    }
}
