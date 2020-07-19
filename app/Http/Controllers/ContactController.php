<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function store(Request $request) {
        $enquiry= new Contact();
        $enquiry->name=request('name');
        $enquiry->email=request('email');
        $enquiry->subject=request('subject');
        $enquiry->message=request('message');

        $enquiry->save();

        Mail::send(new ContactMail($request));

        Session::flash('success', 'Message sent successfully');

        return redirect('/contact');
    }
}
