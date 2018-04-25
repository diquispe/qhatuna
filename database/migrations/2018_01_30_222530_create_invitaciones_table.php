<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('nombre');
            $table->string('email')->unique();
            $table->text('description');
            $table->date('fecha_evento');
            $table->enum('estado', ['aceptado', 'rechazado', 'pendiente']);
            $table->enum('tarjeta_fisica', ['si', 'no']);
            $table->enum('tarjeta_virtual', ['si', 'no']);
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
        Schema::dropIfExists('invitaciones');
    }
}
