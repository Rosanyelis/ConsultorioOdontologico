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
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <form id="formQuote" action="{{ route('quote.store') }}" method="POST">
                                    @csrf
                                    <input id="dataQuote" type="hidden" name="services" value="">
                                    <input id="dataTotal" type="hidden" name="total" value="">
                                    <div class="card card-preview">
                                        <div class="card-inner">
                                            <h6 class="card-title">Informacion del Paciente</h6>
                                            <div class="row gy-2 ">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="patient_id">Paciente</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select" id="patient_id" name="patient_id" data-placeholder="Seleccione" >
                                                                <option value="">Seleccione</option>
                                                                @foreach ($patients as $item)
                                                                <option value="{{ $item->id }}">{{ $item->dni }} - {{ $item->firstname }} {{ $item->lastname }} {{ $item->second_surname }} </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="valid_end">Valido Hasta</label>
                                                        <div class="form-control-wrap">
                                                            <input type="date" class="form-control" id="valid_end"
                                                            name="valid_end">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label class="form-label" for="observations">Observaciones</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="observations" id="observations" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-preview">
                                        <div class="card-inner">
                                            <h6 class="card-title">Servicios</h6>
                                            <div class="row gy-2 mt-5">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="type">Tipo de Tratamiento</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select" id="type" data-placeholder="Seleccione" data-search="on">
                                                                <option value="">Seleccione</option>
                                                                @foreach ($type as $item)
                                                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="qty">Cantidad de Dientes</label>
                                                        <div class="form-control-wrap">
                                                            <input type="number" class="form-control" id="qty"  placeholder="Ejm: 10">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="price">Costo Unitario del tratamiento</label>
                                                        <div class="form-control-wrap">
                                                            <input type="number" class="form-control" id="price"  placeholder="Ejm: 10">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <button id="add" type="button" class="btn btn-icon btn-info" style="margin-top: 1.90rem;">
                                                        <em class="icon ni ni-plus"></em>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="table-responsive mt-3">
                                                <table id="servicio" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th class="w-60">Descripción de Tratamiento</th>
                                                            <th class="w-25">Cantidad de Dientes</th>
                                                            <th class="w-25">Costo Unitario</th>
                                                            <th class="w-25">Subtotal</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody></tbody>
                                                    <tfoot class="fs-18px">
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td >Total</td>
                                                            <td>{{ $setting->symbol_plan }}<span id="total"></span></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>

                                            <div class="row gy-2 ">
                                                <div class="col-12">
                                                    <button id="btnQuote" type="button" class="btn btn-primary float-right">Guardar Presupuesto</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- .nk-block -->
                        </div>


@endsection
@section('scripts')
        <script src="{{ asset('pagejs/quotes.js') }}"></script>
@endsection
