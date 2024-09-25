                                                            <div class="nk-block nk-block-between">
                                                                <div class="nk-block-head">
                                                                    <h6 class="title">Pagos</h6>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="nk-block">
                                                                    <a href="{{ route('patient.pay', $data->id) }}"
                                                                        class="btn btn-icon btn-primary">
                                                                        <em class="icon ni ni-plus"></em>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="nk-block">
                                                                <table class="datatable-init table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="50px">#</th>
                                                                            <th>Factura #</th>
                                                                            <th>Tipo de Pago</th>
                                                                            <th>Nro. Cuotas</th>
                                                                            <th>Total</th>
                                                                            <th>Abonado</th>
                                                                            <th>Estatus</th>
                                                                            <th class="text-right">Acciones</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($data->billings as $item)
                                                                        <tr>
                                                                            <td>{{ $loop->iteration }}</td>
                                                                            <td>#000{{ $item->id }}</td>
                                                                            <td>{{ $item->payment_type }}</td>
                                                                            <td>{{ $item->number_installments }}</td>
                                                                            <td>{{ $item->total }}</td>
                                                                            <td>
                                                                                @php
                                                                                    $totalPaid = 0;
                                                                                    foreach ($item->payments as $payment) {
                                                                                        $totalPaid += $payment->pay_amount;
                                                                                    }
                                                                                @endphp
                                                                                {{ $totalPaid }}
                                                                            </td>
                                                                            <td>
                                                                                @if ($item->status == 'Pagado')
                                                                                <span class="badge badge-success">{{ $item->status }}</span>
                                                                                @endif
                                                                                @if ($item->status == 'Pendiente')
                                                                                <span class="badge badge-warning">{{ $item->status }}</span>
                                                                                @endif
                                                                                @if ($item->status == 'Cancelado')
                                                                                <span class="badge badge-danger">{{ $item->status }}</span>
                                                                                @endif
                                                                            </td>
                                                                            <td class="text-right">
                                                                                <div class="dropdown float-right">
                                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger pt-0 pb-0" data-toggle="dropdown">
                                                                                        <em class="icon ni ni-more-h"></em>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                                        <ul class="link-list-opt no-bdr">
                                                                                            <li>
                                                                                                <a href="{{ route('patient.show-pay-invoice', ['id' => $data->id, 'pay_id' => $item->id]) }}">
                                                                                                    <em class="icon ni ni-eye"></em>
                                                                                                    <span>Ver Factura</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <!-- <li>
                                                                                                <a href="#">
                                                                                                    <em class="icon ni ni-pen-fill"></em>
                                                                                                    <span>Editar Factura</span>
                                                                                                </a>
                                                                                            </li> -->
                                                                                            @if ($item->status == 'Pendiente')
                                                                                            <li>
                                                                                                <a href="{{ route('patient.pay-invoice', ['id' => $data->id, 'pay_id' => $item->id]) }}">
                                                                                                    <em class="icon ni ni-file-plus"></em>
                                                                                                    <span>Abonar Factura</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            @endif
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div><!-- .nk-block -->
