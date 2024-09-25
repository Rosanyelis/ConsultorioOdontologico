                        <div class="modal fade" tabindex="-1" id="modalEditPatient">
                            <div class="modal-dialog modal-xl" role="document">
                                <form action="{{ route('patient.update', $data->id) }}" method="POST" class="modal-content"
                                    autocomplete="off" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                        <em class="icon ni ni-cross"></em>
                                    </a>
                                    <div class="modal-header">
                                        <h5 class="modal-title">Editar Paciente</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row gy-4">
                                        @if (Auth::user()->rol->name == 'Secretaria' || Auth::user()->rol->name == 'Desarrollador')
                                            <div class="col-xxl-3 col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="event-title">Doctor </label>
                                                    <div class="form-control-wrap">
                                                        <select id="doctor_id" name="doctor_id" class="form-select" data-search="on">
                                                            <option value="Seleccione">Seleccione..</option>
                                                            @foreach ($doctors as $item)
                                                            <option value="{{ $item->id }}" @if ($data->doctor_id == $item->id) selected @endif>{{ $item->firstname }} {{ $item->lastname }}</option>
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
                                                            id="firstname" placeholder="Ejm: Jon" value="{{ $data->firstname }}">
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
                                                            id="second_name" placeholder="Ejm: Allen" value="{{ $data->second_name }}">
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
                                                            id="lastname" placeholder="Ejm: Walker" value="{{ $data->lastname }}">
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
                                                            id="second_surname" placeholder="Ejm: Terrier" value="{{ $data->second_surname }}">
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
                                                            placeholder="Ejm: 123456789" value="{{ $data->phone }}">
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
                                                            placeholder="Ejm: +56123456789" value="{{ $data->whatsapp }}">
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
                                                            data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" value="{{ $data->birthdate }}">
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
                                                        <input type="number" id="age" name="age" class="form-control"
                                                            id="age" readonly value="{{ $data->age }}">
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
                                                            <option value="M" @if ($data->sex == 'M') selected @endif>Masculino</option>
                                                            <option value="F" @if ($data->sex == 'F') selected @endif>Femenino</option>
                                                            <option value="O" @if ($data->sex == 'O') selected @endif>Otro</option>
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
                                                            <option value="Soltero" @if ($data->civil_status == 'Soltero') selected @endif>Soltero(a)</option>
                                                            <option value="Casado" @if ($data->civil_status == 'Casado') selected @endif>Casado(a)</option>
                                                            <option value="Viudo" @if ($data->civil_status == 'Viudo') selected @endif>Viudo(a)</option>
                                                            <option value="Divorciado" @if ($data->civil_status == 'Divorciado') selected @endif>Divorciado(a)</option>
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
                                                        placeholder="Ejm: Ingeniero Petroléro" value="{{ $data->occupation }}">
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
                                                            data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy" value="{{ $data->last_visit_date }}">
                                                        @if ($errors->has('last_visit_date'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('last_visit_date') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer bg-light">
                                        <button type="submit" class="btn btn-primary float-right">Actualizar Paciente</button>
                                    </div>
                                </form>
                            </div>
                        </div>
