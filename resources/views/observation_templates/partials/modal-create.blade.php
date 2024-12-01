                        <div class="modal fade" tabindex="-1" id="modalCreate">
                            <div class="modal-dialog" role="document">
                                <form action="{{ route('reason-treatment.store') }}" method="POST" class="modal-content"
                                    autocomplete="off" enctype="multipart/form-data">
                                    @csrf
                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                        <em class="icon ni ni-cross"></em>
                                    </a>
                                    <div class="modal-header">
                                        <h5 class="modal-title">Nuevo Motivo de Consulta</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row g-4">
                                            <div class="col-xxl-12 col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="time">Motivo de Consulta</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="name" placeholder="Ejm: Ortodoncia">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-12 col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="time">Color para motivo de consulta</label>
                                                    <div class="form-control-wrap">
                                                        <select id="event-theme" name="event_theme" class="form-control select-calendar-theme" data-search="on">
                                                            <option value="">Seleccione..</option>
                                                            <option value="event-primary">Primario</option>
                                                            <option value="event-success">Verde</option>
                                                            <option value="event-info">Azul Turqueza</option>
                                                            <option value="event-warning">Amarillo</option>
                                                            <option value="event-danger">Rojo</option>
                                                            <option value="event-pink">Rosado</option>
                                                            <option value="event-blue">Azul</option>
                                                            <option value="event-indigo">Indigo</option>
                                                            <option value="event-orange">Naranja</option>
                                                            <option value="event-purple">Purpura</option>
                                                            <option value="event-dark">Negro</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer bg-light">
                                        <button type="submit" class="btn btn-primary float-right">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
