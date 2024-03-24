<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactoController extends Controller
{
    public function enviarEmail(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required|string',
            'email'     => 'required|email',
            'phone'     => 'required|integer',
            'comment'   => 'required'
        ]);

        $body = "Nombre: <strong>" . $request->name . "</strong><br/>" .
            "   Email: <strong>" . $request->email . " </strong><br/>" .
            "   Telefono: <strong>" . $request->phone . " </strong><br/>" .
            "   Mensaje: <strong>" . $request->comment . " </strong><br/>" .
            "<br/>";

        $email = [
            "title" => 'Nuevo Email',
            "body" => $body
        ];

        Mail::to(env('EMAIL_ADDRESS'))->send(new ContactMail($email, "Nuevo mensaje de contacto"));

        return response()->json('Email enviado');
    }
}
