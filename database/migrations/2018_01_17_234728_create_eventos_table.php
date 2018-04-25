<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');

            // parametros generales
            $table->string('nombre');
            $table->date('fecha_evento');
            $table->string('hora_evento');
            $table->string('descripcion');
            $table->enum('estado', ['borrador', 'pendiente', 'enproceso', 'concluido', 'anulado']);

            //relaciones

            $table->integer("user_id")->unsigned();
            $table->foreign("user_id")->references("id")->on("users");

            $table->integer("tipo_evento_id")->unsigned();
            $table->foreign("tipo_evento_id")->references("id")->on("tipo_eventos");


            $table->integer("admin_id")->unsigned();
            $table->foreign("admin_id")->references("id")->on("admins");


            //$table->integer("tipo_evento_id")->unsigned();
            //$table->foreign("tipo_evento_id")->references("id")->on("tipo_eventos");



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}
