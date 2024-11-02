@extends('layouts.app')
@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Editar Rol</h3>
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
                                    <div class="card-inner">
                                        <form class="row gy-2 form-validate" action="{{ route('role.update', $data->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Rol</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="name" class="form-control"
                                                            id="name"  value="{{ $data->name }}">
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
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="expediente.index" value="expediente.index"
                                                                        @if ($data->hasPermissionTo('expediente.index')) checked @endif>
                                                                    <label class="custom-control-label" for="expediente.index"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="expediente.create" value="expediente.create"
                                                                        @if ($data->hasPermissionTo('expediente.create')) checked @endif>
                                                                    <label class="custom-control-label" for="expediente.create"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="expediente.show" value="expediente.show"
                                                                        @if ($data->hasPermissionTo('expediente.show')) checked @endif>
                                                                    <label class="custom-control-label" for="expediente.show"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="expediente.edit" value="expediente.edit"
                                                                        @if ($data->hasPermissionTo('expediente.edit')) checked @endif>
                                                                    <label class="custom-control-label" for="expediente.edit"></label>
                                                                </div>
                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="expediente.changestatus" value="expediente.changestatus"
                                                                        @if ($data->hasPermissionTo('expediente.changestatus')) checked @endif>
                                                                    <label class="custom-control-label" for="expediente.changestatus"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Clientes</th>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="cliente.index" value="cliente.index"
                                                                    @if ($data->hasPermissionTo('cliente.index')) checked @endif>
                                                                    <label class="custom-control-label" for="cliente.index"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="cliente.create" value="cliente.create"
                                                                    @if ($data->hasPermissionTo('cliente.create')) checked @endif>
                                                                    <label class="custom-control-label" for="cliente.create"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="cliente.show" value="cliente.show"
                                                                    @if ($data->hasPermissionTo('cliente.show')) checked @endif>
                                                                    <label class="custom-control-label" for="cliente.show"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="cliente.edit" value="cliente.edit"
                                                                    @if ($data->hasPermissionTo('cliente.edit')) checked @endif>
                                                                    <label class="custom-control-label" for="cliente.edit"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="cliente.destroy" value="cliente.destroy"
                                                                    @if ($data->hasPermissionTo('cliente.destroy')) checked @endif>
                                                                    <label class="custom-control-label" for="cliente.destroy"></label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Usuarios</th>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="user.index" value="user.index"
                                                                    @if ($data->hasPermissionTo('user.index')) checked @endif>
                                                                    <label class="custom-control-label" for="user.index"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="user.create" value="user.create"
                                                                    @if ($data->hasPermissionTo('user.create')) checked @endif>
                                                                    <label class="custom-control-label" for="user.create"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="user.show" value="user.show"
                                                                    @if ($data->hasPermissionTo('user.show')) checked @endif>
                                                                    <label class="custom-control-label" for="user.show"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="user.edit" value="user.edit"
                                                                    @if ($data->hasPermissionTo('user.edit')) checked @endif>
                                                                    <label class="custom-control-label" for="user.edit"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="user.destroy" value="user.destroy"
                                                                    @if ($data->hasPermissionTo('user.destroy')) checked @endif>
                                                                    <label class="custom-control-label" for="user.destroy"></label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Juzgados</th>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="juzgado.index" value="juzgado.index"
                                                                    @if ($data->hasPermissionTo('juzgado.index')) checked @endif>
                                                                    <label class="custom-control-label" for="juzgado.index"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="juzgado.create" value="juzgado.create"
                                                                    @if ($data->hasPermissionTo('juzgado.create')) checked @endif>
                                                                    <label class="custom-control-label" for="juzgado.create"></label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="juzgado.edit" value="juzgado.edit"
                                                                    @if ($data->hasPermissionTo('juzgado.edit')) checked @endif>
                                                                    <label class="custom-control-label" for="juzgado.edit"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="juzgado.destroy" value="juzgado.destroy"
                                                                    @if ($data->hasPermissionTo('juzgado.destroy')) checked @endif>
                                                                    <label class="custom-control-label" for="juzgado.destroy"></label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Materias</th>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="materia.index" value="materia.index"
                                                                    @if ($data->hasPermissionTo('materia.index')) checked @endif>
                                                                    <label class="custom-control-label" for="materia.index"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="materia.create" value="materia.create"
                                                                    @if ($data->hasPermissionTo('materia.create')) checked @endif>
                                                                    <label class="custom-control-label" for="materia.create"></label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="materia.edit" value="materia.edit"
                                                                    @if ($data->hasPermissionTo('materia.edit')) checked @endif>
                                                                    <label class="custom-control-label" for="materia.edit"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="materia.destroy" value="materia.destroy"
                                                                    @if ($data->hasPermissionTo('materia.destroy')) checked @endif>
                                                                    <label class="custom-control-label" for="materia.destroy"></label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Medios de Contacto</th>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="medio-contacto.index" value="medio-contacto.index"
                                                                    @if ($data->hasPermissionTo('medio-contacto.index')) checked @endif>
                                                                    <label class="custom-control-label" for="medio-contacto.index"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="medio-contacto.create" value="medio-contacto.create"
                                                                    @if ($data->hasPermissionTo('medio-contacto.create')) checked @endif>
                                                                    <label class="custom-control-label" for="medio-contacto.create"></label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="medio-contacto.edit" value="medio-contacto.edit"
                                                                    @if ($data->hasPermissionTo('medio-contacto.edit')) checked @endif>
                                                                    <label class="custom-control-label" for="medio-contacto.edit"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="medio-contacto.destroy" value="medio-contacto.destroy"
                                                                    @if ($data->hasPermissionTo('medio-contacto.destroy')) checked @endif>
                                                                    <label class="custom-control-label" for="medio-contacto.destroy"></label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Cuentas por Cobrar</th>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="cuenta-cobrar.index" value="cuenta-cobrar.index"
                                                                    @if ($data->hasPermissionTo('cuenta-cobrar.index')) checked @endif>
                                                                    <label class="custom-control-label" for="cuenta-cobrar.index"></label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="cuenta-cobrar.show" value="cuenta-cobrar.show"
                                                                    @if ($data->hasPermissionTo('cuenta-cobrar.show')) checked @endif>
                                                                    <label class="custom-control-label" for="cuenta-cobrar.show"></label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="cuenta-cobrar.abonar" value="cuenta-cobrar.abonar"
                                                                    @if ($data->hasPermissionTo('cuenta-cobrar.abonar')) checked @endif>
                                                                    <label class="custom-control-label" for="cuenta-cobrar.abonar"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Notas</th>
                                                            <td></td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="nota.create" value="nota.create"
                                                                    @if ($data->hasPermissionTo('nota.create')) checked @endif>
                                                                    <label class="custom-control-label" for="nota.create"></label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="nota.destroy" value="nota.destroy"
                                                                    @if ($data->hasPermissionTo('nota.destroy')) checked @endif>
                                                                    <label class="custom-control-label" for="nota.destroy"></label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Archivos</th>
                                                            <td></td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="archivos[]" id="file.create" value="file.create"
                                                                    @if ($data->hasPermissionTo('file.create')) checked @endif>
                                                                    <label class="custom-control-label" for="file.create"></label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="archivos[]" id="file.destroy" value="file.destroy"
                                                                    @if ($data->hasPermissionTo('file.destroy')) checked @endif>
                                                                    <label class="custom-control-label" for="file.destroy"></label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Roles</th>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="role.index" value="role.index"
                                                                    @if ($data->hasPermissionTo('role.index')) checked @endif>
                                                                    <label class="custom-control-label" for="role.index"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="role.create" value="role.create"
                                                                    @if ($data->hasPermissionTo('role.create')) checked @endif>
                                                                    <label class="custom-control-label" for="role.create"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="role.show" value="role.show"
                                                                    @if ($data->hasPermissionTo('role.show')) checked @endif>
                                                                    <label class="custom-control-label" for="role.show"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="role.edit" value="role.edit"
                                                                    @if ($data->hasPermissionTo('role.edit')) checked @endif>
                                                                    <label class="custom-control-label" for="role.edit"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="role.destroy" value="role.destroy"
                                                                    @if ($data->hasPermissionTo('role.destroy')) checked @endif>
                                                                    <label class="custom-control-label" for="role.destroy"></label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group float-right">
                                                    <button type="submit" class="btn btn-primary">Actualizar Rol</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>
                        </div>
                        <!-- end page title -->
@endsection
