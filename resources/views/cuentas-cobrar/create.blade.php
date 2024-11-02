@extends('layouts.app')

@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Factura de: {{ $data->firstname }} {{ $data->lastname }}</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    <a href="{{ route('patient.show', $data->id) }}" class="btn btn-icon btn-secondary d-md-none"><em class="icon ni ni-arrow-left"></em></a>
                                                    <a href="{{ route('patient.show', $data->id) }}" class="btn btn-secondary d-none d-md-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Regresar</span></a>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-inner-group">
                                            <form id="form" action="{{ route('patient.store-pay', $data->id) }}" method="POST">
                                                @csrf

                                                <div class="card-inner">
                                                    <div class="nk-block">
                                                        <div class="row gy-4 pb-4">
                                                            <div class="col-xxl-3 col-xl-3 col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="total">Monto Total De factura</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="number" name="total" class="form-control"
                                                                            id="totalinput" readonly>
                                                                        @if ($errors->has('total'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('total') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="total">Forma de Pago</label>
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select" name="payment_type" data-placeholder="Seleccionar">
                                                                            <option value="">Seleccionar</option>
                                                                            <option value="Total">Total</option>
                                                                            <option value="Parcial">Parcial</option>
                                                                            <option value="Por Cuotas">Por Cuotas</option>
                                                                        </select>
                                                                        @if ($errors->has('payment_type'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('payment_type') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="number_installments">Número de cuotas</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="number" name="number_installments" class="form-control"
                                                                        id="number_installments" >
                                                                        @if ($errors->has('number_installments'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('number_installments') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="total">Estatus</label>
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select" name="status" data-placeholder="Seleccionar">
                                                                            <option value="">Seleccionar</option>
                                                                            <option value="Pendiente">Pendiente</option>
                                                                            <option value="Cancelado">Cancelado</option>
                                                                            <option value="Pagado">Pagado</option>
                                                                        </select>
                                                                        @if ($errors->has('status'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('status') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
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
                                                                        <th>Descripción de Tratamiento</th>
                                                                        <th>Costo</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody></tbody>
                                                                <tfoot class="fs-18px">
                                                                    <tr>
                                                                        <td class="text-right">Total</td>
                                                                        <td>$<span id="total"></span></td>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 mt-3 mb-3 text-right">
                                                    <div class="form-group">
                                                        <input type="hidden" id="dataBilling" name="billing">
                                                        <button id="guardar" type="button" class="btn btn-primary">Guardar Factura</button>
                                                    </div>
                                                </div>
                                                <!--col-->
                                            </form>
                                        </div>
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
@endsection
@section('scripts')
    <script>
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
    </script>
@endsection
