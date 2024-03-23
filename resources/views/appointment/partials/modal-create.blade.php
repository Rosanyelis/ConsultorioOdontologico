<div class="modal fade" id="addEventPopup">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Agendar Cita</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="#" id="addEventForm" class="form-validate is-alter">
                        <div class="row gx-4 gy-3">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="event-title">Paciente</label>
                                    <div class="form-control-wrap">
                                        <select id="patient_id" class="form-select" data-search="on">
                                            <option value="Seleccione">Seleccione..</option>
                                            @foreach ($patients as $item)
                                            <option value="{{ $item->id }}">{{ $item->firstname }} {{ $item->second_name }} {{ $item->lastname }} {{ $item->second_surname }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="event-title">Doctor </label>
                                    <div class="form-control-wrap">
                                        <select id="doctor_id" class="form-select" data-search="on">
                                            <option value="Seleccione">Seleccione..</option>
                                            @foreach ($doctors as $item)
                                            <option value="{{ $item->id }}">{{ $item->firstname }} {{ $item->lastname }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Motivo de Cita</label>
                                    <div class="form-control-wrap">
                                        <select id="event-theme" class="select-calendar-theme form-control" data-search="on">
                                            <option value="event-primary Consulta">Consulta</option>
                                            <option value="event-success Limpieza">Limpieza</option>
                                            <option value="event-info Empaste">Empaste</option>
                                            <option value="event-warning Extracción">Extracción</option>
                                            <option value="event-danger Endodoncia">Endodoncia</option>
                                            <option value="event-pink Corona">Corona</option>
                                            <option value="event-primary-dim Otro">Otro</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label">Fecha y Hora</label>
                                    <div class="row gx-2">
                                        <div class="w-55">
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-left">
                                                    <em class="icon ni ni-calendar"></em>
                                                </div>
                                                <input type="text" id="event-start-date" class="form-control date-picker" data-date-format="yyyy-mm-dd" required>
                                            </div>
                                        </div>
                                        <div class="w-45">
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-left">
                                                    <em class="icon ni ni-clock"></em>
                                                </div>
                                                <input type="text" id="event-start-time" data-time-format="HH:mm:ss" class="form-control time-picker">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="d-flex justify-content-between gx-4 mt-1">
                                    <li>
                                        <button id="resetEvent" data-dismiss="modal" class="btn btn-danger btn-dim">Cancelar</button>
                                    </li>
                                    <li>
                                        <button id="addEvent" type="submit" class="btn btn-primary">Guardar Cita</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
