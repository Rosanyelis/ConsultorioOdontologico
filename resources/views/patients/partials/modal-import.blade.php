                        <div class="modal fade" tabindex="-1" id="modalImport">
                            <div class="modal-dialog" role="document">
                                <form action="{{ route('patient.import') }}" method="POST" class="modal-content"
                                    autocomplete="off" enctype="multipart/form-data">
                                    @csrf
                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                        <em class="icon ni ni-cross"></em>
                                    </a>
                                    <div class="modal-header">
                                        <h5 class="modal-title">Importar Datos de Pacientes</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row g-4">
                                            <div class="col-xxl-12 col-md-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="file">Cargue el archivo a importar</label>
                                                    <div class="form-control-wrap">
                                                        <input type="file" name="importpatient" class="form-control" required>
                                                        <span class="invalid text-danger">
                                                            Por favor, descargar el siguiente formato para la carga masiva de datos <br>
                                                            "<a href="{{ asset('imports/FormatoImportarPacientes.xlsx') }}" download >Formato de ejemplo de pacientes</a>""
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer bg-light">
                                        <button type="submit" class="btn btn-primary float-right">Importar Datos</button>
                                    </div>
                                </form>
                            </div>
                        </div>
