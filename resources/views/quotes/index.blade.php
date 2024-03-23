@extends('layouts.app')
@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Cotizaciones y Presupuesto</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <!-- <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    <a href="{{ route('user.create') }}" class="btn btn-icon btn-primary d-md-none">
                                                        <em class="icon ni ni-plus"></em>
                                                    </a>
                                                    <a href="{{ route('user.create') }}" class="btn btn-primary d-none d-md-inline-flex">
                                                        <em class="icon ni ni-plus"></em>
                                                        <span>Agregar Usuario</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>.nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="card card-preview">
                                    <div class="card-inner">
                                        <div class="nk-block">
                                            <form id="formQuote" class="invoice" action="{{ route('quote.pdf') }}" method="POST">
                                                @csrf
                                                <input id="dataQuote" type="hidden" name="data" value="">
                                                <div class="invoice-bills">
                                                    <div class="row gy-2">
                                                        <div class="col-3">
                                                            <div class="form-group">
                                                                <label class="form-label" for="type">Tipo de Tratamiento</label>
                                                                <div class="form-control-wrap">
                                                                    <select class="form-select" id="type" data-placeholder="Seleccione">
                                                                        <option value="">Seleccione</option>
                                                                        @foreach ($type as $item)
                                                                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-3">
                                                            <div class="form-group">
                                                                <label class="form-label" for="time">Tiempo</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="time"  placeholder="Ejm: 15 días">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="qty">Cantidad</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="number" class="form-control" id="qty"  placeholder="Ejm: 10">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-2">
                                                            <div class="form-group">
                                                                <label class="form-label" for="price">Costo</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="number" class="form-control" id="price"  placeholder="Ejm: 10">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-2">
                                                            <button id="add" type="button" class="btn btn-icon btn-info" style="margin-top: 1.90rem;">
                                                                <em class="icon ni ni-plus"></em>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive mt-3">
                                                        <table id="servicio" class="table table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th class="w-80">Descripción de Tratamiento</th>
                                                                    <th class="w-60">Tiempo</th>
                                                                    <th class="w-60">Cantidad</th>
                                                                    <th>Costo</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody></tbody>
                                                            <tfoot class="fs-18px">
                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td >Total</td>
                                                                    <td>$<span id="total"></span></td>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                    <hr id="hr" class="mt-5">
                                                    <div id="patients" class="row gy-2 mt-3">
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="name">Paciente</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" name="name" class="form-control"
                                                                        id="name" placeholder="Ejm: Jane Doe">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="address">Dirección</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" name="address" class="form-control"
                                                                        id="address" placeholder="Ejm: Jane Doe">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="phone">Teléfono</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" name="phone" class="form-control"
                                                                        id="phone" placeholder="Ejm: Jane Doe">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="phone">MCD</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" name="mcd" class="form-control"
                                                                        id="mcd" placeholder="Ejm: Jane Doe">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="phone">Fecha</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="date" name="date" class="form-control"
                                                                        id="date">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="phone">Valido hasta</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="date" name="dateValid" class="form-control"
                                                                        id="dateValid" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="mt-5">
                                                    <div class="row gy-2 ">
                                                        <div class="col-12">
                                                            <button id="btnQuote" type="button" class="btn btn-primary float-right">Formalizar Presupuesto</button>
                                                            <button id="btnQuoteF" type="button" class="btn btn-primary float-right">Generar Presupuesto</button>
                                                        </div>
                                                    </div>
                                                </div><!-- .invoice-bills -->
                                            </form><!-- .invoice -->
                                        </div><!-- .nk-block -->
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

                var total = 0;
                var dataCotizacion = [];
                var totalQuote = 0;

                $('#total').html('0');

                $('#hr').hide();
                $('#patients').hide();
                $('#btnQuoteF').hide();

                $('#add').on('click', function(){
                    // obtener los datos de los campos
                    let type = $('#type').val();
                    let time = $('#time').val();
                    let qty = $('#qty').val();
                    let price = $('#price').val();

                    // agregar fila en la tabla
                    $("#servicio tbody").append(
                        `<tr>
                            <td>`+type+`</td>
                            <td>`+time+`</td>
                            <td>`+qty+`</td>
                            <td class="price">`+price+`</td>
                        </tr>`);

                    // agregamos los datos a la variable dataCotizacion
                    let datosFila = {};
                    datosFila.type = type;
                    datosFila.time = time;
                    datosFila.qty = qty;
                    datosFila.price = price;
                    dataCotizacion.push(datosFila);

                    // reseteamos los campos luego de haber agregado los datos a la tabla
                    $("#type").val($("#type").data('placeholder')).trigger('change');
                    $('#time').val('');
                    $('#qty').val('');
                    $('#price').val('');

                    // se suma los montos al realizar click al agregar data en la tabla
                    total = total + parseInt(price);

                    totalQuote = total;
                    // lo mostramos en la tabla donde indica el total
                    $('#total').html(total);

                });

                $('#btnQuote').on('click', function(){
                    $('#btnQuote').hide();
                    $('#btnQuoteF').show();
                    $('#hr').show();
                    $('#patients').show();
                });

                $('#btnQuoteF').on('click', function(){

                    let namep = $('#name').val();
                    let addressp = $('#address').val();
                    let phonep = $('#phone').val();
                    let mcd = $('#mcd').val();
                    let date = $('#date').val();
                    let dateValid = $('#dateValid').val();
                    let data = [];

                    let datosFila = {};
                    datosFila.quote = dataCotizacion;
                    datosFila.total = totalQuote;
                    data.push(datosFila);

                    console.log(data);
                    $('#dataQuote').val(JSON.stringify(data));
                    $('#formQuote').submit();
                });

            })(NioApp, jQuery);
        </script>
@endsection
