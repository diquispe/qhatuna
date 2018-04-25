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
                                    <h4 class="card-title">Editar Tipo de Evento</h4>
                                </div>

                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="{{ route('admin.admin_tipo_eventos_update', $tipo_evento->id) }}" method="post" >
                                                {{ csrf_field() }}
                                                {{ method_field('PUT')}}
                                                <input name="_method" type="hidden" value="PUT">
                                                <div class="form-group bmd-form-group">
                                                    <label for="title" class="bmd-label-floating">Ingresa el Nombre de la Categoria</label>
                                                    <input type="text" class="form-control" id="title" name="title" value="{{ (isset($tipo_evento->title)) ? $tipo_evento->title : "" }}">
                                                </div>
                                                <div class="form-group bmd-form-group">
                                                    <label for="slug" class="bmd-label-floating">Ingresa el slug</label>
                                                    <input type="text" class="form-control" id="slug" name="slug" value="{{ (isset($tipo_evento->slug)) ? $tipo_evento->slug : "" }}">
                                                </div>
                                                <div class="form-group bmd-form-group">
                                                    <label for="descripcion" class="bmd-label-floating">Agrega un Descripcion al Tipo de Evento</label>
                                                    <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control">{{ (isset($tipo_evento->descripcion)) ? $tipo_evento->descripcion : "" }}</textarea>
                                                </div>
                                                <div class="card-footer ">
                                                    <button type="submit" class="btn btn-fill btn-rose">Actualizar</button>
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