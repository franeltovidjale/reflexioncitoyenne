<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactReceived;
use App\Mail\ContactConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'sujet' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact = Contact::create($validated);

        // Email à l'admin
        Mail::to(config('mail.admin_email'))->send(new ContactReceived($contact));

        // Email de confirmation à l'utilisateur
        Mail::to($contact->email)->send(new ContactConfirmation($contact));

        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
