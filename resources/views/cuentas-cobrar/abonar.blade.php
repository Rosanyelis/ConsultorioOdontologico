@extends('layouts.app')

@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Cuenta por Cobrar de: {{ $data->cliente->firstname }} {{ $data->cliente->lastname }}</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    <a href="{{ route('cuenta-cobrar.index', $data->id) }}" class="btn btn-icon btn-secondary d-md-none"><em class="icon ni ni-arrow-left"></em></a>
                                                    <a href="{{ route('cuenta-cobrar.index', $data->id) }}" class="btn btn-secondary d-none d-md-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Regresar</span></a>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-inner-group">
                                            <form id="form" action="{{ route('cuenta-cobrar.store', $data->id) }}" method="POST">
                                                @csrf

                                                <div class="card-inner">
                                                    <div class="nk-block">
                                                        <div class="row gy-4 pb-4">
                                                            <div class="col-xxl-3 col-xl-3 col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="total">Monto Total</label>
                                                                    <div class="form-control-wrap">
                                                                        <span id="total">{{ $data->monto }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="total">N° de Expediente</label>
                                                                    <div class="form-control-wrap">
                                                                        {{ $data->expediente->numero_expendiente }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="number_installments">Tipo</label>
                                                                    <div class="form-control-wrap">
                                                                        {{ $data->tipo }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-xl-3 col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="total">Estatus</label>
                                                                    <div class="form-control-wrap">
                                                                       {{ $data->estado }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row gy-4 pb-4">
                                                            <div class="col-xxl-4 col-xl-4 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="monto">Monto a abonar</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="number" name="monto" class="form-control"
                                                                            id="totalinput" placeholder="Monto a abonar">
                                                                        @if ($errors->has('monto'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('monto') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-xl-4 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="total">Medio de Pago</label>
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select" name="metodo_pago" data-placeholder="Seleccionar">
                                                                            <option value="">Seleccionar</option>
                                                                            <option value="Efectivo">Efectivo</option>
                                                                            <option value="Transferencia">Transferencia</option>
                                                                            <option value="Punto de venta">Punto de venta</option>
                                                                        </select>
                                                                        @if ($errors->has('metodo_pago'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('metodo_pago') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-4 col-xl-4 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="numero_referencia">Número de Referencia</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="number" name="numero_referencia" class="form-control"
                                                                        id="numero_referencia" >
                                                                        @if ($errors->has('numero_referencia'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('numero_referencia') }}
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
                                                        <button id="guardar"  type="button" class="btn btn-primary">Guardar Abono</button>
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
        (function(NioApp, $){
            'use strict';

            $("#totalinput").on("change", function() {
                var total = $(this).val();
                var totalCuenta = $("#total").text();
                if (total > totalCuenta) {
                    Swal.fire({
                        title: 'Ooops!',
                        text: "El monto a pagar no puede ser mayor que el monto de la cuenta",
                        icon: 'error',
                    })
                }
            });

            $("#guardar").on("click", function() {
                var total = $("#totalinput").val();
                var totalCuenta = $("#total").text();
                if (total > totalCuenta) {
                    Swal.fire({
                        title: 'Ooops!',
                        text: "El monto a pagar no puede ser mayor que el monto de la cuenta",
                        icon: 'error',
                    });

                    return false;
                }

                $("#form").submit();
            });
        })(NioApp, jQuery);
    </script>
@endsection
