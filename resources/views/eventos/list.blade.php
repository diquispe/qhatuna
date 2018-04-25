@extends('layouts.app.blade__bk.php')

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>

    @endif


    <h1 class="text-center">Mis Eventos</h1>
    <hr>
    <div class="row">
        @forelse($eventos as $evento)
            @include('eventos.evento-card')
        @empty
            <p>NO hay Eventors Actualmente</p>
        @endforelse
    </div>



    @if(count($eventos))
        <hr>
        <div class="row">
            <div class="mt-2 mx-auto">
                {{ $eventos->links('pagination::bootstrap-4') }}
            </div>
        </div>
        <hr>
    @endif



@endsection



