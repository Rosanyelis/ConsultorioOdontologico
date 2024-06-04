                                                            <div class="nk-block nk-block-between">
                                                                <div class="nk-block-head">
                                                                    <h6 class="title">Historias</h6>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="nk-block">
                                                                    <a href="{{ route('patient.history-dental', $data->id) }}"
                                                                        class="btn btn-icon btn-primary">
                                                                        <em class="icon ni ni-plus"></em>
                                                                    </a>
                                                                </div>
                                                            </div><!-- .nk-block-between  -->
                                                            <div class="nk-block">

                                                                <table class="datatable-init table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="50px">#</th>
                                                                            <th>Motivo de Consulta</th>
                                                                            <th>Fecha de Consulta</th>
                                                                            <th class="text-right">Acciones</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($data->dental_history as $item)
                                                                        <tr>
                                                                            <td>{{ $item->id }}</td>
                                                                            <td>{{ $item->reason_consultation }}</td>
                                                                            <td>{{ \Carbon\Carbon::createFromDate($item->created_at)->format('d-m-Y') }}</td>
                                                                            <td class="text-right">
                                                                                <a href="{{ route('patient.show-history-dental', ['id' => $data->id, 'history_id' => $item->id ]) }}" >
                                                                                    <em class="icon ni ni-eye"></em>
                                                                                </a>
                                                                            </td>
                                                                        </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>

                                                            </div><!-- .nk-block -->
