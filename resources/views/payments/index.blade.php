@extends('layouts.app')
@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Finanzas o Pagos</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    <a href="#" class="btn btn-icon btn-primary d-md-none"
                                                    data-toggle="modal" data-target="#modalBilling">
                                                        <em class="icon ni ni-plus"></em></a>
                                                    <a href="#" class="btn btn-primary d-none d-md-inline-flex"
                                                    data-toggle="modal" data-target="#modalBilling">
                                                        <em class="icon ni ni-plus"></em><span>Agregar Factura</span></a>
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
                                                    <th>Paciente</th>
                                                    <th>Nº Factura</th>
                                                    <th>Monto</th>
                                                    <th>Abonado</th>
                                                    <th>Estatus</th>
                                                    <th class="text-right">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $item)
                                                <tr>
                                                    <td>{{ $item->patient->firstname }} {{ $item->patient->second_name }}
                                                        {{ $item->patient->lastname }} {{ $item->patient->second_surname }}</td>
                                                    <td>#0000{{ $item->id }}</td>
                                                    <td>{{ $item->total }}</td>
                                                    <td>
                                                        {{ $item->payments->sum('pay_amount') }}
                                                    </td>
                                                    <td>
                                                        @if ($item->status == 'Pagado')
                                                        <span class="badge badge-success">{{ $item->status }}</span>
                                                        @endif
                                                        @if ($item->status == 'Pendiente')
                                                        <span class="badge badge-warning">{{ $item->status }}</span>
                                                        @endif
                                                        @if ($item->status == 'Cancelado')
                                                        <span class="badge badge-danger">{{ $item->status }}</span>
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
                                                                        <a href="{{ route('billing.show', ['id' => $item->id]) }}">
                                                                            <em class="icon ni ni-eye"></em>
                                                                            <span>Ver Factura</span>
                                                                        </a>
                                                                    </li>
                                                                    @if ($item->status == 'Pendiente')
                                                                    <li>
                                                                        <a href="{{ route('billing.pay', ['id' => $item->id]) }}">
                                                                            <em class="icon ni ni-file-plus"></em>
                                                                            <span>Abonar Factura</span>
                                                                        </a>
                                                                    </li>

                                                                    @endif
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
                        @include('payments.partials.create-pay')
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

                var total = 0;
                var dataCotizacion = [];
                var totalQuote = 0;

                $('#servicio #total').html('0');
                $('#add').on('click', function(){
                    // obtener los datos de los campos
                    let type = $('#type').val();
                    let price = $('#price').val();
                    // agregar fila en la tabla
                    $("#servicio tbody").append(
                        `<tr>
                            <td>`+type+`</td>
                            <td class="price">`+price+`</td>
                        </tr>`);
                    // agregamos los datos a la variable dataCotizacion
                    let datosFila = {};
                    datosFila.type = type;
                    datosFila.price = price;
                    dataCotizacion.push(datosFila);
                    // se suma los montos al realizar click al agregar data en la tabla
                    total = total + parseInt(price);
                    totalQuote = total;
                    console.log(dataCotizacion);
                    // lo mostramos en la tabla donde indica el total
                    $('#servicio #total').html(total);
                    $('#totalinput').val(total);

                    // reseteamos los campos luego de haber agregado los datos a la tabla
                    $("#type").val($("#type").data('placeholder')).trigger('change');
                    $('#price').val('');
                });



                $('#guardar').click(function() {
                    $('#dataBilling').val(JSON.stringify(dataCotizacion));
                    $('#form').submit();
                    $('#guardar').attr('disabled', true);
                    $('#guardar').html(
                        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span> Por favor, espere... </span>'
                        );
                });

            })(NioApp, jQuery);
        </script>
@endsection
