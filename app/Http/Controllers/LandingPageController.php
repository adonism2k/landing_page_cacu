<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing-page');
    }

    public function send_email(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255'],
            'message' => ['required'],
        ]);
        Mail::send(new ContactMail($request));
        return redirect()->back()->with('success', 'Sent Successfully');
    }
}
