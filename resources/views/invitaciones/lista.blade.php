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
        @forelse($invitaciones as $invitacion)
            @include('invitaciones.show')
        @empty
            <p>NO hay Invitaciones por el momento</p>
        @endforelse
    </div>



    @if(count($invitaciones))
        <hr>
        <div class="row">
            <div class="mt-2 mx-auto">
                {{ $invitaciones->links('pagination::bootstrap-4') }}
            </div>
        </div>
        <hr>
    @endif



@endsection



