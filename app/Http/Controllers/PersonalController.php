<?php

namespace App\Http\Controllers;

use App\Models\personal;
use Illuminate\Http\Request;
use App\Http\Requests\personal_requests;
use App\Mail\Personal_C_Mail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;

class PersonalController extends Controller
{
    /*MUESTRA TODOS LOS ELEMENTOS EN LA BDD*/
    public function index(){
        $personal = personal::orderBy('id','desc')->paginate(10);
        return view('personal.index', compact('personal'));
     }
    public function create(){
        $p = new personal();
        return view('personal.create', compact('p'));
    }
    public function store(personal_requests $request){
        $personal = personal::create($request->all());


        Mail::to('edsonalexanderjaracantu@gmail.com')->send(new Personal_C_Mail($personal));
        return Redirect()->route('personal.show',$personal);
    }

    public function update(personal_requests $request,personal $personal){
        $personal->update($request->all());
        return Redirect()->route('personal.show',$personal);
    }

    /*MUESTRA LOS DATOS DE UN ELEMENTO EN LA BDD*/
    public function show(personal $personal){
        return view('personal.show', compact('personal'));
    }

    public function edit(personal $personal){
        return view('personal.edit', compact('personal'));
    }
    public function destroy(personal $personal){
        $personal->delete();
        return Redirect()->route('personal.index');
    }
}
