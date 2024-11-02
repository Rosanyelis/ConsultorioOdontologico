@extends('layouts.app')
@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Agregar Rol</h3>
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
                                        <form class="row gy-2 form-validate" action="{{ route('role.store') }}" method="POST">
                                            @csrf

                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Rol</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="name" class="form-control"
                                                            id="name" placeholder="Ejm: Administrador" value="{{ old('name') }}">
                                                        @if ($errors->has('name'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('name') }}
                                                            </span>
                                                        @endif
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
                                                                        name="permisos[]" id="expediente.index" value="expediente.index">
                                                                    <label class="custom-control-label" for="expediente.index"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="expediente.create" value="expediente.create">
                                                                    <label class="custom-control-label" for="expediente.create"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="expediente.show" value="expediente.show">
                                                                    <label class="custom-control-label" for="expediente.show"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="expediente.edit" value="expediente.edit">
                                                                    <label class="custom-control-label" for="expediente.edit"></label>
                                                                </div>
                                                            </td>
                                                            <td>

                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="expediente.changestatus" value="expediente.changestatus">
                                                                    <label class="custom-control-label" for="expediente.changestatus"></label>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Clientes</th>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="cliente.index" value="cliente.index">
                                                                    <label class="custom-control-label" for="cliente.index"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="cliente.create" value="cliente.create">
                                                                    <label class="custom-control-label" for="cliente.create"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="cliente.show" value="cliente.show">
                                                                    <label class="custom-control-label" for="cliente.show"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="cliente.edit" value="cliente.edit">
                                                                    <label class="custom-control-label" for="cliente.edit"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="cliente.destroy" value="cliente.destroy">
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
                                                                        name="permisos[]" id="user.index" value="user.index">
                                                                    <label class="custom-control-label" for="user.index"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="user.create" value="user.create">
                                                                    <label class="custom-control-label" for="user.create"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="user.show" value="user.show">
                                                                    <label class="custom-control-label" for="user.show"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="user.edit" value="user.edit">
                                                                    <label class="custom-control-label" for="user.edit"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="user.destroy" value="user.destroy">
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
                                                                        name="permisos[]" id="juzgado.index" value="juzgado.index">
                                                                    <label class="custom-control-label" for="juzgado.index"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="juzgado.create" value="juzgado.create">
                                                                    <label class="custom-control-label" for="juzgado.create"></label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="juzgado.edit" value="juzgado.edit">
                                                                    <label class="custom-control-label" for="juzgado.edit"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="juzgado.destroy" value="juzgado.destroy">
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
                                                                        name="permisos[]" id="materia.index" value="materia.index">
                                                                    <label class="custom-control-label" for="materia.index"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="materia.create" value="materia.create">
                                                                    <label class="custom-control-label" for="materia.create"></label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="materia.edit" value="materia.edit">
                                                                    <label class="custom-control-label" for="materia.edit"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="materia.destroy" value="materia.destroy">
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
                                                                        name="permisos[]" id="medio-contacto.index" value="medio-contacto.index">
                                                                    <label class="custom-control-label" for="medio-contacto.index"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="medio-contacto.create" value="medio-contacto.create">
                                                                    <label class="custom-control-label" for="medio-contacto.create"></label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="medio-contacto.edit" value="medio-contacto.edit">
                                                                    <label class="custom-control-label" for="medio-contacto.edit"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="medio-contacto.destroy" value="medio-contacto.destroy">
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
                                                                        name="permisos[]" id="cuenta-cobrar.index" value="cuenta-cobrar.index">
                                                                    <label class="custom-control-label" for="cuenta-cobrar.index"></label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="cuenta-cobrar.show" value="cuenta-cobrar.show">
                                                                    <label class="custom-control-label" for="cuenta-cobrar.show"></label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="cuenta-cobrar.abonar" value="cuenta-cobrar.abonar">
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
                                                                        name="permisos[]" id="nota.create" value="nota.create">
                                                                    <label class="custom-control-label" for="nota.create"></label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="nota.destroy" value="nota.destroy">
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
                                                                        name="archivos[]" id="file.create" value="file.create">
                                                                    <label class="custom-control-label" for="file.create"></label>
                                                                </div>
                                                            </td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="archivos[]" id="file.destroy" value="file.destroy">
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
                                                                        name="permisos[]" id="role.index" value="role.index">
                                                                    <label class="custom-control-label" for="role.index"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="role.create" value="role.create">
                                                                    <label class="custom-control-label" for="role.create"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="role.show" value="role.show">
                                                                    <label class="custom-control-label" for="role.show"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="role.edit" value="role.edit">
                                                                    <label class="custom-control-label" for="role.edit"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="custom-control custom-checkbox custom-control-sm">
                                                                    <input type="checkbox" class="custom-control-input "
                                                                        name="permisos[]" id="role.destroy" value="role.destroy">
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
                                                    <button type="submit" class="btn btn-primary">Guardar Rol</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>
                        </div>
                        <!-- end page title -->
@endsection
