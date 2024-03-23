<div class="modal fade" id="previewEventPopup">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div id="preview-event-header" class="modal-header">
                    <h5 id="preview-event-title" class="modal-title">Placeholder Title</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="row gy-3 py-1">
                        <div class="col-sm-6">
                            <h6 class="overline-title">Fecha y Hora de Inicio</h6>
                            <p id="preview-event-start"></p>
                        </div>
                        <div class="col-sm-6" id="preview-event-end-check">
                            <h6 class="overline-title">Fecha y Hora de Término</h6>
                            <p id="preview-event-end"></p>
                        </div>
                        <div class="col-sm-10" id="preview-event-description-check">
                            <h6 class="overline-title">Descripción</h6>
                            <p id="preview-event-description"></p>
                        </div>
                    </div>
                    <ul class="d-flex justify-content-between gx-4 mt-3">
                        <li>
                            <button data-dismiss="modal" data-toggle="modal" 
                                data-target="#deleteEventPopup" class="btn btn-danger btn-dim">Borrar Cita</button>
                        </li>
                        <li>
                            <button class="btn btn-primary">Generar Historia</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>