<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use App\Mail\NewsletterWelcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255|unique:newsletters,email',
        ]);

        $newsletter = Newsletter::create($validated);

        // Email de bienvenue
        Mail::to($newsletter->email)->send(new NewsletterWelcome($newsletter));

        return back()->with('success', 'Merci pour votre inscription !');
    }
}
