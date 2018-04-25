<?php

namespace App;

use App\Traits\DatesTranslator;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use DatesTranslator;

    protected $fillable = [
        'nombre', 'fecha_evento', 'hora_evento', 'descripcion', 'estado'
    ];


    public function user() {
        // relacione el mensahe con el usuario
        return $this->belongsTo(User::class);
    }


    // scope para la busqueda
    public function scopeBuscarEvento($query,  $buscarevento)
    {
        //  dd("scope: ". $buscarevento);


        if (trim($buscarevento) != "")
        {
            $query->where('nombre','like', "%$buscarevento%");
        }




    }

    public function scopeFiltrarEstado ($query, $filtrarestado )
    {
        //  dd("scope: ". $buscarevento);


        if (trim($filtrarestado) != "") {
            $query->where('estado', $filtrarestado);
        }
    }


}
