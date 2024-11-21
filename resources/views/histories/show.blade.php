@extends('layouts.app')

@section('content')

<!-- start page title -->
<div class="nk-content-inner">
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Paciente - {{ $data->patient->firstname }}
                        {{ $data->patient->lastname }} - Historia - Nº.{{ $data->id }} -
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
                                    <div class="col-xxl-6 col-xl-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="reason_consultation">Motivo de
                                                tratamiento:</label>
                                            <p class="form-control-wrap">{{ $data->reason_consultation }}</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-xl-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="observations">Observaciones:</label>
                                            <p class="form-control-wrap">{{ $data->observations }}</p>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-xl-12 col-md-12">
                                        <h6 class="text-center mt-3">Tratamientos Aplicados</h6>
                                        <table class="table table-bordered ">
                                            <thead >

                                                <tr>
                                                    <td>Diente N°</td>
                                                    <td>Tratamiento</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data->dental_history_details as $item)
                                                <tr>
                                                    <td>{{ $item->teeths_id }}</td>
                                                    <td>{{ $item->treatment }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

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
