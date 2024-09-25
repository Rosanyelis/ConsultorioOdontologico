@extends('layouts.app')

@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Factura N° #0000{{ $data->id }}
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    <a href="{{ route('billing.index') }}" class="btn btn-icon btn-secondary d-md-none"><em class="icon ni ni-arrow-left"></em></a>
                                                    <a href="{{ route('billing.index') }}" class="btn btn-secondary d-none d-md-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Regresar</span></a>
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
                                                    <div class="row justify-content-between ">
                                                        <div class="col-xxl-4 col-xl-4 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="total">Paciente :</label> {{ $data->patient->firstname }} {{ $data->patient->second_name }} {{ $data->patient->lastname }} {{ $data->patient->second_surname }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-xl-4 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="total">N° de factura:</label> N° #0000{{ $data->id }}
                                                            </div>
                                                        </div>
                                                        <div class="w-100"></div>
                                                        <div class="col-xxl-4 col-xl-4 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="total">Teléfono:</label> {{ $data->patient->phone }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-xl-4 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="total">Fecha de Emisión:</label> {{ $data->created_at }}
                                                            </div>
                                                        </div>
                                                        <div class="w-100"></div>
                                                        <div class="col-xxl-4 col-xl-4 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="total">Doctor:</label> {{ $data->patient->doctor->firstname }} {{ $data->patient->doctor->lastname }}
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-4 col-xl-4 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="total">Estatus de factura:</label> {{ $data->status }}
                                                            </div>
                                                        </div>
                                                        <div class="w-100"></div>

                                                        <div class="table-responsive mt-3 mb-3">
                                                            <table id="servicio" class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th colspan="2" class="text-center text-uppercase">Detalles de Factura</th>
                                                                    </tr>
                                                                    <tr class=" text-uppercase">
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
                                                                <tfoot>
                                                                    <tr>
                                                                        <td class="text-right text-uppercase"><h5>Total</h5></td>
                                                                        <td><h5>{{ $data->total }}</h5></td>
                                                                    </tr>
                                                                </tfoot>
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
@section('scripts')
@endsection
