<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->enum('level', ['anfitrion', 'invitado']);
            $table->string('username')->unique();
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('avatar');
            $table->string('edad');
            $table->enum('sexo', ['masculino', 'femenino']);
            $table->string('direccion');
            $table->string('distrito');
            $table->string('provincia');
            $table->string('departamento');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
