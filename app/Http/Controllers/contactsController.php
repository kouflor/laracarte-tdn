<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\EmailCreer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactsController extends Controller
{
    public function create()
    {
    	return view('contacts.create');
    }

    public function store(ContactRequest $request)
    {
    	$mailable = new EmailCreer($request->name, $request->email, $request->message);

    	Mail::to('kouflor@gmail.com')->send($mailable);

    	return 'Envoyer avec succes';
    }
}
