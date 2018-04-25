@extends('layouts.app.blade__bk.php')

@section('content')

    <h1 class="text-center">Registrate</h1>

    <div class="formulario">
        <form method="POST" action="{{ route('register') }}" class="">
            {{ csrf_field() }}
            <div class="form-group ">
                <label for="nombre">Ingresa tu Nombre</label>
                <input type="text" name="nombre" class="form-control {{ $errors->has('nombre') ? ' is-invalid' : '' }}"
                       id="nombre" placeholder="Ingresa tu nombre">
                @if ($errors->has('nombre'))
                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                @endif
            </div>

            <div class="form-group ">
                <label for="nobre">Ingresa tu Email</label>
                <input type="email" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email"
                       placeholder="Ingresa tu Email">
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                </span>
                @endif
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password"
                       class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                       required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                @endif

            </div>

            <div class="form-group">
                <label for="password-confirm">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                       required>
            </div>

            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </div>


@endsection
