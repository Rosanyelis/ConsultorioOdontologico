                        <div class="modal fade" tabindex="-1" id="modalCreate">
                            <div class="modal-dialog" role="document">
                                <form action="{{ route('medicine.store') }}" method="POST" class="modal-content"
                                    autocomplete="off" enctype="multipart/form-data">
                                    @csrf
                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                        <em class="icon ni ni-cross"></em>
                                    </a>
                                    <div class="modal-header">
                                        <h5 class="modal-title">Nuevo Medicameto</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row g-4">
                                            <div class="col-xxl-12 col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="time">Ingrese nombre de Medicamento</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" name="name" placeholder="Ejm: Acetaminofen de 50mg">
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
