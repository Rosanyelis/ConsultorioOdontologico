@extends('layouts.app')

@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Factura de: {{ $data->patient->firstname }} {{ $data->patient->lastname }}</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    <a href="{{ route('patient.show', $data->patient->id) }}" class="btn btn-icon btn-secondary d-md-none"><em class="icon ni ni-arrow-left"></em></a>
                                                    <a href="{{ route('patient.show', $data->patient->id) }}" class="btn btn-secondary d-none d-md-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Regresar</span></a>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-inner-group">
                                            <form id="form" action="{{ route('patient.store-pay-invoice', ['id' => $data->patient->id, 'pay_id' => $data->id]) }}" method="POST">
                                                @csrf

                                                <div class="card-inner">
                                                    <div class="nk-block">
                                                        <div class="row gy-4 pb-4">
                                                            <div class="col-xxl-3 col-xl-3 col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="total">Monto Total De factura</label>
                                                                    <div class="form-control-wrap">
                                                                        {{ $data->total }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="total">Forma de Pago</label>
                                                                    <div class="form-control-wrap">
                                                                        {{ $data->payment_type }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="number_installments">Número de cuotas</label>
                                                                    <div class="form-control-wrap">
                                                                        {{ $data->number_installments }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="total">Estatus</label>
                                                                    <div class="form-control-wrap">
                                                                       {{ $data->status }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-responsive mt-3 mb-3">
                                                            <table id="servicio" class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Descripción de Tratamiento</th>
                                                                        <th>Costo</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($data->invoice_details as $item)
                                                                    <tr>
                                                                        <td>{{ $item->treatment }}</td>
                                                                        <td>{{ $item->price }}</td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>

                                                            </table>
                                                        </div>

                                                        <div class="row gy-4 pb-4">
                                                            <div class="col-xxl-4 col-xl-4 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="pay_amount">Monto a abonar</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="number" name="pay_amount" class="form-control"
                                                                            id="totalinput" placeholder="Monto a abonar">
                                                                        @if ($errors->has('pay_amount'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('pay_amount') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-xl-4 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="total">Medio de Pago</label>
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select" name="pay_method" data-placeholder="Seleccionar">
                                                                            <option value="">Seleccionar</option>
                                                                            <option value="Efectivo">Efectivo</option>
                                                                            <option value="Transferencia">Transferencia</option>
                                                                            <option value="Punto de venta">Punto de venta</option>
                                                                        </select>
                                                                        @if ($errors->has('pay_method'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('pay_method') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-xl-4 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="pay_number_reference">Número de Referencia</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="number" name="pay_number_reference" class="form-control"
                                                                        id="pay_number_reference" >
                                                                        @if ($errors->has('pay_number_reference'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('pay_number_reference') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-12 mt-3 mb-3 text-right">
                                                    <div class="form-group">
                                                        <button id="guardar" type="button" class="btn btn-primary">Guardar Abono</button>
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
