@extends('layouts.app')

@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Recipe
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
                                                                <label class="form-label" for="total">Fecha de Emisión:</label> {{ $data->created_at }}
                                                            </div>
                                                        </div>
                                                        <div class="w-100"></div>
                                                        <div class="col-xxl-4 col-xl-4 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label" for="total">Doctor:</label> {{ $data->patient->doctor->firstname }} {{ $data->patient->doctor->lastname }}
                                                            </div>
                                                        </div>
                                                        <div class="w-100"></div>
                                                        <div class="col-xxl-12 col-xl-12 col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="total">Observación:</label> {{ $data->observations }}
                                                            </div>
                                                        </div>
                                                        <div class="w-100"></div>
                                                        <div class="table-responsive mt-3 mb-3">
                                                            <table id="servicio" class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th colspan="3" class="text-center text-uppercase">Recipe</th>
                                                                    </tr>
                                                                    <tr class=" text-uppercase">
                                                                        <th>Medicamento</th>
                                                                        <th>Dosificación</th>
                                                                        <th>Instrucciones de Toma</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($data->medication_prescription as $item)
                                                                    <tr>
                                                                        <td>{{ $item->medicine }}</td>
                                                                        <td>{{ $item->dose }}</td>
                                                                        <td>{{ $item->instructions }}</td>
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
@section('scripts')
@endsection
