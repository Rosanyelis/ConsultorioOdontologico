                        <div class="modal fade" tabindex="-1" id="modalNote">
                            <div class="modal-dialog" role="document">
                                <form action="{{ route('patient.store-note', $data->id) }}" method="POST" class="modal-content"
                                    autocomplete="off" enctype="multipart/form-data">
                                    @csrf
                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                        <em class="icon ni ni-cross"></em>
                                    </a>
                                    <div class="modal-header">
                                        <h5 class="modal-title">Agregar Nota</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row g-4">
                                            <div class="col-xxl-12 col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="file">Nota</label>
                                                    <div class="form-control-wrap">
                                                    <textarea name="grades" class="form-control" id="" cols="30" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer bg-light">
                                        <button type="submit" class="btn btn-primary float-right">Guardar Nota</button>
                                    </div>
                                </form>
                            </div>
                        </div>
