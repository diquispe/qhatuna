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
                                    <h4 class="card-title">Listado de Eventos</h4>
                                </div>
                                <div class="card-body ">
                                    <div class="row">
                                        <a href="{{ route('admin.admin_eventos_create') }}" class="btn btn-primary">Crear Evento</a>
                                    </div>
                                    @include('admin.eventos.filtro')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col"><b>ID</b></th>
                                                        <th scope="col"><b>Nombre del Evento</b></th>
                                                        <th scope="col"><b>F. Creación</b></th>
                                                        <th scope="col"><b>F. Evento</b></th>
                                                        <th scope="col"><b>Anfitrion</b></th>
                                                        <th scope="col"><b>Estado</b></th>
                                                        <th scope="col"><b>Invitados</b></th>
                                                        <th scope="col"></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @forelse($eventos as $evento)
                                                        @include('admin.eventos.row')
                                                    @empty
                                                        <th scope="row">#</th>
                                                        <td>Vacio</td>
                                                        <td>Vacio</td>
                                                        <td>Vacio</td>
                                                        <td>Vacio</td>
                                                    @endforelse

                                                    </tbody>
                                                </table>
                                            </div>

                                            @if(count($eventos))
                                                <hr>
                                                <div class="row">
                                                    <div class="mt-2 mx-auto">
                                                        {{ $eventos->appends(Request::only(['text_evento', 'estado']))->links() }}
                                                    </div>
                                                </div>
                                                <hr>
                                            @endif

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
