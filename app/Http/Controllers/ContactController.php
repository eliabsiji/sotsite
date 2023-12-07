<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){

        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'event' => $request->event,
            'specify' => $request->specify,
            'instagram' => $request->instagram,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

       // Contact::create($request->all());
       Mail::to('contact@adrahstudios.com')->send(new ContactMail($details));

        return redirect()->back()
                         ->with(['success' => 'Thank you for contacting us.  A member of our team will reach out to you as soon as possible.']);
    }
}
