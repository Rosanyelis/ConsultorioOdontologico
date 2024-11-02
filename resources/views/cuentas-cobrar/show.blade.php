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
                                                        <div class="col-xxl-12 col-xl-12 col-md-12">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th colspan="5" class="text-center"><h4>Historial de Pagos</h4></th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th width="50px">#</th>
                                                                        <th>Fecha</th>
                                                                        <th>Monto</th>
                                                                        <th>Metodo de Pago</th>
                                                                        <th>Número de Referencia</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($data->pagos as $item)
                                                                    <tr>
                                                                        <td>{{ $item->id }}</td>
                                                                        <td>{{ $item->fecha }}</td>
                                                                        <td>{{ $item->monto }}</td>
                                                                        <td>{{ $item->metodo_pago }}</td>
                                                                        <td>{{ $item->numero_referencia }}</td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
@endsection

