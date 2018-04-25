<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEvento extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'descripcion',
    ];
    public function eventos() {
        return $this->hasMany('App\Evento');
    }
}
