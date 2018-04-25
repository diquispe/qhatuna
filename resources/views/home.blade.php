@extends('layouts.app.blade__bk.php')

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>

    @endif

    <a href="/crear-evento" class="btn btn-warning">Crear Evento</a>




@endsection
