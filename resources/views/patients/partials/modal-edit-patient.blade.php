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
                                            <div class="col-xxl-3 col-md-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="dni">DNI</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="dni" class="form-control"
                                                            id="dni" placeholder="Ejm: Jon" value="{{ $data->dni }}">
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

                                        </div>
                                    </div>
                                    <div class="modal-footer bg-light">
                                        <button type="submit" class="btn btn-primary float-right">Actualizar Paciente</button>
                                    </div>
                                </form>
                            </div>
                        </div>
