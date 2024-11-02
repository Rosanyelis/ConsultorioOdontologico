@extends('layouts.app')
@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Editar Cliente</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    <a href="{{ route('cliente.index') }}" class="btn btn-icon btn-secondary d-md-none"><em class="icon ni ni-arrow-left"></em></a>
                                                    <a href="{{ route('cliente.index') }}" class="btn btn-secondary d-none d-md-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Regresar</span></a>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="card card-preview">
                                    <div class="card-inner">
                                        <form class="row gy-2 form-validate" action="{{ route('cliente.update', $data->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Primer Nombre</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="firstname" class="form-control"
                                                            id="firstname" placeholder="Ejm: Jane Doe" value="{{ $data->firstname }}">
                                                        @if ($errors->has('firstname'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('firstname') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Segundo Nombre</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="second_name" class="form-control"
                                                            id="second_name" placeholder="Ejm: Jane Doe" value="{{ $data->second_name }}">
                                                        @if ($errors->has('second_name'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('second_name') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="lastname">Primer Apellido</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="lastname" class="form-control"
                                                            id="lastname" placeholder="Ejm: Jane Doe" value="{{ $data->lastname }}">
                                                        @if ($errors->has('lastname'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('lastname') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="second_surname">Segundo Apellido</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="second_surname" class="form-control"
                                                            id="second_surname" placeholder="Ejm: Jane Doe" value="{{ $data->second_surname }}">
                                                        @if ($errors->has('second_surname'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('second_surname') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="birthdate">Fecha de Nacimiento</label>
                                                    <div class="form-control-wrap">
                                                        <input type="date" name="birthdate" class="form-control"
                                                            id="birthdate" placeholder="Ejm: Jane Doe" value="{{ $data->birthdate }}">
                                                        @if ($errors->has('birthdate'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('birthdate') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="correo">Correo</label>
                                                    <div class="form-control-wrap">
                                                        <input type="email" name="email" class="form-control"
                                                            id="correo" placeholder="Ejm: janedoe@example.com"
                                                            value="{{ $data->email }}">

                                                        @if ($errors->has('email'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('email') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="phone">Teléfono</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="phone" class="form-control"
                                                            id="phone" placeholder="Ejm: Jane Doe" value="{{ $data->phone }}">
                                                        @if ($errors->has('phone'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('phone') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="calle_circuito">Calle Circuito Bvl o Ave</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="calle_circuito" class="form-control"
                                                            id="calle_circuito" placeholder="Ejm: Jane Doe" value="{{ $data->calle_circuito }}">
                                                        @if ($errors->has('calle_circuito'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('calle_circuito') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-2">
                                                <div class="form-group">
                                                    <label class="form-label" for="numero">Numero</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="numero" class="form-control"
                                                            id="numero" placeholder="Ejm: Jane Doe" value="{{ $data->numero }}">
                                                        @if ($errors->has('numero'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('numero') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-2">
                                                <div class="form-group">
                                                    <label class="form-label" for="interior_letra">Interior letra</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="interior_letra" class="form-control"
                                                            id="interior_letra" placeholder="Ejm: Jane Doe" value="{{ $data->interior_letra }}">
                                                        @if ($errors->has('interior_letra'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('interior_letra') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-2">
                                                <div class="form-group">
                                                    <label class="form-label" for="interior_numero">Interior numero</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="interior_numero" class="form-control"
                                                            id="interior_numero" placeholder="Ejm: Jane Doe" value="{{ $data->interior_numero }}">
                                                        @if ($errors->has('interior_numero'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('interior_numero') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="colonia">Colonia o fraccionamiento</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="colonia" class="form-control"
                                                            id="colonia" placeholder="Ejm: Jane Doe" value="{{ $data->colonia }}">
                                                        @if ($errors->has('colonia'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('colonia') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-2">
                                                <div class="form-group">
                                                    <label class="form-label" for="codigo_postal">Codigo Postal</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="codigo_postal" class="form-control"
                                                            id="codigo_postal" placeholder="Ejm: Jane Doe" value="{{ $data->codigo_postal }}">
                                                        @if ($errors->has('codigo_postal'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('codigo_postal') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Medio de Contacto</label>
                                                    <div class="form-control-wrap">
                                                        <select class="form-select form-control form-control-lg" data-search="on"
                                                            name="medio_contactos_id">
                                                            <option value="">Seleccione una Medio de Contacto</option>
                                                            @foreach ($medios as $item)
                                                            <option value="{{ $item->id }}" @if ($data->medio_contactos_id == $item->id) selected @endif >{{ $item->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if ($errors->has('medio_contactos_id'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('medio_contactos_id') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group float-right">
                                                    <button type="submit" class="btn btn-primary">Actualizar Cliente</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>
                        </div>
                        <!-- end page title -->
@endsection
