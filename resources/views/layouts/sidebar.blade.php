<div class="sidebar" data-color="rose" data-background-color="black" data-image="img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->

    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            QS
        </a>

        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Qhatuna Store
        </a>

    </div>

    <div class="sidebar-wrapper ps-container ps-theme-default ps-active-x ps-active-y">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('assets/img/avatar.jpg') }}" />
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>
                       Tania Andrew
                      <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> MP </span>
                                <span class="sidebar-normal"> My Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> S </span>
                                <span class="sidebar-normal"> Settings </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">

            <li class="nav-item active ">
                <a class="nav-link" href="./dashboard.html">
                    <i class="material-icons">dashboard</i>
                    <p> Panel de Administracion </p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#section_eventos">
                    <i class="material-icons">image</i>
                    <p> Eventos
                        <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="section_eventos">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('admin.admin_eventos_index') }}">
                                <span class="sidebar-mini"> P </span>
                                <span class="sidebar-normal"> Ver Eventos </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('admin.admin_tipo_eventos_index') }}?text_evento=&estado=concluido">
                                <span class="sidebar-mini"> E </span>
                                <span class="sidebar-normal"> Tipos de Evventos Concluidos </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('admin.admin_eventos_index') }}?text_evento=&estado=pendiente">
                                <span class="sidebar-mini"> P </span>
                                <span class="sidebar-normal"> Eventos Pendientes </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('admin.admin_eventos_index') }}?text_evento=&estado=concluido">
                                <span class="sidebar-mini"> P </span>
                                <span class="sidebar-normal"> Eventos Concluidos </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#section_users">
                    <i class="material-icons">image</i>
                    <p> Usuarios
                        <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="section_users">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('admin.admin_users_index') }}">
                                <span class="sidebar-mini"> P </span>
                                <span class="sidebar-normal"> Ver Usuarios </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('admin.admin_eventos_index') }}">
                                <span class="sidebar-mini"> P </span>
                                <span class="sidebar-normal"> Eventos Pendientes </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('admin.admin_eventos_index') }}">
                                <span class="sidebar-mini"> P </span>
                                <span class="sidebar-normal"> Eventos Concluidos </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#section_anfitriones">
                    <i class="material-icons">apps</i>
                    <p> Anfitriones
                        <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="section_anfitriones">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('admin.admin_anfitriones_index') }}">
                                <span class="sidebar-mini"> B </span>
                                <span class="sidebar-normal"> Ver Anfitriones </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#section_invitados">
                    <i class="material-icons">apps</i>
                    <p> Invitados
                        <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="section_invitados">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('admin.admin_invitados_index') }}">
                                <span class="sidebar-mini"> B </span>
                                <span class="sidebar-normal"> Ver Invitados </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                    <i class="material-icons">content_paste</i>
                    <p> Invitaciones
                        <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="formsExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="./forms/regular.html">
                                <span class="sidebar-mini"> RF </span>
                                <span class="sidebar-normal"> Ver Invitaciones Forms </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="./forms/regular.html">
                                <span class="sidebar-mini"> RF </span>
                                <span class="sidebar-normal"> Ver Invitaciones Forms </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="./forms/regular.html">
                                <span class="sidebar-mini"> RF </span>
                                <span class="sidebar-normal"> Ver Invitaciones Forms </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
                    <i class="material-icons">grid_on</i>
                    <p> Tarjetas de Invitacion
                        <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="tablesExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="./tables/regular.html">
                                <span class="sidebar-mini"> RT </span>
                                <span class="sidebar-normal"> Ver Tarjetas </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="./tables/regular.html">
                                <span class="sidebar-mini"> RT </span>
                                <span class="sidebar-normal"> Ver Tarjetas </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
                    <i class="material-icons">place</i>
                    <p> Configuracion
                        <b class="caret"></b>
                    </p>
                </a>

                <div class="collapse" id="mapsExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="./maps/google.html">
                                <span class="sidebar-mini"> GM </span>
                                <span class="sidebar-normal"> Primer Item </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="./maps/google.html">
                                <span class="sidebar-mini"> GM </span>
                                <span class="sidebar-normal"> Segundo Item </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="./maps/google.html">
                                <span class="sidebar-mini"> GM </span>
                                <span class="sidebar-normal"> Tercer Item </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="./widgets.html">
                    <i class="material-icons">widgets</i>
                    <p> Administradores </p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="./charts.html">
                    <i class="material-icons">timeline</i>
                    <p> Estadisticas </p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="./calendar.html">
                    <i class="material-icons">date_range</i>
                    <p> Calendario </p>
                </a>
            </li>

        </ul>
    </div>
</div>