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
                                    <h4 class="card-title">Agregar un tipo de Evento</h4>
                                </div>

                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form method="post" action="{{ route('admin.admin_tipo_eventos_save') }}">
                                                {{ csrf_field() }}
                                                <div class="form-group bmd-form-group">
                                                    <label for="title" class="bmd-label-floating">Ingresa el Nombre de la Categoria</label>
                                                    <input type="text" class="form-control" id="title" name="title">
                                                </div>
                                                <div class="form-group bmd-form-group">
                                                    <label for="slug" class="bmd-label-floating">Ingresa el slug</label>
                                                    <input type="text" class="form-control" id="slug" name="slug">
                                                </div>
                                                <div class="form-group bmd-form-group">
                                                    <label for="descripcion" class="bmd-label-floating">Agrega un Descripcion al Tipo de Evento</label>
                                                    <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control"></textarea>
                                                </div>
                                                <div class="card-footer ">
                                                    <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                                </div>
                                            </form>
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