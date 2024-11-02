            <div class="nk-sidebar-main is-light">
                <div class="nk-sidebar-inner" data-simplebar>
                    <div class="nk-menu-content menu-active" data-content="navHospital">
                        <h5 class="title text-center">
                            <img width="150" src="{{ asset('') }}{{ $sucursal->logo_interno }}" alt="" srcset="">
                            <!-- Aldana & Asoc. -->
                        </h5>
                        <ul class="nk-menu">

                            <li class="nk-menu-item">
                                <a href="{{ route('dashboard') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                    <span class="nk-menu-text">Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            @can('expediente.index')
                            <li class="nk-menu-item">
                                <a href="{{ route('expediente.index') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-note-add-fill"></em></span>
                                    <span class="nk-menu-text">Expedientes</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            @endcan
                            @can('cliente.index')
                            <li class="nk-menu-item ">
                                <a href="{{ route('cliente.index') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                    <span class="nk-menu-text">Clientes</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            @endcan
                            @can('cuenta-cobrar.index')
                            <li class="nk-menu-item">
                                <a href="{{ route('cuenta-cobrar.index') }}" class="nk-menu-link ">
                                    <span class="nk-menu-icon"><em class="icon ni ni-coin-alt-fill"></em></span>
                                    <span class="nk-menu-text">Cuentas por Cobrar</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            @endcan

                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-setting-fill"></em></span>
                                    <span class="nk-menu-text">Configuración</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    @can('role.index')
                                    <li class="nk-menu-item">
                                        <a href="{{ route('role.index') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Roles</span>
                                        </a>
                                    </li>
                                    @endcan
                                    @can('user.index')
                                    <li class="nk-menu-item">
                                        <a href="{{ route('user.index') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Usuarios</span>
                                        </a>
                                    </li>
                                    @endcan
                                    @can('juzgado.index')
                                    <li class="nk-menu-item">
                                        <a href="{{ route('juzgado.index') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Juzgados</span>
                                        </a>
                                    </li>
                                    @endcan
                                    @can('materia.index')
                                    <li class="nk-menu-item">
                                        <a href="{{ route('materia.index') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Materias</span>
                                        </a>
                                    </li>
                                    @endcan
                                    @can('medio-contacto.index')
                                    <li class="nk-menu-item">
                                        <a href="{{ route('medio-contacto.index') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Medios de Contacto</span>
                                        </a>
                                    </li>
                                    @endcan
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                        </ul><!-- .nk-menu -->
                    </div>

                </div>
            </div>


