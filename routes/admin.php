<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');

// Enlistar todos los eventos
Route::get('ver-eventos', [
    'uses'  => 'EventosController@adminEventos',
    'as'    => 'admin_eventos_index'
]);
// Enlistar todos los tipos de eventos
Route::get('ver-tipo-eventos', [
    'uses'  => 'EventosController@indexTipoEventos',
    'as'    => 'admin_tipo_eventos_index'
]);

// Crear tipo de Eventos
Route::get('agregar-tipo-eventos', [
    'uses'  => 'EventosController@createTipoEventos',
    'as'    => 'admin_tipo_eventos_create'
]);
// Guardar todos los tipos de eventos
Route::post('guardar-tipo-eventos', [
    'uses'  => 'EventosController@saveTipoEventos',
    'as'    => 'admin_tipo_eventos_save'
]);

// Guardar todos los tipos de eventos
Route::get('editar-tipo-evento/{id}', [
    'uses'  => 'EventosController@editarTipoEvento',
    'as'    => 'admin_tipo_evento_edit'
]);

// Guardar todos los tipos de eventos
Route::put('editar-tipo-evento/{id}', [
    'uses'  => 'EventosController@updateTipoEvento',
    'as'    => 'admin_tipo_eventos_update'
]);



// Enlistar todos los Anfitriones
Route::get('anfitriones', [
    'uses'  => 'UsersController@indexAnfitriones',
    'as'    => 'admin_anfitriones_index'
]);

// Enlistar todos los usuarios
Route::get('invitados', [
    'uses'  => 'UsersController@indexInvitados',
    'as'    => 'admin_invitados_index'
]);

// Enlistar todos los usuarios
Route::get('usuarios', [
    'uses'  => 'UsersController@indexUsers',
    'as'    => 'admin_users_index'
]);

// Enlistar los eventos por usuario
Route::get('/eventos/{username}', [
    'uses'  => 'EventosController@listarEventosUsuario',
    'as'    => 'admin_eventos_usuario_index'
]);

// Enlistar los eventos por usuario
Route::get('/tipo-eventos/{id}', [
    'uses'  => 'EventosController@listarEventosTipoEvento',
    'as'    => 'admin_tipo_evento_index'
]);

// Enlistar todos los eventos
Route::get('crear-evento', [
    'uses'  => 'EventosController@crearEvento',
    'as'    => 'admin_eventos_create'
]);

// Agregar invitado
Route::post('crear-evento', [
    'uses'  => 'UsersController@guardarInvitado',
    'as'    => 'guardar_invitado'
]);


// Enlistar todos los eventos
Route::post('guardar-evento', [
    'uses'  => 'EventosController@guardarEvento',
    'as'    => 'admin_eventos_save'
]);


