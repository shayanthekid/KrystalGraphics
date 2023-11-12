<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsMail;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact');
    }
public function sendEmail(Request $request)
{
    // Validate the form data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);

    // Prepare the data to pass to the Mailable
    $data = [
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'message' => $request->input('message'),
    ];

    // Create an instance of the Mailable and pass the data to its constructor
    $email = new ContactUsMail($data); // Pass the data to the constructor

    // Send the email using the Mailable class
    Mail::to('sajidfayazhaniff@gmail.com')->send($email);

    // Redirect back with a success message
    return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
}
}
