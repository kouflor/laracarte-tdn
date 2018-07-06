<?php

namespace App\Http\Controllers;

use App\Models\MessageSave;
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
    	
        $message = MessageSave::create($request->only('name', 'email', 'message'));

        /*
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();
        */

        //$mailable = new EmailCreer($message);


    	//Mail::to(config('laracarte.admin_support_email')
    //)->send($mailable);
            Mail::to(config('laracarte.admin_support_email')
    )->send(new EmailCreer($message));

    	flashy('nous vous repondrons dans les plus bref delais');

    	return redirect()->route('root_path');
    }
}
