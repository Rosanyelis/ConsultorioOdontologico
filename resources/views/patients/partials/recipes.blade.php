                                                            <div class="nk-block nk-block-between">
                                                                <div class="nk-block-head">
                                                                    <h6 class="title">Recetas</h6>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="nk-block">
                                                                    <a href="{{ route('patient.recipe', $data->id) }}" class="btn btn-icon btn-primary">
                                                                        <em class="icon ni ni-plus"></em>
                                                                    </a>
                                                                </div>
                                                            </div><!-- .nk-block-between  -->
                                                            <div class="nk-block">
                                                                <table class="datatable-init table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th width="50px">#</th>
                                                                            <th>Observación</th>
                                                                            <th>Fecha de Receta</th>
                                                                            <th class="text-right">Acciones</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($data->recipes as $item)
                                                                        <tr>
                                                                            <td>{{ $item->id }}</td>
                                                                            <td>{{ $item->observations }}</td>
                                                                            <td>{{ \Carbon\Carbon::createFromDate($item->created_at)->format('d-m-Y') }}</td>
                                                                            <td>
                                                                                <div class="dropdown float-right">
                                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger pt-0 pb-0" data-toggle="dropdown">
                                                                                        <em class="icon ni ni-more-h"></em>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                                        <ul class="link-list-opt no-bdr">
                                                                                            <li>
                                                                                                <a href="{{ route('patient.show-recipe', ['id' => $data->id, 'recipe_id' => $item->id]) }}">
                                                                                                    <em class="icon ni ni-eye"></em>
                                                                                                    <span>Ver Recipe</span>
                                                                                                </a>
                                                                                            </li>
                                                                                            <li>
                                                                                                <a href="javascript:void(0);">
                                                                                                    <em class="icon ni ni-eye"></em>
                                                                                                    <span>Imprimir Recipe</span>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            </div><!-- .nk-block -->
