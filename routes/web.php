<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\AdhesionController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PropositionController;
use App\Http\Controllers\ManifesteDownloadController;

/*
|--------------------------------------------------------------------------
| Web Routes - MBRC
|--------------------------------------------------------------------------
*/

// Page d'accueil
Route::get('/', function () {
    return view('home');
})->name('home');

// À propos
Route::get('/apropos', function () {
    return view('apropos');
})->name('apropos');

// La Plateforme
Route::get('/plateforme', function () {
    return view('plateforme');
})->name('plateforme');

// Domaines de Réflexion
Route::get('/domaines', function () {
    return view('domaines');
})->name('domaines');

// Espace Membres
Route::get('/membres', function () {
    return view('membres');
})->name('membres');

// Nous Rejoindre
Route::get('/rejoindre', function () {
    return view('rejoindre');
})->name('rejoindre');

// Contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Soutenir MBRC
Route::get('/soutenir', function () {
    return view('soutenir');
})->name('soutenir');

// Routes pour traitement des formulaires (à implémenter avec un Controller)
Route::post('/contact', function () {
    // Logique de traitement du formulaire
    return redirect()->route('contact')->with('success', 'Votre message a été envoyé avec succès !');
})->name('contact.submit');

Route::post('/rejoindre', function () {
    // Logique de traitement du formulaire
    return redirect()->route('rejoindre')->with('success', 'Votre demande d\'adhésion a été envoyée avec succès !');
})->name('rejoindre.submit');

Route::post('/soutenir', function () {
    // Logique de traitement du formulaire
    return redirect()->route('soutenir')->with('success', 'Votre proposition a été envoyée avec succès !');
})->name('soutenir.submit');

// Formulaires
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');
Route::post('/adhesion', [AdhesionController::class, 'store'])->name('adhesion.store');
Route::post('/proposition', [PropositionController::class, 'store'])->name('proposition.store');
Route::post('/manifeste-download', [ManifesteDownloadController::class, 'store'])->name('manifeste.download');

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

