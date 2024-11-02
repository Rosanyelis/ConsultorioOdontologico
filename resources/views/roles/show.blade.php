@extends('layouts.app')
@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Ver Rol</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    <a href="{{ route('role.index') }}" class="btn btn-icon btn-secondary d-md-none"><em class="icon ni ni-arrow-left"></em></a>
                                                    <a href="{{ route('role.index') }}" class="btn btn-secondary d-none d-md-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Regresar</span></a>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="card card-preview">
                                    <div class="card-inner row gy-2">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-label" for="name">Rol</label>
                                                <div class="form-control-wrap">
                                                    <p>{{ $data->name }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Módulos</th>
                                                        <th>Lista</th>
                                                        <th>Crear</th>
                                                        <th>Ver</th>
                                                        <th>Editar</th>
                                                        <th>Eliminar</th>
                                                        <th>Cambiar Estado/Abonar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Expedientes</th>
                                                        <td>@if ($data->hasPermissionTo('expediente.index')) Si @endif</td>
                                                        <td>@if ($data->hasPermissionTo('expediente.create')) Si @endif</td>
                                                        <td>@if ($data->hasPermissionTo('expediente.show')) Si @endif</td>
                                                        <td>@if ($data->hasPermissionTo('expediente.edit')) Si @endif</td>
                                                        <td></td>
                                                        <td>@if ($data->hasPermissionTo('expediente.changestatus')) Si @endif</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Clientes</th>
                                                        <td>@if ($data->hasPermissionTo('cliente.index')) Si @endif</td>
                                                        <td>@if ($data->hasPermissionTo('cliente.create')) Si @endif</td>
                                                        <td>@if ($data->hasPermissionTo('cliente.show')) Si @endif</td>
                                                        <td>@if ($data->hasPermissionTo('cliente.edit')) Si @endif</td>
                                                        <td>@if ($data->hasPermissionTo('cliente.destroy')) Si @endif</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Usuarios</th>
                                                        <td>@if ($data->hasPermissionTo('user.index')) Si @endif</td>
                                                        <td>@if ($data->hasPermissionTo('user.create')) Si @endif</td>
                                                        <td>@if ($data->hasPermissionTo('user.show')) Si @endif</td>
                                                        <td>@if ($data->hasPermissionTo('user.edit')) Si @endif</td>
                                                        <td>@if ($data->hasPermissionTo('user.destroy')) Si @endif</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Juzgados</th>
                                                        <td>@if ($data->hasPermissionTo('juzgado.index')) Si @endif</td>
                                                        <td>@if ($data->hasPermissionTo('juzgado.create')) Si @endif</td>
                                                        <td></td>
                                                        <td>@if ($data->hasPermissionTo('juzgado.edit')) Si @endif</td>
                                                        <td>@if ($data->hasPermissionTo('juzgado.destroy')) Si @endif</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Materias</th>
                                                        <td>@if ($data->hasPermissionTo('materia.index')) Si @endif</td>
                                                        <td>@if ($data->hasPermissionTo('materia.create')) Si @endif</td>
                                                        <td></td>
                                                        <td>@if ($data->hasPermissionTo('materia.edit')) Si @endif</td>
                                                        <td>@if ($data->hasPermissionTo('materia.destroy')) Si @endif</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Medios de Contacto</th>
                                                        <td>@if ($data->hasPermissionTo('medio-contacto.index')) Si @endif</td>
                                                        <td>@if ($data->hasPermissionTo('medio-contacto.create')) Si @endif</td>
                                                        <td></td>
                                                        <td>@if ($data->hasPermissionTo('medio-contacto.edit')) Si @endif</td>
                                                        <td>@if ($data->hasPermissionTo('medio-contacto.destroy')) Si @endif</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Cuentas por Cobrar</th>
                                                        <td>@if ($data->hasPermissionTo('cuenta-cobrar.index')) Si @endif</td>
                                                        <td></td>
                                                        <td>@if ($data->hasPermissionTo('cuenta-cobrar.show')) Si @endif</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>@if ($data->hasPermissionTo('cuenta-cobrar.abonar')) Si @endif</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Notas</th>
                                                        <td></td>
                                                        <td>@if ($data->hasPermissionTo('nota.create')) Si @endif</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>@if ($data->hasPermissionTo('nota.destroy')) Si @endif</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Archivos</th>
                                                        <td></td>
                                                        <td>@if ($data->hasPermissionTo('file.create')) Si @endif</td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>@if ($data->hasPermissionTo('file.destroy')) Si @endif</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Roles</th>
                                                        <td>@if ($data->hasPermissionTo('role.index')) Si @endif</td>
                                                        <td>@if ($data->hasPermissionTo('role.create')) Si @endif</td>
                                                        <td>@if ($data->hasPermissionTo('role.show')) Si @endif</td>
                                                        <td>@if ($data->hasPermissionTo('role.edit')) Si @endif</td>
                                                        <td>@if ($data->hasPermissionTo('role.destroy')) Si @endif</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>
                        </div>
                        <!-- end page title -->
@endsection
