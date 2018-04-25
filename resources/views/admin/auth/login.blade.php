@extends('layouts.app')

@section('content')

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-transparent navbar-absolute" color-on-scroll="500">
        <div class="container">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="#pablo">Qhatuna Store</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="../dashboard.html" class="nav-link">
                            <i class="material-icons">dashboard</i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="register.html" class="nav-link">
                            <i class="material-icons">person_add</i>
                            Register
                        </a>
                    </li>
                    <li class="nav-item  active ">
                        <a href="login.html" class="nav-link">
                            <i class="material-icons">fingerprint</i>
                            Login
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a href="lock.html" class="nav-link">
                            <i class="material-icons">lock_open</i>
                            Lock
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->


    <div class="wrapper wrapper-full-page">
        <div class="page-header login-page header-filter" filter-color="black"
             style="background-image: url('{{ asset('assets/img/login.jpg') }}'); background-size: cover; background-position: top center;">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->

            <div class="container">
                <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                    <form class="form" method="POST" action="{{ url('/admin/login') }}">
                    {{ csrf_field() }}


                    <div class="card card-login card-hidden">

                        <div class="card-header card-header-rose text-center">
                            <h4 class="card-title">Iniciar Sesión</h4>
                            <div class="social-line">
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>

                        <div class="card-body ">
                            <p class="card-description text-center">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit. Aenean imperdiet luctus diam, et maximus quam rhoncus eu. Aliquam in accumsan
                                urna.</p>

                            <span class="bmd-form-group">
                                <div class="input-group {{ $errors->has('email') ? ' is-invalid' : '' }}">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="material-icons">email</i></span>
                                  </div>
                                    <input name="email" type="email" class="form-control" placeholder="Email..." value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                              </span>

                            <span class="bmd-form-group">
                                <div class="input-group {{ $errors->has('password') ? ' is-invalid' : '' }}">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">lock_outline</i>
                                    </span>
                                  </div>
                					<input type="password" class="form-control" placeholder="Password..." name="password">
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </span>


                        </div>


                        <div class="card-footer justify-content-center">
                            <button href="#pablo" class="btn btn-rose btn-link btn-lg">Acceder</button>
                        </div>

                    </div>


                    </form>
                </div>
            </div>
            <footer class="footer ">

                <div class="container">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                                    Creative Tim
                                </a>
                            </li>
                            <li>
                                <a href="http://presentation.creative-tim.com">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="http://blog.creative-tim.com">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="https://www.creative-tim.com/license">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright pull-right">
                        &copy;
                        <script>document.write(new Date().getFullYear())</script>
                        , made with <i class="material-icons">favorite</i> by <a href="https://www.tecnodus.com"
                                                                                 target="_blank">Tecnodus</a> for a
                        better web.
                    </div>
                </div>


            </footer>


        </div>

    </div>
@endsection