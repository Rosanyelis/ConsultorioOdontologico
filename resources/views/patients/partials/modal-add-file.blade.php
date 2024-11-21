                        <div class="modal fade" tabindex="-1" id="modalAddFile">
                            <div class="modal-dialog" role="document">
                                <form action="{{ route('patient.store-file', $data->id) }}" method="POST" class="modal-content"
                                    autocomplete="off" enctype="multipart/form-data">
                                    @csrf
                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                        <em class="icon ni ni-cross"></em>
                                    </a>
                                    <div class="modal-header">
                                        <h5 class="modal-title">Agregar Archivo</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row g-4">
                                            <div class="col-xxl-12 col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="file">Nota</label>
                                                    <div class="form-control-wrap">
                                                        <div class="custom-file">
                                                            <input type="file" name="archivo" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Buscar Archivo</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer bg-light">
                                        <button type="submit" class="btn btn-primary float-right">Guardar archivo</button>
                                    </div>
                                </form>
                            </div>
                        </div>
