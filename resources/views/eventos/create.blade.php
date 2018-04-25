@extends('layouts.app.blade__bk.php')

@section('content')

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>

    @endif

    <a href="/crear-evento" class="btn btn-warning">Crear Evento</a>
    <hr>


    <form action="/messages/create" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <div class="form-group">
                <label for="nombre">Ingresa el nombre de tu Evento</label>
                <input type="text" name="nombre" id="nombre" class="form-control @if($errors->has('nombre')) is-invalid @endif" placeholder="Ingresa el nombre de tu evento">
                @if($errors->any())
                    @foreach($errors->get('nombre') as $error)
                        <div class="invalid-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Selecciona una Categoria</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="descripcion">Ingresa una descripcion corta</label>
                <textarea name="descripcion" id="descripcion"  class="form-control @if($errors->has('nombre')) is-invalid @endif" cols="30" rows="10"></textarea>
                @if($errors->any())
                    @foreach($errors->get('descripcion') as $error)
                        <div class="invalid-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </div>
    </form>



@endsection



