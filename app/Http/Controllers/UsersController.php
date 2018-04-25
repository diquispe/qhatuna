<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function indexUsers(){
        $users = User::latest()->paginate(10);

        //$messages->withPath('custom/url');

        return view('admin.users.list', [
            'users' =>$users
        ]);
    }
    public function indexAnfitriones(){
        //$users = User::latest()->paginate(10);
        $users = DB::table('users')->where('level', '=', 'anfitrion')->paginate(5);

        //$messages->withPath('custom/url');

        return view('admin.users.list', [
            'users' =>$users
        ]);
    }
    public function indexInvitados(){
        $users = User::latest()->paginate(10);

        //$messages->withPath('custom/url');

        return view('admin.users.list', [
            'users' =>$users
        ]);
    }

    public function guardarInvitado(Request $request) {
        // dd($request->input('sexo'));
        if ($request)
        {
            User::create([
                'email' => rand(1000,9999)."_email@example.com",
                'level' => "invitado",
                'username' => rand(1000,9999)."_user",
                'nombre' => request('nombre'),
                'apellidos' => request('apellidos'),
                'avatar' => "http://via.placeholder.com/320x320",
                'edad' => request('edad'),
                'sexo' => request('sexo'),
                'direccion' => request('direccion'),
                'distrito' => "Cusco",
                'provincia' => "Cusco",
                'departamento' => "Cusco",
                'password' => bcrypt('secret'),
                'user_id' => auth()->id()
            ]);
        }
        //return redirect()->route('admin.mostrar.posts')->with('status', 'Articulo Guardado con exito');
        return response()->json(['success'=>'Tu invitado '.request('nombre').' Fue agregado.']);

    }



}
