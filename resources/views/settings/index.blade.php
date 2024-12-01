@extends('layouts.app')

@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Configuraciones del Sistema</h3>
                                            <div class="nk-block-des text-soft">
                                                <p class="text-dark" >Nota: El numero de whatsapp o correo seran usados para recibir la información de sistema con soporte como recordatorio del plan</p>
                                            </div>


                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">

                                            </ul>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <form action="{{ route('settings.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <ul class="nav nav-tabs ">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#tabItem5">
                                                            <em class="icon ni ni-user"></em>
                                                            <span>Informacion del Sistema</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabItem6">
                                                            <em class="icon ni ni-lock-alt"></em>
                                                            <span>Información del Doctor</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabItem7">
                                                            <em class="icon ni ni-bell"></em>
                                                            <span>Información del Plan</span>
                                                        </a>
                                                    </li>

                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tabItem5">
                                                        <div class="row gy-4">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    @if ($data->url_logo)
                                                                    <label class="form-label" for="site-url">Logo del Sitio</label>
                                                                    <div class="form-control-wrap">
                                                                        <img src="{{ asset($data->url_logo) }}" alt="" width="50%">
                                                                    </div>
                                                                    @else
                                                                    <label class="form-label" for="site-url">Logo del Sitio</label>
                                                                    <div class="form-control-wrap">
                                                                        <img src="{{ asset('./images/textologo.png') }}" alt="" width="50%">
                                                                    </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="site-url">Logo del Sitio</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="custom-file">
                                                                            <input type="file" name="archivo" class="custom-file-input" id="customFile">
                                                                            <label class="custom-file-label" for="customFile">Buscar Archivo</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="w-100"></div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="site-name">Nombre del Sitio</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="site-name" name="name"
                                                                            value="{{ $data->name }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="site-name">Dirección</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="site-address" name="address"
                                                                            value="{{ $data->address }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="site-email">Correo</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="email" class="form-control"
                                                                            id="site-email" name="email"
                                                                            value="{{ $data->email }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="site-phone">Teléfono de Contacto de Consultorio</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="site-phone" name="phone"
                                                                            value="{{ $data->phone }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tabItem6">
                                                        <div class="row gy-4">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="site-name_doctor">Nombre de Doctor(a)</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="site-name_doctor" name="name_doctor"
                                                                            value="{{ $data->name_doctor }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="site-mcd">MCD</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="site-mcd" name="mcd"
                                                                            value="{{ $data->mcd }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="site-whatsapp">Whatsapp Personal</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="site-whatsapp" name="whatsapp"
                                                                            value="{{ $data->whatsapp }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="site-url">Firma de Doctor</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="custom-file">
                                                                            <input type="file" name="url_signature" class="custom-file-input" id="customFile">
                                                                            <label class="custom-file-label" for="customFile">Buscar Archivo</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="tab-pane" id="tabItem7">
                                                        <div class="row gy-4">
                                                        <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="site-type_plan">Plan</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control"
                                                                                id="site-type_plan" name="type_plan"
                                                                                value="{{ $data->type_plan }}" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="site-price_plan">Valor de Plan</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control"
                                                                                id="site-price_plan" name="price_plan"
                                                                                value="{{ $data->price_plan }}" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="site-currency_plan">Moneda</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control"
                                                                                id="site-currency_plan" name="currency_plan"
                                                                                value="{{ $data->currency_plan }}" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="site-symbol_plan">Simbolo</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control"
                                                                                id="site-symbol_plan" name="symbol_plan"
                                                                                value="{{ $data->symbol_plan }}" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="site-start_date">Fecha de Inicio</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="date" class="form-control"
                                                                                id="site-start_date" name="start_date"
                                                                                value="{{ $data->start_date }}" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="site-expiration_date">Fecha de Vencimiento</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="date" class="form-control"
                                                                                id="site-expiration_date" name="expiration_date"
                                                                                value="{{ $data->expiration_date }}" disabled>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-5 mb-3 text-right">
                                                        <div class="form-group ">
                                                            <button type="submit"
                                                                class="btn btn-lg btn-primary">Guardar</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                        <!-- end page title -->
@endsection
