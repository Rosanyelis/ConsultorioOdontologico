@extends('layouts.app')

@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Agregar Paciente</h3>
                                            <div class="nk-block-des text-soft">
                                                <p class="text-dark" >Ingrese la DNI del paciente, para obtener su información personal del SUNAT</p>
                                            </div>
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
                                                            <div class="col-xxl-3 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="dni">DNI </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" name="dni" class="form-control"
                                                                            id="dni" placeholder="Ejm: 46027897" value="{{ old('dni') }}">
                                                                        @if ($errors->has('dni'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('dni') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-3 col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="firstname">Nombres</label>
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
                                                                    <label class="form-label">Fecha de Nacimiento</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="date" name="birthdate" id="dateBirthday" class="form-control"
                                                                             value="{{ old('birthdate') }}">
                                                                        @if ($errors->has('birthdate'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('birthdate') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--col-->
                                                            <div class="col-xxl-1 col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="age">Edad</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="number" id="age" name="age" class="form-control" id="age" value="{{ old('age') }}" readonly >
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
                                                                                        <td>¿Tiene problemas cardiácos?<br>
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
                                                                                        <td>¿Usa Hilo dental?<br>
                                                                                            @if ($errors->has('dental_floss'))
                                                                                                <span class="invalid text-danger ff-italic">
                                                                                                    <small>{{ $errors->first('dental_floss') }}</small>
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio27" name="dental_floss"
                                                                                                    class="custom-control-input" value="Si">
                                                                                                <label class="custom-control-label" for="customRadio27">Si</label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio28" name="dental_floss"
                                                                                                    class="custom-control-input" value="No">
                                                                                                <label class="custom-control-label" for="customRadio28">No</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>¿Dolor en los dientes?<br>
                                                                                            @if ($errors->has('tooth_pain'))
                                                                                                <span class="invalid text-danger ff-italic">
                                                                                                    <small>{{ $errors->first('tooth_pain') }}</small>
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio29" name="tooth_pain"
                                                                                                    class="custom-control-input" value="Si">
                                                                                                <label class="custom-control-label" for="customRadio29">Si</label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio30" name="tooth_pain"
                                                                                                    class="custom-control-input" value="No">
                                                                                                <label class="custom-control-label" for="customRadio30">No</label>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>¿Mal olor o sabor?<br>
                                                                                            @if ($errors->has('bad_smell_taste'))
                                                                                                <span class="invalid text-danger ff-italic">
                                                                                                    <small>{{ $errors->first('bad_smell_taste') }}</small>
                                                                                                </span>
                                                                                            @endif
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio31" name="bad_smell_taste"
                                                                                                    class="custom-control-input" value="Si">
                                                                                                <label class="custom-control-label" for="customRadio31">Si</label>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td>
                                                                                            <div class="custom-control custom-radio">
                                                                                                <input type="radio" id="customRadio32" name="bad_smell_taste"
                                                                                                    class="custom-control-input" value="No">
                                                                                                <label class="custom-control-label" for="customRadio32">No</label>
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
        <script src="{{ asset('pagejs/patients.js') }}"></script>
@endsection
