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
                                    <h4 class="card-title">Panel de Administracion</h4>
                                    <h5>Listado de Eventos de: <b>{{ $user->nombre }}</b></h5>
                                </div>
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6 col-sm-3">

                                            <form action="{{ route('admin.admin_eventos_usuario_index', $user->username) }}" method="get"
                                                  class="form-inline float-right" id="filtrarestado">
                                                <div class="form-group">
                                                    <input type="text" name="text_evento" class="form-control" placeholder="Texto a Buscar" value="{{ app('request')->input('text_evento') }}"
                                                           role="search" >
                                                </div>
                                                <div class="form-group">
                                                    <select class="selectpicker ml-2" data-size="10"
                                                            data-style="btn btn-success" title="Seleccione el Estado"
                                                            name="estado" onChange="this.form.submit();">

                                                        <option value="borrador" @if(app('request')->input('estado')== 'borrador')  selected @endif>Borrador</option>
                                                        <option value="pendiente" @if(app('request')->input('estado')== 'pendiente')  selected @endif>Pendiente</option>
                                                        <option value="enproceso" @if(app('request')->input('estado')== 'enproceso')  selected @endif>En Proceso</option>
                                                        <option value="concluido" @if(app('request')->input('estado')== 'concluido')  selected @endif>Conluido</option>
                                                        <option value="anulado" @if(app('request')->input('estado')== 'anulado')  selected @endif>Anulado</option>
                                                    </select>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive table-sales">
                                                <h1 class="text-left"></h1>
                                                <table class="table table-hover mb-5">
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

                                                    @forelse($user->eventos as $evento)
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
                                            @if(count($user->eventos))
                                                <div class="row">
                                                    <div class="mt-2 mx-auto">

                                                    </div>
                                                </div>
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