<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactanos_Mail;
use Illuminate\Http\Request;

class ContactanosController extends Controller
{
    public function index(){
        return view('contactanos.index');
    }
    
    public function store(Request $request){
        $request->validate([
            'nombre'=>'required',
            'correo'=>'required|email',
            'mensaje'=>'required'
        ]);
        Mail::to('edsonalexanderjaracantu@gmail.com')->send(new contactanos_Mail($request));
        return redirect()->route('contactanos.index')->with('info', 'Mensje enviado');
    }
}
