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
                                                        <a class="nav-link active" data-toggle="tab" href="#tabItem1">
                                                            <em class="icon ni ni-user-circle-fill"></em>
                                                            <span>Información Personal</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabItem2">
                                                            <em class="icon ni ni-property"></em>
                                                            <span>Historias</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabItem3">
                                                            <em class="icon ni ni-capsule-fill"></em>
                                                            <span>Recetas</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabItem4">
                                                            <em class="icon ni ni-wallet-in"></em>
                                                            <span>Pagos</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <div class="card-inner">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tabItem1">
                                                            @include('patients.partials.information-patient')
                                                        </div><!-- tab pane -->
                                                        <div class="tab-pane" id="tabItem2">
                                                            @include('patients.partials.history')
                                                        </div>
                                                        <!--tab pane-->
                                                        <div class="tab-pane" id="tabItem3">
                                                            @include('patients.partials.recipes')
                                                        </div>
                                                        <!--tab pane-->
                                                        <div class="tab-pane" id="tabItem4">
                                                            @include('patients.partials.payments')
                                                        </div>
                                                        <!--tab pane-->
                                                    </div>
                                                    <!--tab content-->
                                                </div>
                                                <!--card inner-->
                                            </div><!-- .card-content -->
                                            <div class="card-aside card-aside-right user-aside toggle-slide toggle-slide-right toggle-break-xxl" data-content="userAside" data-toggle-screen="xxl" data-toggle-overlay="true" data-toggle-body="true">
                                                <div class="card-inner-group" data-simplebar>
                                                    <div class="card-inner">
                                                        <div class="user-card user-card-s2">
                                                            <div class="user-avatar lg bg-primary">
                                                                <span>AB</span>
                                                            </div>
                                                            <div class="user-info">
                                                                <div class="badge badge-outline-light badge-pill ucap">Patinet</div>
                                                                <h5>Abu Bin Ishtiyak</h5>
                                                                <span class="sub-text">info@softnio.com</span>
                                                            </div>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner card-inner-sm">
                                                        <ul class="btn-toolbar justify-center gx-1">
                                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-shield-off"></em></a></li>
                                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-mail"></em></a></li>
                                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-download-cloud"></em></a></li>
                                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-bookmark"></em></a></li>
                                                        </ul>
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner">
                                                        <div class="row text-center">
                                                            <div class="col-4">
                                                                <div class="profile-stats">
                                                                    <span class="amount">$2123</span>
                                                                    <span class="sub-text">Total Bill</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="profile-stats">
                                                                    <span class="amount">$200</span>
                                                                    <span class="sub-text">Paid</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="profile-stats">
                                                                    <span class="amount">$1923</span>
                                                                    <span class="sub-text">Due</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner">
                                                        <h6 class="overline-title-alt mb-2">Additional</h6>
                                                        <div class="row g-3">
                                                            <div class="col-6">
                                                                <span class="sub-text">Patient ID:</span>
                                                                <span>#P7085</span>
                                                            </div>
                                                            <div class="col-6">
                                                                <span class="sub-text">Admit Date</span>
                                                                <span>15 Feb, 2019 01:02 PM</span>
                                                            </div>
                                                            <div class="col-6">
                                                                <span class="sub-text">Condition</span>
                                                                <span class="lead-text text-success">Normal</span>
                                                            </div>
                                                            <div class="col-6">
                                                                <span class="sub-text">Discharged Date</span>
                                                                <span>16 Feb, 2019</span>
                                                            </div>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner">
                                                        <h6 class="overline-title-alt mb-3">Groups</h6>
                                                        <ul class="g-1">
                                                            <li class="btn-group">
                                                                <a class="btn btn-xs btn-light btn-dim" href="#">surgery</a>
                                                                <a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
                                                            </li>
                                                            <li class="btn-group">
                                                                <a class="btn btn-xs btn-light btn-dim" href="#">cardiology</a>
                                                                <a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
                                                            </li>
                                                            <li class="btn-group">
                                                                <a class="btn btn-xs btn-light btn-dim" href="#">another tag</a>
                                                                <a class="btn btn-xs btn-icon btn-light btn-dim" href="#"><em class="icon ni ni-cross"></em></a>
                                                            </li>
                                                        </ul>
                                                    </div><!-- .card-inner -->
                                                </div><!-- .card-inner -->
                                            </div><!-- .card-aside -->
                                        </div><!-- .card-aside-wrap -->
                                    </div>
                                    <!--card-->
                                </div>
                            </div>
                        </div>

@endsection
@section('scripts')
    <script>
        var url1 = "{{ route('patient.showteethIntraoralAjax', $data->id) }}";
        var url2 = "{{ route('patient.showTreatmentPlanAjax', $data->id) }}";
        var url_base = "{{ asset('') }}";
        const url_obturacion = url_base + 'images/diente/obturacion.png';
        const url_endodoncia = url_base + 'images/diente/endodoncia.png';
        const url_exodoncia = url_base + 'images/diente/exodoncia.png';
        const url_protesis_corona = url_base + 'images/diente/protesis_corona.png';

        $.get(url1, function(data, status){
            $.each(data, function(index, value){
                // console.log(index,value);
                let IDteeth = '#teeth'+value['teeths_id'];
                let url_img;
                if (value['treatment'] == 'Obturación'){
                    url_img = url_obturacion;
                    $(IDteeth).prop('src', url_img);
                }
                if (value['treatment'] == 'Exodoncia'){
                    url_img = url_exodoncia;
                    $(IDteeth).prop('src', url_img);
                }
                if (value['treatment'] == 'Endodoncia'){
                    url_img = url_endodoncia;
                    $(IDteeth).prop('src', url_img);
                }
                if (value['treatment'] == 'Protesis/Corona'){
                    url_img = url_protesis_corona;
                    $(IDteeth).prop('src', url_img);
                }
            })
        });

        $.get(url2, function(data, status){
            $.each(data, function(index, value){
                // console.log(index,value);
                let IDteeth = '#teeth_'+value['teeths_id'];
                let url_img;
                if (value['treatment'] == 'Obturación'){
                    url_img = url_obturacion;
                    $(IDteeth).prop('src', url_img);
                }
                if (value['treatment'] == 'Exodoncia'){
                    url_img = url_exodoncia;
                    $(IDteeth).prop('src', url_img);
                }
                if (value['treatment'] == 'Endodoncia'){
                    url_img = url_endodoncia;
                    $(IDteeth).prop('src', url_img);
                }
                if (value['treatment'] == 'Protesis/Corona'){
                    url_img = url_protesis_corona;
                    $(IDteeth).prop('src', url_img);
                }
            })
        });

    </script>
@endsection
