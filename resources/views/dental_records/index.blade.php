
                                                            <div class="nk-block nk-block-between">
                                                                <div class="nk-block-head">
                                                                    <h6 class="title">Registros Dentales</h6>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="nk-block">
                                                                    <a href="{{ route('patient.create_record_dental', $data->id) }}" class="btn btn-icon btn-primary">
                                                                        <em class="icon ni ni-plus"></em>
                                                                    </a>
                                                                </div>
                                                            </div><!-- .nk-block-between  -->
                                                            <div class="nk-block">
                                                                <table class="datatable-init table table-record">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="50px">#</th>
                                                                            <th>Fecha</th>
                                                                            <th>Tipo de Registro Dental</th>
                                                                            <th>Imagen</th>
                                                                            <th>Observaciones</th>
                                                                            <th class="text-right">Acciones</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($data->dental_records as $item)
                                                                            <tr>
                                                                                <td>{{ $item->id }}</td>
                                                                                <td>{{ $item->created_at->format('d-m-Y H:i') }}</td>
                                                                                <td>{{ $item->type_image }}</td>
                                                                                <td>
                                                                                    <button type="button" class="btn  btn-sm btn-info show-image"
                                                                                        data-image="{{ $item->url_file }}" >
                                                                                        <em class="icon ni ni-img-fill"></em>
                                                                                        Ver Imagen
                                                                                    </button>
                                                                                </td>
                                                                                <td>
                                                                                    {{ $item->observations }}
                                                                                </td>
                                                                                <td class="text-right">
                                                                                    <a href="{{ route('patient.show_record_dental', ['id' => $data->id, 'record_id' => $item->id ]) }}" >
                                                                                        <em class="icon ni ni-eye"></em>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div><!-- .nk-block -->

