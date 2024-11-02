@extends('layouts.app')
@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Expedientes</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    @can('expediente.create')
                                                    <a href="{{ route('expediente.create') }}" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                    <a href="{{ route('expediente.create') }}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Agregar Expediente</span></a>
                                                    @endcan
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
                                                    <th>Cliente</th>
                                                    <th>N° Exp.</th>
                                                    <th>Asunto</th>
                                                    <th>Fecha Inicio</th>
                                                    <th>Fecha Término</th>
                                                    <th>Estatus</th>
                                                    <th class="text-right">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $item)

                                                <tr>
                                                    <td>{{ $item->cliente->firstname }} {{ $item->cliente->second_name }} {{ $item->cliente->lastname }} {{ $item->cliente->second_surname }}</td>
                                                    <td>{{ $item->numero_expendiente }}</td>
                                                    <td>{{ $item->asunto }}</td>
                                                    <td>{{ $item->fecha_inicio }}</td>
                                                    <td>{{ $item->fecha_fin }}</td>
                                                    <td>
                                                        @if ($item->estado == 'Activo')
                                                        <span class="badge badge-primary">Activo</span>
                                                        @endif
                                                        @if ($item->estado == 'Suspendido')
                                                        <span class="badge badge-warning">Suspendido</span>
                                                        @endif
                                                        @if ($item->estado == 'Terminado')
                                                        <span class="badge badge-danger">Terminado</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="dropdown float-right pt-0 pb-0">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger pt-0 pb-0" data-toggle="dropdown">
                                                                <em class="icon ni ni-more-h"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    @can('expediente.show')
                                                                    <li>
                                                                        <a href="{{ route('expediente.show', $item->id) }}">
                                                                            <em class="icon ni ni-eye"></em>
                                                                            <span>Ver</span>
                                                                        </a>
                                                                    </li>
                                                                    @endcan
                                                                    @can('expediente.edit')
                                                                    <li>
                                                                        <a href="{{ route('expediente.edit', $item->id) }}">
                                                                            <em class="icon ni ni-pen-fill"></em>
                                                                            <span>Editar</span>
                                                                        </a>
                                                                    </li>
                                                                    @endcan
                                                                    @can('expediente.changestatus')
                                                                    @if ($item->estado == 'Activo')
                                                                    <li>
                                                                        <a href="#" class="cambiar-suspendido" data-id="{{ $item->id }}">
                                                                            <em class="icon ni ni-swap-v text-warning"></em>
                                                                            <span class="text-warning">Cambiar a Suspendido</span>
                                                                        </a>
                                                                        <form id="formSuspendido-{{ $item->id }}" action="{{ route('expediente.changestatus', ['id' => $item->id]) }}"method="POST">
                                                                            @csrf
                                                                            <input type="hidden" name="estado" value="Suspendido">
                                                                        </form>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="cambiar-terminado" data-id="{{ $item->id }}">
                                                                            <em class="icon ni ni-swap-v text-danger"></em>
                                                                            <span class="text-danger" >Cambiar a Terminado</span>
                                                                        </a>
                                                                        <form id="formTerminado-{{ $item->id }}" action="{{ route('expediente.changestatus', ['id' => $item->id]) }}"method="POST">
                                                                            @csrf
                                                                            <input type="hidden" name="estado" value="Terminado">
                                                                        </form>
                                                                    </li>
                                                                    @endif
                                                                    @if ($item->estado == 'Suspendido')
                                                                    <li>
                                                                        <a href="#" class="cambiar-terminado" data-id="{{ $item->id }}">
                                                                            <em class="icon ni ni-swap-v text-danger"></em>
                                                                            <span class="text-danger" >Cambiar a Terminado</span>
                                                                        </a>
                                                                        <form id="formTerminado-{{ $item->id }}" action="{{ route('expediente.changestatus', ['id' => $item->id]) }}"method="POST">
                                                                            @csrf
                                                                            <input type="hidden" name="estado" value="Terminado">
                                                                        </form>
                                                                    </li>
                                                                    @endif
                                                                    @endcan
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

                $('.datatable-init tbody').on('click', '.cambiar-suspendido', function(){
                    let dataid = $(this).data('id');
                    let formDelete = $('#formSuspendido-'+dataid);
                    Swal.fire({
                        title: '¿Está Seguro de Cambiar el estado del Expediente?',
                        text: "El cambio es irreversible!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Si, estoy seguro!'
                    }).then((result) => {
                        if (result.value) {
                            $(formDelete).submit();
                        }
                    });
                });

                $('.datatable-init tbody').on('click', '.cambiar-terminado', function(){
                    let dataid = $(this).data('id');
                    let formDelete = $('#formTerminado-'+dataid);
                    Swal.fire({
                        title: '¿Está Seguro de Cambiar el estado del Expediente?',
                        text: "El cambio es irreversible!",
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
