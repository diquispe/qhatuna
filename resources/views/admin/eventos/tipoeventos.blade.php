@extends('layouts.app')
@section('content')
    <div class="wrapper">
        @include('layouts.sidebar')
        <div class="main-panel ps-container ps-theme-default ps-active-y">
            @include('layouts.navegacion')
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">


                            <!-- inicio del contenido -->
                            <div class="card ">
                                <div class="card-header card-header-success card-header-icon">
                                    <div class="card-icon">
                                        <i class="material-icons"></i>
                                    </div>
                                    <h4 class="card-title">Tipos de Eventos</h4>
                                </div>

                                <div class="card-body ">
                                    <div class="row">
                                        <a href="{{ route('admin.admin_tipo_eventos_create') }}" class="btn btn-primary">Agregar Tipo de Evento</a>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th scope="col"><b>ID</b></th>
                                                    <th scope="col"><b>Nombre</b></th>
                                                    <th scope="col"><b>Descripcion</b></th>
                                                    <th scope="col"><b>Eventos</b></th>
                                                    <th scope="col"></th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @forelse($tipo_eventos as $tipo_evento)
                                                    <tr>
                                                        <th scope="row">{{ $tipo_evento->id }}</th>
                                                        <td><a href="{{ route('admin.admin_tipo_evento_edit', $tipo_evento->id) }}"><b>{{ $tipo_evento->title }}</b></a></td>
                                                        <td>{{ substr($tipo_evento->descripcion, 0, 50) }}</td>
                                                        <td><a href="{{ route('admin.admin_tipo_evento_index', $tipo_evento->id) }}">Ver Eventos</a></td>
                                                        <td>
                                                            <a href="/editar"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                            <a href="/eliminar"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <th scope="row">#</th>
                                                    <td>Vacio</td>
                                                    <td>Vacio</td>
                                                    <td>Vacio</td>
                                                @endforelse

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- fin del contenido -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection



