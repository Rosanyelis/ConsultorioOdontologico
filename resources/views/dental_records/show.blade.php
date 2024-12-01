@extends('layouts.app')

@section('content')

<!-- start page title -->
<div class="nk-content-inner">
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Paciente - {{ $data->patient->firstname }}
                        {{ $data->patient->lastname }} - Registro Dental - Nº.{{ $data->id }} -
                        {{ \Carbon\Carbon::parse($data->created_at)->format('d/m/Y') }}
                    </h3>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <ul class="nk-block-tools g-3">
                        <li class="nk-block-tools-opt">
                            <a href="{{ route('patient.show', $data->patient->id) }}"
                                class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-arrow-left"></em></a>
                            <a href="{{ route('patient.show', $data->patient->id) }}"
                                class="btn btn-primary d-none d-md-inline-flex"><em
                                    class="icon ni ni-arrow-left"></em><span>Regresar</span></a>
                        </li>
                    </ul>
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div><!-- .nk-block-head -->
        <div class="nk-block nk-block-lg">
            <div class="card">
                <div class="card-aside-wrap">
                    <div class="card-content">
                        <div class="card-inner">
                            <div class="nk-block">
                                <div class="row gy-1 pb-4">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label class="form-label">Tipo de Registro Dental</label>
                                            <p class="form-control-wrap">{{ $data->type_image }}</p>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Observaciones</label>
                                            <p class="form-control-wrap">{{ $data->type_image }}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <img src="{{ asset($data->url_file) }}" width="80%" class="img-fluid " alt="{{ $data->type_image }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .card-content -->
                </div><!-- .card-aside-wrap -->
            </div>
            <!--card-->
        </div>
    </div>
</div>
@endsection
@section('scripts')

@endsection
