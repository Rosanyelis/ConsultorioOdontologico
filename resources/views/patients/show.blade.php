@extends('layouts.app')

@section('content')

                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Paciente - {{ $data->firstname }} {{ $data->lastname }}</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    <a href="{{ route('patient.index') }}" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-arrow-left"></em></a>
                                                    <a href="{{ route('patient.index') }}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Regresar</span></a>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block nk-block-lg">
                                    <div class="card">
                                        <div class="card-aside-wrap">
                                            <div class="card-content">
                                                <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="info-personal-tab"
                                                            data-toggle="tab" href="#info-personal">
                                                            <em class="icon ni ni-user-circle-fill"></em>
                                                            <span>Información Personal</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item @if (session('activeTab') == 'historias') active @endif">
                                                        <a class="nav-link" data-toggle="tab" href="#historias"
                                                            id="historias-tab">
                                                            <em class="icon ni ni-property"></em>
                                                            <span>Historias</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item @if (session('activeTab') == 'registros') active @endif">
                                                        <a class="nav-link" data-toggle="tab" href="#registros"
                                                            id="registros-tab">
                                                            <em class="icon ni ni-img-fill"></em>
                                                            <span>Registros Dentales</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item @if (session('activeTab') == 'recetas') active @endif">
                                                        <a class="nav-link" data-toggle="tab" href="#recetas"
                                                            id="recetas-tab">
                                                            <em class="icon ni ni-capsule-fill"></em>
                                                            <span>Recetas</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item @if (session('activeTab') == 'pagos') active @endif">
                                                        <a class="nav-link" data-toggle="tab" href="#pagos"
                                                            id="pagos-tab">
                                                            <em class="icon ni ni-wallet-in"></em>
                                                            <span>Pagos</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <div class="card-inner">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active " id="info-personal">
                                                            @include('patients.partials.information-patient')
                                                        </div><!-- tab pane -->
                                                        <div class="tab-pane @if (session('activeTab') == 'historias') active @endif" id="historias">
                                                            @include('histories.index')
                                                        </div>
                                                        <!--tab pane-->
                                                        <div class="tab-pane @if (session('activeTab') == 'registros') active @endif" id="registros">
                                                            @include('dental_records.index')
                                                        </div>
                                                        <!--tab pane-->
                                                        <div class="tab-pane @if (session('activeTab') == 'recetas') active @endif" id="recetas">
                                                            @include('patients.partials.recipes')
                                                        </div>
                                                        <!--tab pane-->
                                                        <div class="tab-pane @if (session('activeTab') == 'pagos') active @endif" id="pagos">
                                                            @include('patients.partials.payments')
                                                        </div>
                                                        <!--tab pane-->
                                                    </div>
                                                    <!--tab content-->
                                                </div>
                                                <!--card inner-->
                                            </div><!-- .card-content -->

                                        </div><!-- .card-aside-wrap -->
                                    </div>
                                    <!--card-->
                                </div>
                            </div>
                        </div>
                        @include('patients.partials.modal-add-note')
                        @include('patients.partials.modal-add-file')
                        @include('patients.partials.modal-edit-patient')
                        @include('patients.partials.modal-record-dental')
@endsection
@section('scripts')
    <script src="{{ asset('pagejs/patients.js') }}"></script>
    <script>
        const informacion = document.getElementById("info-personal-tab");
        const historias = document.getElementById("historias");
        const registros = document.getElementById('registros');
        const recetas = document.getElementById("recetas");
        const pagos = document.getElementById('pagos');


    </script>
@endsection
