<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function sendContact(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $to      = 'cpeuphrate@gmail.com';
        $subject = "[Contact CP Euphrate] - " . $request->subject;
        $body    = "Nom: {$request->name}\nEmail: {$request->email}\nTél: {$request->phone}\n\nMessage:\n{$request->message}";
        $headers = "From: {$request->name} <{$request->email}>\r\nReply-To: {$request->email}";

        mail($to, $subject, $body, $headers);

        return redirect()->route('contact')->with('success', 'Votre message a bien été envoyé!');
    }

    public function cours()
    {
        return view('pages.cours');
    }

    public function vieScolaire()
    {
        return view('pages.vie-scolaire');
    }

    public function enseignements()
    {
        return view('pages.enseignements');
    }

    public function actualite()
    {
        return view('pages.actualite');
    }
}
