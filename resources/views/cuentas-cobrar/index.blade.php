@extends('layouts.app')
@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Cuentas por Cobrar</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">

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
                                                    <th>Nº Expediente</th>
                                                    <th>Tipo</th>
                                                    <th>Valor Porcentaje</th>
                                                    <th>Abonado</th>
                                                    <th>Estatus</th>
                                                    <th class="text-right">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $item)
                                                    <tr>
                                                    <td>{{ $item->cliente->firstname }} {{ $item->cliente->second_name }} {{ $item->cliente->lastname }} {{ $item->cliente->second_surname }}</td>
                                                    <td>{{ $item->expediente->numero_expendiente }}</td>
                                                    <td>{{ $item->tipo }}</td>
                                                    <td>{{ $item->monto }}</td>
                                                    <td>
                                                        @php
                                                            $totalPaid = 0;
                                                            foreach ($item->pagos as $pago) {
                                                                $totalPaid += $pago->monto;
                                                            }
                                                        @endphp
                                                        {{ $totalPaid }}
                                                    </td>
                                                    <td>
                                                        @if ($item->estado == 'Pendiente')
                                                            <span class="badge badge-warning"> Pendiente</span>
                                                        @endif
                                                        @if ($item->estado == 'Pagado')
                                                            <span class="badge badge-success"> Pagado</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-right">
                                                        <div class="dropdown float-right pt-0 pb-0">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger pt-0 pb-0" data-toggle="dropdown">
                                                                <em class="icon ni ni-more-h"></em>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    @can('cuenta-cobrar.show')
                                                                    <li>
                                                                        <a href="{{ route('cuenta-cobrar.show', $item->id) }}">
                                                                            <em class="icon ni ni-eye"></em>
                                                                            <span>Ver Detalle</span>
                                                                        </a>
                                                                    </li>
                                                                    @endcan
                                                                    @can('cuenta-cobrar.abonar')
                                                                    <li>
                                                                        <a href="{{ route('cuenta-cobrar.abonar', $item->id) }}">
                                                                            <em class="icon ni ni-sign-mxn-alt"></em>
                                                                            <span>Abonar</span>
                                                                        </a>
                                                                    </li>
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
