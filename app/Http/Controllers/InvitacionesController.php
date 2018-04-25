<?php

namespace App\Http\Controllers;

use App\Invitacion;
use Illuminate\Http\Request;

class InvitacionesController extends Controller
{

    public function lista() {

        $invitaciones = Invitacion::latest()->paginate(10);

        //$messages->withPath('custom/url');

        return view('invitaciones.lista', [
            'invitaciones' =>$invitaciones
        ]);
    }
}
