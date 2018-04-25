<?php

namespace App\Http\Controllers;

use App\Evento;
use App\TipoEvento;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventosController extends Controller
{


    public function crearEvento() {

        $users = User::latest()->get();
        return view('admin.eventos.create', compact('users'));
    }

    public function guardarEvento(Request $request) {

        //dd($request->input('nombre'));
        //return view('admin.eventos.store');
        if ($request)
        {
            Evento::create([
                'nombre' => request('nombre'),
                'fecha_evento' => request('fecha_evento'),
                'hora_evento' => request('hora_evento'),
                'descripcion' => request('descripcion'),
                'estado' => request('estado'),
                'user_id' => auth()->id(),
                'tipo_evento' => request('edad'),
                'admin_id' => 1,
                //'user_id' => auth()->id()
            ]);
        }
        return redirect()->route('admin.mostrar.posts')->with('status', 'Articulo Guardado con exito');
        //return response()->json(['success'=>'Tu invitado '.request('nombre').' Fue agregado.']);
    }

    public function misEventos() {

        $eventos = Evento::latest()->paginate(10);

        //$messages->withPath('custom/url');

        return view('eventos.list', [
            'eventos' =>$eventos
        ]);


    }

    public function adminEventos(Request $request) {
        //$estado = 'pendiente';
        //$eventos = Evento::all()->sortBy('id')->paginate(10);
        //$eventos = DB::table('eventos')->orderBy('id', 'ASC')->paginate(7);

        //$estado = (new \Illuminate\Http\Request)->get('estado');

        //$eventos = Evento::where('estado', $estado)->orderBy('id', 'asc')->paginate(20);

        /*
        if (request()->has('estado')) {
            $eventos = Evento::where('estado', request('estado'))->orderBy('id', 'asc')->paginate(20)->appends('estado', request('gender'));
        } else {
            $eventos = Evento::orderBy('id', 'asc')->get('estado');
        }
        */


        $eventos = Evento::buscarevento($request->get('text_evento'))->filtrarestado($request->get('estado'))->orderBy('id', 'asc')->paginate(20);

        return view('admin.eventos.list', [
            'eventos' => $eventos
        ]);
    }


    public function  listarEventosUsuario($username) {


        $user =  User::where('username', $username)->first();

        return view('admin.eventos.byusername', [
            'user' => $user
        ]);
    }

    public function indexTipoEventos() {
        $tipo_eventos = TipoEvento::latest()->get();
        return view('admin.eventos.tipoeventos', [
            'tipo_eventos' => $tipo_eventos
        ]);

    }

    public function createTipoEventos(){
        return view('admin.eventos.tipos.create');
    }

    public function saveTipoEventos(Request $request) {
        //dd($request->input('title'));

        if ($request)
        {
            TipoEvento::create([
                'title' => request('title'),
                'slug' => request('slug'),
                'descripcion' => request('descripcion'),
            ]);
        }

        return redirect()->route('admin.admin_tipo_eventos_index')->with('status', 'Tipo de Evento Guardado con exito');

    }

    public function editarTipoEvento($id){

        $tipo_evento = TipoEvento::find($id);
        //$tipo_evento->update($request->all());
        return view('admin.eventos.tipos.edit', compact('tipo_evento'));

    }


    public function updateTipoEvento(Request $request, $id){
        //dd($request->input('title'));

        $tipo_evento = TipoEvento::find($id);
        $tipo_evento->update($request->all());
        return redirect()->route('admin.admin_tipo_eventos_index')->with('status', 'Tipo de Evento Actualizado con exito');


        //dd($request->input('title'));
    }

    public function  listarEventosTipoEvento($id) {

        return "dfdfdf".$id;
        //$user =  User::where('username', $id)->first();
        /*
        return view('admin.eventos.byusername', [
            'user' => $user
        ]);
        */
    }


}
