            <div class="nk-sidebar-main is-light">
                <div class="nk-sidebar-inner" data-simplebar>
                    <div class="nk-menu-content menu-active" data-content="navHospital">
                        <img width="100" style="display: block; margin: 0 auto;" src="{{ url($setting->url_logo) }}" alt="{{ $setting->name }}">
                        <ul class="nk-menu mt-3">
                            <li class="nk-menu-item">
                                <a href="{{ route('dashboard') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                    <span class="nk-menu-text">Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{ route('appointment.index') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-calender-date-fill"></em></span>
                                    <span class="nk-menu-text">Citas</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{ route('quote.index') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-note-add-fill"></em></span>
                                    <span class="nk-menu-text">Cotizaciones y Presupuesto</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item ">
                                <a href="{{ route('patient.index') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                    <span class="nk-menu-text">Pacientes</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{ route('billing.index') }}" class="nk-menu-link ">
                                    <span class="nk-menu-icon"><em class="icon ni ni-coin-alt-fill"></em></span>
                                    <span class="nk-menu-text">Finanzas o Pagos</span>
                                </a>

                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item has-sub">
                                <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-setting-fill"></em></span>
                                    <span class="nk-menu-text">Configuración</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="{{ route('treatments.index') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Tipo de Tratamientos</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('medicine.index') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Medicamentos</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('medication-instruction.index') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Instrucciones para Medicamentos</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('observation-template.index') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Plantillas de recomendaciones y observaciones</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('reason-treatment.index') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Motivos de Consulta</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('user.index') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Usuarios</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{ route('settings.index') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Sistema</span>
                                        </a>
                                    </li>
                                </ul><!-- .nk-menu-sub -->
                            </li><!-- .nk-menu-item -->
                        </ul><!-- .nk-menu -->
                    </div>

                </div>
            </div>


