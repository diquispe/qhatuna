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
                                    <h4 class="card-title">Listado de Usuarios</h4>
                                </div>
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="table-responsive table-sales">
                                                <table class="table table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Nombres y Apellidos</th>
                                                        <th scope="col">Nombre de Usuario</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Eventos</th>
                                                        <th scope="col">Acciones</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    @forelse($users as $user)
                                                        @include('admin.users.partials.row')
                                                    @empty
                                                        <th scope="row">#</th>
                                                        <td>Vacio</td>
                                                        <td>Vacio</td>
                                                        <td>Vacio</td>
                                                        <td>Vacio</td>
                                                        <td>Vacio</td>
                                                    @endforelse

                                                    </tbody>
                                                </table>
                                            </div>

                                            @if(count($users))
                                                <hr>
                                                <div class="row">
                                                    <div class="mt-2 mx-auto">
                                                        {{ $users->links('pagination::bootstrap-4') }}
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
