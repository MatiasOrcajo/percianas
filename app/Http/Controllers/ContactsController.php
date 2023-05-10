<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function contactPost(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required|string',
            'email'     => 'required|email',
            'phone'     => 'required|number',
            'comment'   => 'required'
        ]);

        Mail::send('email', $request->toArray(), function($message){
            $message->from(env('EMAIL_ADDRESS'));
            $message->to(env('EMAIL_ADDRESS'), 'Admin');
            $message->subject('Nuevo mensaje de contacto');
        });

        return true;
    }
}
