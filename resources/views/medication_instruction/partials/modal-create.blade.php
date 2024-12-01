                        <div class="modal fade" tabindex="-1" id="modalCreate">
                            <div class="modal-dialog" role="document">
                                <form action="{{ route('medication-instruction.store') }}" method="POST" class="modal-content"
                                    autocomplete="off" enctype="multipart/form-data">
                                    @csrf
                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                        <em class="icon ni ni-cross"></em>
                                    </a>
                                    <div class="modal-header">
                                        <h5 class="modal-title">Nueva Instrucción de Toma de Medicameto</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row g-4">
                                            <div class="col-xxl-12 col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="time">Ingrese nombre de Medicamento</label>
                                                    <div class="form-control-wrap">
                                                        <textarea name="description" class="form-control"
                                                        id="" rows="10" placeholder="Ejm: Tomar 1 cada 2 horas"></textarea>
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
