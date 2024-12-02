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
                                                <div class="col-xxl-3 col-lg-3 col-md-3">
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
                                                <div class="col-xxl-3 col-lg-3 col-md-3">
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

                                                <div class="col-xxl-3 col-lg-3 col-md-3">
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
                                                <div class="col-xxl-3 col-lg-3 col-md-3">
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
                                                <div class="col-xxl-3 col-lg-3 col-md-3">
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
                                                <div class="col-xxl-3 col-lg-3 col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="phone-no">Correo(Opcional)</label>
                                                        <div class="form-control-wrap">
                                                            <input type="email" name="email" class="form-control" id="phone-no"
                                                                placeholder="Ejm: jondoe@example-com" value="{{ old('email') }}">
                                                            @if ($errors->has('email'))
                                                                <span class="invalid text-danger">
                                                                    {{ $errors->first('email') }}
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-lg-3 col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="valid_end">Valido Hasta</label>
                                                        <div class="form-control-wrap">
                                                            <input type="date" class="form-control" id="valid_end"
                                                            name="valid_end">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xxl-3 col-lg-3 col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="observations">Observaciones</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="observations" name="observations">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card card-preview mb-3">
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
                                                        <label class="form-label" for="qty">Cant. de Dientes</label>
                                                        <div class="form-control-wrap">
                                                            <input type="number" class="form-control" id="qty"  placeholder="Ejm: 10">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="price">Costo Unit.</label>
                                                        <div class="form-control-wrap">
                                                            <input type="number" class="form-control" id="price"  placeholder="Ejm: 10">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
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
