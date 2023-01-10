<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterSuscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Newsletter extends Controller
{
    public function index()
    {
        return view('newsletter.index');
    }

    public function subscribe(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
            'name' => 'required'
        ]);
        $email = $request->get('email');
        $name = $request->get('name');

        \App\Models\Newsletter::create([
            'email' => $email
        ]);

        //send Newsletter email
        Mail::to($email)->send(new NewsletterSuscribe($name));

        return redirect()->route('newsletter.index')->with('success', 'You have successfully subscribed!');
    }
}
