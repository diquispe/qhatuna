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
                                    <h4 class="card-title">Crear Evento</h4>
                                </div>
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <form method="post" action="{{ route('admin.admin_eventos_save') }}">
                                                        {{ csrf_field() }}
                                                        <div class="form-group bmd-form-group">
                                                            <label for="nombre" class="bmd-label-floating">Ingresa un Titulo</label>
                                                            <input type="text" class="form-control" id="name" name="nombre">
                                                        </div>
                                                        <div class="form-group bmd-form-group">
                                                            <label for="descripcion" class="bmd-label-floating">Agrega un Descripcion a tu evento</label>
                                                            <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control"></textarea>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xs-12 col-md-2">
                                                                <div class="card-header card-header-rose card-header-text">
                                                                    <h4 class="card-title"><b>Fecha</b></h4>
                                                                </div>
                                                                <div class="card-body ">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control datepicker" name="fecha_evento" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-md-2">
                                                                <div class="card-header card-header-rose card-header-text">
                                                                    <h4 class="card-title"><b>Hora</b></h4>
                                                                </div>
                                                                <div class="card-body ">
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control timepicker" name="hora_evento" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-md-5">
                                                                <div class="card-header card-header-rose card-header-text">
                                                                    <h4 class="card-title"><b>Organizador</b></h4>
                                                                </div>
                                                                <div class="card-body ">
                                                                    <div class="form-group">
                                                                        <select class="selectpicker" data-size="20" data-style="btn btn-primary" title="Organizador del Evento" name="user_id">
                                                                            @foreach($users as $user)
                                                                                <option value="{{ $user->id }}" >{{ $user->nombre }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-md-3">
                                                                <div class="card-header card-header-rose card-header-text">
                                                                    <h4 class="card-title"><b>Estado del Evento</b></h4>
                                                                </div>
                                                                <div class="card-body ">
                                                                    <div class="form-group">
                                                                        <select class="selectpicker" data-size="7" data-style="btn btn-primary" title="Estado" name="estado">
                                                                            <option value="borrador" >Borrador</option>
                                                                            <option value="pendiente" >Pendiente</option>
                                                                            <option value="enproceso" >En Proceso</option>
                                                                            <option value="concluido" >Conluido</option>
                                                                            <option value="anulado" >Anulado</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="form-check">
                                                            <label class="form-check-label">
                                                                <input class="form-check-input" type="checkbox" value="">
                                                                Requiero una tarjeta Fisica
                                                                <span class="form-check-sign">
                                                        <span class="check"></span></span>
                                                            </label>
                                                        </div>
                                                        <div class="card-footer ">
                                                            <button type="submit" class="btn btn-fill btn-rose">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                            <div class="form-group bmd-form-group">
                                                <div class="text-center">
                                                    <button class="btn btn-block  btn-primary " data-toggle="modal" data-target="#myModal">
                                                        <i class="material-icons">library_books</i> Agregar Invitados
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- Classic Modal -->
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Agrega tus invitados Aqui</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <i class="material-icons">clear</i>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="card-body ">
                                                                <form method="post" action="{{ route('admin.guardar_invitado') }}">
                                                                    {{ csrf_field() }}
                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="nombre" class="bmd-label-floating">Nombre Completo</label>
                                                                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="apellidos" class="bmd-label-floating">Apellidos</label>
                                                                                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="direccion" class="bmd-label-floating">Direccion</label>
                                                                        <input type="text" class="form-control" id="direccion" name="direccion" required>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="edad" class="bmd-label-floating">Edad</label>
                                                                                <input type="text" class="form-control" id="edad" name="edad" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xs-12 col-md-6">
                                                                            <select class="selectpicker" data-size="7" data-style="btn btn-primary" title="Sexo" name="sexo" required>
                                                                                <option value="masculino">Masculino</option>
                                                                                <option value="femenino">Femenino</option>
                                                                            </select>
                                                                        </div>



                                                                    </div>
                                                                    <div id="mensaje"></div>
                                                                    <div class="text-center">
                                                                        <button class="btn btn-success btn-agregar-invitado">Guardar y Agregar más<div class="ripple-container"></div></button>
                                                                    </div>
                                                                </form>

                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Finalizar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--  End Modal -->


                                        </div>

                                        <div class="col-md-4">
                                            fdfdf
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
