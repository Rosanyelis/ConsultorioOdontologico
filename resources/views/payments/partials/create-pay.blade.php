                        <div class="modal fade" tabindex="-1" id="modalBilling">
                            <div class="modal-dialog modal-xl" role="document">
                                <form id="form" action="{{ route('billing.store') }}" method="POST" class="modal-content">
                                    @csrf
                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                        <em class="icon ni ni-cross"></em>
                                    </a>
                                    <div class="modal-header">
                                        <h5 class="modal-title">Crear Factura de Pacientes</h5>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row g-4">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="event-title">Paciente</label>
                                                    <div class="form-control-wrap">
                                                        <select id="patient_id" name="patient_id" class="form-select" data-search="on">
                                                            <option value="Seleccione">Seleccione..</option>
                                                            @foreach ($patients as $item)
                                                            <option value="{{ $item->id }}">{{ $item->firstname }} {{ $item->second_name }} {{ $item->lastname }} {{ $item->second_surname }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-md-3">
                                                <div class="form-group">
                                                    <label class="form-label" for="total">Monto Total De factura</label>
                                                    <div class="form-control-wrap">
                                                        <input type="number" name="total" class="form-control"
                                                            id="totalinput" readonly>
                                                        @if ($errors->has('total'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('total') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-md-3">
                                                <div class="form-group">
                                                    <label class="form-label" for="total">Forma de Pago</label>
                                                    <div class="form-control-wrap">
                                                        <select class="form-select" name="payment_type" data-placeholder="Seleccionar">
                                                            <option value="">Seleccionar</option>
                                                            <option value="Total">Total</option>
                                                            <option value="Parcial">Parcial</option>
                                                            <option value="Por Cuotas">Por Cuotas</option>
                                                        </select>
                                                        @if ($errors->has('payment_type'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('payment_type') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-md-3">
                                                <div class="form-group">
                                                    <label class="form-label" for="number_installments">Número de cuotas</label>
                                                    <div class="form-control-wrap">
                                                        <input type="number" name="number_installments" class="form-control"
                                                        id="number_installments" >
                                                        @if ($errors->has('number_installments'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('number_installments') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-md-3">
                                                <div class="form-group">
                                                    <label class="form-label" for="total">Estatus</label>
                                                    <div class="form-control-wrap">
                                                        <select class="form-select" name="status" data-placeholder="Seleccionar">
                                                            <option value="">Seleccionar</option>
                                                            <option value="Pendiente">Pendiente</option>
                                                            <option value="Cancelado">Cancelado</option>
                                                            <option value="Pagado">Pagado</option>
                                                        </select>
                                                        @if ($errors->has('status'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('status') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row gy-2">
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label class="form-label" for="type">Tipo de Tratamiento</label>
                                                    <div class="form-control-wrap">
                                                        <select class="form-select" id="type" data-placeholder="Seleccione">
                                                            <option value="">Seleccione</option>
                                                            @foreach ($type as $item)
                                                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="form-group">
                                                    <label class="form-label" for="price">Costo</label>
                                                    <div class="form-control-wrap">
                                                        <input type="number" class="form-control" id="price"  placeholder="Ejm: 10">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <button id="add" type="button" class="btn btn-icon btn-info" style="margin-top: 1.90rem;">
                                                    <em class="icon ni ni-plus"></em>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="table-responsive mt-3">
                                            <table id="servicio" class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Descripción de Tratamiento</th>
                                                        <th>Costo</th>
                                                    </tr>
                                                </thead>
                                                <tbody></tbody>
                                                <tfoot class="fs-18px">
                                                    <tr>
                                                        <td class="text-right">Total</td>
                                                        <td>$<span id="total"></span></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>

                                    </div>
                                    <div class="modal-footer bg-light">
                                        <input type="hidden" id="dataBilling" name="billing">
                                        <button id="guardar" type="button" class="btn btn-primary float-right">Guardar Factura</button>
                                    </div>
                                </form>
                            </div>
                        </div>
