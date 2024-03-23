@extends('layouts.app')
@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Usuarios</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    <a href="{{ route('user.create') }}" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                    <a href="{{ route('user.create') }}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Agregar Usuario</span></a>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="card card-preview">
                                    <div class="card-inner">
                                        <table class="datatable-init table">
                                            <thead>
                                                <tr>
                                                    <th>Usuario</th>
                                                    <th>Correo</th>
                                                    <th>Rol</th>
                                                    <th>Estatus</th>
                                                    <th class="text-right">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $item)
                                                <tr>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->rol->name }}</td>
                                                    <td>
                                                        @if ($item->status == 'Activo')
                                                        <span class="badge badge-primary">Activo</span>
                                                        @endif
                                                        @if ($item->status == 'Inactivo')
                                                        <span class="badge badge-danger">Inactivo</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="dropdown float-right pt-0 pb-0">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger pt-0 pb-0" data-toggle="dropdown">
                                                                <em class="icon ni ni-more-h"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li>
                                                                        <a href="{{ route('user.show', $item->id) }}">
                                                                            <em class="icon ni ni-eye"></em>
                                                                            <span>Ver</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="{{ route('user.edit', $item->id) }}">
                                                                            <em class="icon ni ni-pen-fill"></em>
                                                                            <span>Editar</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">
                                                                            <em class="icon ni ni-activity-round"></em>
                                                                            <span>Actividades</span>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        @if ($item->status == 'Activo')
                                                                        <a href="#" class="delete-record" data-id="{{ $item->id }}">
                                                                            <em class="icon ni ni-power"></em>
                                                                            <span>Desactivar</span>
                                                                        </a>
                                                                        <form id="formDelete-{{ $item->id }}" action="{{ route('user.destroy', ['id' => $item->id]) }}"method="POST">
                                                                            @csrf
                                                                        </form>
                                                                        @endif
                                                                        @if ($item->status == 'Inactivo')
                                                                        <a href="#" class="delete-record" data-id="{{ $item->id }}">
                                                                            <em class="icon ni ni-power"></em>
                                                                            <span>Activar</span>
                                                                        </a>
                                                                        <form id="formDelete-{{ $item->id }}" action="{{ route('user.destroy', ['id' => $item->id]) }}"method="POST">
                                                                            @csrf
                                                                        </form>
                                                                        @endif
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>
                        </div>
                        <!-- end page title -->

@endsection
@section('scripts')
        <script>
            (function(NioApp, $){
                'use strict';

                $('.datatable-init tbody').on('click', '.delete-record', function(){
                    let dataid = $(this).data('id');
                    let formDelete = $('#formDelete-'+dataid);
                    Swal.fire({
                        title: '¿Está Seguro de Desactivar al Usuario?',
                        text: "Al intentar ingresar al sistema, se le denegará el acceso!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Si, estoy seguro!'
                    }).then((result) => {
                        if (result.value) {
                            $(formDelete).submit();
                        }
                    });
                });

            })(NioApp, jQuery);
        </script>
@endsection
