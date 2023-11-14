<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mail;

class Mails extends Controller
{
    public function index()
    {
        $mails = Mail::all();
        return view('Mail/Show_Mail', compact('mails'));
    }

    public function create()
    {
        // You can implement a form to create a new mail.
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'text' => 'required|string',
        ]);

        Mail::create($validatedData);

        return redirect()->route('dashboard');
    }

    public function show(Mail $mail)
    {
        return "showww";
    }

    public function edit(Mail $mail)
    {
        // You can implement a form to edit an existing mail.
    }

    public function update(Request $request, Mail $mail)
    {
        // You can update the mail using $request and $mail.
    }

    public function destroy(Mail $mail)
    {
        $mail->delete();

        return redirect()->back();
    }
}
