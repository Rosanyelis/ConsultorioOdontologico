@extends('layouts.app')

@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Agregar Paciente</h3>
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
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-inner-group">
                                            <form action="{{ route('patient.store') }}" method="POST">
                                                @csrf
                                                <div class="card-inner">
                                                    <div class="nk-block">
                                                        <div class="row gy-4">
                                                            @if (Auth::user()->rol->name == 'Secretaria' || Auth::user()->rol->name == 'Desarrollador')
                                                            <div class="col-xxl-3 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="event-title">Doctor </label>
                                                                    <div class="form-control-wrap">
                                                                        <select id="doctor_id" name="doctor_id" class="form-select" data-search="on">
                                                                            <option value="Seleccione">Seleccione..</option>
                                                                            @foreach ($doctors as $item)
                                                                            <option value="{{ $item->id }}">{{ $item->firstname }} {{ $item->lastname }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endif
                                                            <div class="col-xxl-3 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="firstname">Primer Nombre</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="firstname" class="form-control"
                                                                            id="firstname" placeholder="Ejm: Jon" value="{{ old('firstname') }}">
                                                                        @if ($errors->has('firstname'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('firstname') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="second_name">Segundo Nombre</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="second_name" class="form-control"
                                                                            id="second_name" placeholder="Ejm: Allen" value="{{ old('second_name') }}">
                                                                        @if ($errors->has('second_name'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('second_name') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="lastname">Primer Apellido</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="lastname" class="form-control"
                                                                            id="lastname" placeholder="Ejm: Walker" value="{{ old('lastname') }}">
                                                                        @if ($errors->has('lastname'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('lastname') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="second_surname">Segundo Apellido</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="second_surname" class="form-control"
                                                                            id="second_surname" placeholder="Ejm: Terrier" value="{{ old('second_surname') }}">
                                                                        @if ($errors->has('second_surname'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('second_surname') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--col-->
                                                            <div class="col-xxl-3 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="phone-no">Teléfono</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="number" name="phone" class="form-control" id="phone-no"
                                                                            placeholder="Ejm: 123456789" value="{{ old('phone') }}">
                                                                        @if ($errors->has('phone'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('phone') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--col-->
                                                            <div class="col-xxl-3 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="whatsapp">Whatsapp</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="number" name="whatsapp" class="form-control" id="whatsapp"
                                                                            placeholder="Ejm: +56123456789" value="{{ old('whatsapp') }}">
                                                                        @if ($errors->has('whatsapp'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('whatsapp') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--col-->
                                                            <div class="col-xxl-3 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Fecha de Nacimiento</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-right">
                                                                            <em class="icon ni ni-calendar"></em>
                                                                        </div>
                                                                        <input type="text" name="birthdate" id="dateBirthday" class="form-control date-picker"
                                                                            data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" value="{{ old('birthdate') }}">
                                                                        @if ($errors->has('birthdate'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('birthdate') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--col-->
                                                            <div class="col-xxl-1 col-md-1">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="age">Edad</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="number" id="age" name="age" class="form-control" id="age" readonly >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--col-->
                                                            <div class="col-xxl-3 col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label">Sexo</label>
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select" name="sex" data-placeholder="Seleccionar">
                                                                            <option value="">Seleccionar</option>
                                                                            <option value="M" @if (old('sex') == 'M') selected @endif>Masculino</option>
                                                                            <option value="F" @if (old('sex') == 'F') selected @endif>Femenino</option>
                                                                            <option value="O" @if (old('sex') == 'O') selected @endif>Otro</option>
                                                                        </select>
                                                                        @if ($errors->has('sex'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('sex') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--col-->
                                                            <div class="col-xxl-3 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Estado Civil</label>
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select" name="civil_status" data-placeholder="Seleccionar">
                                                                            <option value="">Seleccionar</option>
                                                                            <option value="Soltero" @if (old('civil_status') == 'Soltero') selected @endif>Soltero(a)</option>
                                                                            <option value="Casado" @if (old('civil_status') == 'Casado') selected @endif>Casado(a)</option>
                                                                            <option value="Viudo" @if (old('civil_status') == 'Viudo') selected @endif>Viudo(a)</option>
                                                                            <option value="Divorciado" @if (old('civil_status') == 'Divorciado') selected @endif>Divorciado(a)</option>
                                                                        </select>
                                                                        @if ($errors->has('civil_status'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('civil_status') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--col-->
                                                            <div class="col-xxl-5 col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Ocupación</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="occupation" class="form-control" id="Ocupacion"
                                                                        placeholder="Ejm: Ingeniero Petroléro" value="{{ old('occupation') }}">
                                                                        @if ($errors->has('occupation'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('occupation') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--col-->
                                                            <div class="col-xxl-3 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Fecha de la última visita con algún dentista</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-icon form-icon-right">
                                                                            <em class="icon ni ni-calendar"></em>
                                                                        </div>
                                                                        <input type="text" name="last_visit_date" id="last_visit_date" class="form-control date-picker"
                                                                            data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" value="{{ old('last_visit_date') }}">
                                                                        @if ($errors->has('last_visit_date'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('last_visit_date') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--row-->
                                                    </div>
                                                </div><!-- .card-inner -->

                                                <div class="card-inner">
                                                    <div id="accordion-1" class="accordion accordion-s2">
                                                        <div class="accordion-item">
                                                            <a href="#" class="accordion-head" data-toggle="collapse" data-target="#accordion-item-1-1">
                                                                <h5 class="title nk-block-title">Salud Actual del Paciente</h5>
                                                                <span class="accordion-icon"></span>
                                                            </a>
                                                            <div class="accordion-body collapse " id="accordion-item-1-1" data-parent="#accordion-1">
                                                                <div class="accordion-inner">
                                                                    <div class="nk-block">
                                                                        <div class="row gy-4">
                                                                            <div class="col-xxl-12 col-md-12">
                                                                                <table class="table">
                                                                                    <tr>
                                                                                        <td>¿Posee alguna enfermedad? <br>
                                                                                        @if ($errors->has('has_disease'))
                                                                                            <span class="invalid text-danger ff-italic">
                                                                                                <small>{{ $errors->first('has_disease') }}</small>
                                                                                            </span>
                                                                                        @endif
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio1" name="has_disease"
                                                                                                    class="custom-control-input" value="Si">
                                                                                                <label class="custom-control-label" for="customRadio1">Si</label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio2" name="has_disease"
                                                                                                    class="custom-control-input" value="No">
                                                                                                <label class="custom-control-label" for="customRadio2">No</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td colspan="3">
                                                                                            <div class="form-control-wrap">
                                                                                                <textarea name="disease" class="form-control"
                                                                                                    id="disease" placeholder="Específique las enfermedades si posee."></textarea>
                                                                                                @if ($errors->has('disease'))
                                                                                                    <span class="invalid text-danger ff-italic">
                                                                                                        <small>{{ $errors->first('disease') }}</small>
                                                                                                    </span>
                                                                                                @endif
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>¿Está bajo tratamiento médico?<br>
                                                                                        @if ($errors->has('medical_treatment'))
                                                                                            <span class="invalid text-danger ff-italic">
                                                                                                <small>{{ $errors->first('medical_treatment') }}</small>
                                                                                            </span>
                                                                                        @endif
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio3" name="medical_treatment"
                                                                                                    class="custom-control-input" value="Si">
                                                                                                <label class="custom-control-label" for="customRadio3">Si</label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio4" name="medical_treatment"
                                                                                                    class="custom-control-input" value="No">
                                                                                                <label class="custom-control-label" for="customRadio4">No</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td colspan="3">
                                                                                            <div class="form-control-wrap">
                                                                                                <textarea name="treatment_text" class="form-control"
                                                                                                    id="treatment_text" placeholder="Específique en que tipo de tratamiento médico está."></textarea>
                                                                                                @if ($errors->has('treatment_text'))
                                                                                                    <span class="invalid text-danger">
                                                                                                        <small>{{ $errors->first('treatment_text') }}</small>
                                                                                                    </span>
                                                                                                @endif
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>¿Posee alérgias?<br>
                                                                                            @if ($errors->has('allergies'))
                                                                                                <span class="invalid text-danger ff-italic">
                                                                                                    <small>{{ $errors->first('allergies') }}</small>
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio5" name="allergies"
                                                                                                    class="custom-control-input" value="Si">
                                                                                                <label class="custom-control-label" for="customRadio5">Si</label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio6" name="allergies"
                                                                                                    class="custom-control-input" value="No">
                                                                                                <label class="custom-control-label" for="customRadio6">No</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>¿Tiene epilepsia?<br>
                                                                                            @if ($errors->has('epilepsy'))
                                                                                                <span class="invalid text-danger ff-italic">
                                                                                                    <small>{{ $errors->first('epilepsy') }}</small>
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio7" name="epilepsy"
                                                                                                    class="custom-control-input" value="Si">
                                                                                                <label class="custom-control-label" for="customRadio7">Si</label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio8" name="epilepsy"
                                                                                                    class="custom-control-input" value="No">
                                                                                                <label class="custom-control-label" for="customRadio8">No</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>¿Tiene anemia?<br>
                                                                                            @if ($errors->has('anemia'))
                                                                                                <span class="invalid text-danger ff-italic">
                                                                                                    <small>{{ $errors->first('anemia') }}</small>
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio9" name="anemia"
                                                                                                    class="custom-control-input" value="Si">
                                                                                                <label class="custom-control-label" for="customRadio9">Si</label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio10" name="anemia"
                                                                                                    class="custom-control-input" value="No">
                                                                                                <label class="custom-control-label" for="customRadio10">No</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>¿Tiene hepatitis?<br>
                                                                                            @if ($errors->has('hepatitis'))
                                                                                                <span class="invalid text-danger ff-italic">
                                                                                                    <small>{{ $errors->first('hepatitis') }}</small>
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio11" name="hepatitis"
                                                                                                    class="custom-control-input" value="Si">
                                                                                                <label class="custom-control-label" for="customRadio11">Si</label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio12" name="hepatitis"
                                                                                                    class="custom-control-input" value="No">
                                                                                                <label class="custom-control-label" for="customRadio12">No</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>¿Tiene hipertension?<br>
                                                                                            @if ($errors->has('hypertension'))
                                                                                                <span class="invalid text-danger ff-italic">
                                                                                                    <small>{{ $errors->first('hypertension') }}</small>
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio13" name="hypertension"
                                                                                                    class="custom-control-input" value="Si">
                                                                                                <label class="custom-control-label" for="customRadio13">Si</label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio14" name="hypertension"
                                                                                                    class="custom-control-input" value="No">
                                                                                                <label class="custom-control-label" for="customRadio14">No</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>¿Tiene VIH?<br>
                                                                                            @if ($errors->has('vih'))
                                                                                                <span class="invalid text-danger ff-italic">
                                                                                                    <small>{{ $errors->first('vih') }}</small>
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio15" name="vih"
                                                                                                    class="custom-control-input" value="Si">
                                                                                                <label class="custom-control-label" for="customRadio15">Si</label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio16" name="vih"
                                                                                                    class="custom-control-input" value="No">
                                                                                                <label class="custom-control-label" for="customRadio16">No</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>¿Tiene hipotension?<br>
                                                                                            @if ($errors->has('hypotension'))
                                                                                                <span class="invalid text-danger ff-italic">
                                                                                                    <small>{{ $errors->first('hypotension') }}</small>
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio17" name="hypotension"
                                                                                                    class="custom-control-input" value="Si">
                                                                                                <label class="custom-control-label" for="customRadio17">Si</label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio18" name="hypotension"
                                                                                                    class="custom-control-input" value="No">
                                                                                                <label class="custom-control-label" for="customRadio18">No</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>¿Tiene tuberculósis?<br>
                                                                                            @if ($errors->has('tuberculosis'))
                                                                                                <span class="invalid text-danger ff-italic">
                                                                                                    <small>{{ $errors->first('tuberculosis') }}</small>
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio19" name="tuberculosis"
                                                                                                    class="custom-control-input" value="Si">
                                                                                                <label class="custom-control-label" for="customRadio19">Si</label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio20" name="tuberculosis"
                                                                                                    class="custom-control-input" value="No">
                                                                                                <label class="custom-control-label" for="customRadio20">No</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>¿Tiene cardiopatías?<br>
                                                                                            @if ($errors->has('heart_disease'))
                                                                                                <span class="invalid text-danger ff-italic">
                                                                                                    <small>{{ $errors->first('heart_disease') }}</small>
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio21" name="heart_disease"
                                                                                                    class="custom-control-input" value="Si">
                                                                                                <label class="custom-control-label" for="customRadio21">Si</label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio22" name="heart_disease"
                                                                                                    class="custom-control-input" value="No">
                                                                                                <label class="custom-control-label" for="customRadio22">No</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>¿Tiene diabetes?<br>
                                                                                            @if ($errors->has('have_diabetes'))
                                                                                                <span class="invalid text-danger ff-italic">
                                                                                                    <small>{{ $errors->first('have_diabetes') }}</small>
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio23" name="have_diabetes"
                                                                                                    class="custom-control-input" value="Si">
                                                                                                <label class="custom-control-label" for="customRadio23">Si</label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio24" name="have_diabetes"
                                                                                                    class="custom-control-input" value="No">
                                                                                                <label class="custom-control-label" for="customRadio24">No</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td colspan="3">
                                                                                            <div class="form-control-wrap">
                                                                                                <textarea name="type_diabete" class="form-control"
                                                                                                    id="type_diabete" placeholder="Indique el tipo de Diabetes."></textarea>
                                                                                                @if ($errors->has('type_diabete'))
                                                                                                    <span class="invalid text-danger ff-italic">
                                                                                                        <small>{{ $errors->first('type_diabete') }}</small>
                                                                                                    </span>
                                                                                                @endif
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>¿Está embarazada?<br>
                                                                                            @if ($errors->has('pregnant'))
                                                                                                <span class="invalid text-danger ff-italic">
                                                                                                    <small>{{ $errors->first('pregnant') }}</small>
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio25" name="pregnant"
                                                                                                    class="custom-control-input" value="Si">
                                                                                                <label class="custom-control-label" for="customRadio25">Si</label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio26" name="pregnant"
                                                                                                    class="custom-control-input" value="No">
                                                                                                <label class="custom-control-label" for="customRadio26">No</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>¿Consume drogas?<br>
                                                                                            @if ($errors->has('drugs'))
                                                                                                <span class="invalid text-danger ff-italic">
                                                                                                    <small>{{ $errors->first('drugs') }}</small>
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio27" name="drugs"
                                                                                                    class="custom-control-input" value="Si">
                                                                                                <label class="custom-control-label" for="customRadio27">Si</label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio28" name="drugs"
                                                                                                    class="custom-control-input" value="No">
                                                                                                <label class="custom-control-label" for="customRadio28">No</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>¿Consume alcohol?<br>
                                                                                            @if ($errors->has('alcohol'))
                                                                                                <span class="invalid text-danger ff-italic">
                                                                                                    <small>{{ $errors->first('alcohol') }}</small>
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio29" name="alcohol"
                                                                                                    class="custom-control-input" value="Si">
                                                                                                <label class="custom-control-label" for="customRadio29">Si</label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio30" name="alcohol"
                                                                                                    class="custom-control-input" value="No">
                                                                                                <label class="custom-control-label" for="customRadio30">No</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>¿Consume tabaco?<br>
                                                                                            @if ($errors->has('tobacco'))
                                                                                                <span class="invalid text-danger ff-italic">
                                                                                                    <small>{{ $errors->first('tobacco') }}</small>
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio31" name="tobacco"
                                                                                                    class="custom-control-input" value="Si">
                                                                                                <label class="custom-control-label" for="customRadio31">Si</label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio32" name="tobacco"
                                                                                                    class="custom-control-input" value="No">
                                                                                                <label class="custom-control-label" for="customRadio32">No</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>¿Tiene asma?<br>
                                                                                            @if ($errors->has('asthma'))
                                                                                                <span class="invalid text-danger ff-italic">
                                                                                                    <small>{{ $errors->first('asthma') }}</small>
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio33" name="asthma"
                                                                                                    class="custom-control-input" value="Si">
                                                                                                <label class="custom-control-label" for="customRadio33">Si</label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio34" name="asthma"
                                                                                                    class="custom-control-input" value="No">
                                                                                                <label class="custom-control-label" for="customRadio34">No</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td colspan="3">
                                                                                            <label class="form-label">Última crísis de asma</label>
                                                                                            <div class="form-control-wrap">
                                                                                                <textarea name="asthma_text" class="form-control"
                                                                                                    id="asthma_text" placeholder="Indique la última crísis de asma."></textarea>
                                                                                                @if ($errors->has('asthma_text'))
                                                                                                    <span class="invalid text-danger ff-italic">
                                                                                                        <small>{{ $errors->first('asthma_text') }}</small>
                                                                                                    </span>
                                                                                                @endif
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>¿Tiene ETS?<br>
                                                                                            @if ($errors->has('ets'))
                                                                                                <span class="invalid text-danger ff-italic">
                                                                                                    <small>{{ $errors->first('ets') }}</small>
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio35" name="ets"
                                                                                                    class="custom-control-input" value="Si">
                                                                                                <label class="custom-control-label" for="customRadio35">Si</label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio36" name="ets"
                                                                                                    class="custom-control-input" value="No">
                                                                                                <label class="custom-control-label" for="customRadio36">No</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td colspan="3">
                                                                                            <div class="form-control-wrap">
                                                                                                <textarea name="ets_text" class="form-control"
                                                                                                    id="ets_text" placeholder="Indíque las ETS, si posee."></textarea>
                                                                                                @if ($errors->has('ets_text'))
                                                                                                    <span class="invalid text-danger ff-italic">
                                                                                                        <small>{{ $errors->first('ets_text') }}</small>
                                                                                                    </span>
                                                                                                @endif
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td colspan="3">
                                                                                            <label class="form-label">Hábitos pernicioso</label>
                                                                                            <div class="form-control-wrap">
                                                                                                <textarea name="harmful_habits" class="form-control"
                                                                                                    id="harmful_habits" placeholder="Indique"></textarea>
                                                                                                @if ($errors->has('harmful_habits'))
                                                                                                    <span class="invalid text-danger ff-italic">
                                                                                                        <small>{{ $errors->first('harmful_habits') }}</small>
                                                                                                    </span>
                                                                                                @endif
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div><!-- .card-inner -->

                                                <div class="col-12 mt-3 mb-3 text-right">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">Agregar Pacientes</button>
                                                    </div>
                                                </div>
                                                <!--col-->
                                            </form>
                                        </div>
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                        <!-- end page title -->
@endsection
@section('scripts')
        <script>
            $(document).ready(function() {
                $('#dateBirthday').on('change', function(){
                    let dateBirthday = $('#dateBirthday').val();
                    // Extraer el año usando la función getFullYear()
                    let year = new Date(dateBirthday).getFullYear();
                    // Obtener la fecha actual
                    let fechaActual = new Date();
                    // Obtener el año actual
                    let anioActual = fechaActual.getFullYear();
                    // edad
                    let edad = anioActual - year;
                    // añadir edad en input
                    $('#age').val(edad);
                });
            });
        </script>
@endsection
