<?php

namespace App\Http\Controllers;

use App\Models\ManifesteDownload;
use App\Mail\ManifesteDownloadEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ManifesteDownloadController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'nom' => 'required|string|max:255',
                'prenom' => 'required|string|max:255',
                'email' => 'required|email|max:255',
            ]);

            $download = ManifesteDownload::create($validated);

            // Email avec lien de téléchargement
            Mail::to($download->email)->send(new ManifesteDownloadEmail($download));

            return response()->json([
                'success' => true,
                'message' => 'Un email avec le lien de téléchargement vous a été envoyé ! Vérifiez votre boîte mail.'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Veuillez remplir tous les champs correctement.'
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Une erreur est survenue. Veuillez réessayer.'
            ], 500);
        }
    }
}
