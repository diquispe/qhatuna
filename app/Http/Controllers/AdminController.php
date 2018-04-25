<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function guardarInvitado(Request $request) {
        if ($request)
        {
            User::create([
                'nombre' => request('title'),
                'apellidos' => request('slug'),
                'sexo' => request('body'),
                'edad' => request('meta_title'),
                'direccon' => request('meta_description')
                //'user_id' => auth()->id()
            ]);
            return redirect()->route('admin.mostrar.posts')->with('status', 'Articulo Guardado con exito');
        }
    }

}
