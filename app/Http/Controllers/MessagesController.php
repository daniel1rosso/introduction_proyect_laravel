<?php

namespace App\Http\Controllers;

use App\Mail\MessageRecive;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function test(){
        return "holas";
    }
    public function store(){
        $message = request()->validate([
            'nombre' => 'required',
            'email' => 'required',
            'contenido' => 'min:3'
        ]);
        
        Mail::to('danielalbertorosso@hotmail.com')->queue(new MessageRecive($message));

        return 'Mensaje enviado';
    }
}
