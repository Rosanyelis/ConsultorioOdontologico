@extends('layouts.app')
@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Ver Expediente - {{ $data->numero_expendiente }}</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    <a href="{{ route('expediente.index') }}" class="btn btn-icon btn-secondary d-md-none"><em class="icon ni ni-arrow-left"></em></a>
                                                    <a href="{{ route('expediente.index') }}" class="btn btn-secondary d-none d-md-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Regresar</span></a>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="card card-preview">
                                    <div class="card-inner">
                                        <div class="nk-block">
                                            <div class="profile-ud-list">
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">N° de Expediente</span>
                                                        <span class="profile-ud-value">{{ $data->numero_expendiente }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Asunto</span>
                                                        <span class="profile-ud-value">{{ $data->asunto }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Fecha de Inicio</span>
                                                        <span class="profile-ud-value">{{ $data->fecha_inicio }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Fecha de Término</span>
                                                        <span class="profile-ud-value">{{ $data->fecha_fin }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Juzgado</span>
                                                        <span class="profile-ud-value">{{ $data->juzgado->name }}</span>
                                                    </div>
                                                </div>

                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Materia</span>
                                                        <span class="profile-ud-value">{{ $data->materia->name }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Contraparte</span>
                                                        <span class="profile-ud-value">{{ $data->contraparte }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Tipo de Costo</span>
                                                        <span class="profile-ud-value">{{ $data->tipo_costo }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Número</span>
                                                        <span class="profile-ud-value">{{ $data->cliente->numero }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Costo Porcentaje</span>
                                                        <span class="profile-ud-value">{{ $data->costo_porcentaje }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Porcentaje Asunto</span>
                                                        <span class="profile-ud-value">{{ $data->porcentaje_asunto }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Valor Porcentaje</span>
                                                        <span class="profile-ud-value">{{ $data->valor_porcentaje }}</span>
                                                    </div>
                                                </div>
                                                <div class="profile-ud-item">
                                                    <div class="profile-ud wider">
                                                        <span class="profile-ud-label">Estado</span>
                                                        <span class="profile-ud-value">{{ $data->estado }}</span>
                                                    </div>
                                                </div>
                                            </div><!-- .profile-ud-list -->
                                        </div>

                                        <div class="nk-divider divider md"></div>
                                        <div id="accordion-1" class="accordion accordion-s2">
                                            <div class="accordion-item">
                                                <a href="#" class="accordion-head" data-toggle="collapse" data-target="#accordion-item-1-1">
                                                    <h5 class="title nk-block-title">Datos de Cliente</h5>
                                                    <span class="accordion-icon"></span>
                                                </a>
                                                <div class="accordion-body collapse " id="accordion-item-1-1" data-parent="#accordion-1">
                                                    <div class="accordion-inner">
                                                        <div class="nk-block">
                                                            <div class="profile-ud-list">
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Primer Nombre</span>
                                                                        <span class="profile-ud-value">{{ $data->cliente->firstname }}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Segundo Nombre</span>
                                                                        <span class="profile-ud-value">{{ $data->cliente->second_name }}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Primer Apellido</span>
                                                                        <span class="profile-ud-value">{{ $data->cliente->lastname }}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Segundo Apellido</span>
                                                                        <span class="profile-ud-value">{{ $data->cliente->second_surname }}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Correo</span>
                                                                        <span class="profile-ud-value">{{ $data->cliente->email }}</span>
                                                                    </div>
                                                                </div>

                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Teléfono</span>
                                                                        <span class="profile-ud-value">{{ $data->cliente->phone }}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Fecha de Nac.</span>
                                                                        <span class="profile-ud-value">{{ $data->cliente->birthdate }}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Calle o Circuit0</span>
                                                                        <span class="profile-ud-value">{{ $data->cliente->calle_circuito }}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Número</span>
                                                                        <span class="profile-ud-value">{{ $data->cliente->numero }}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Interior Letra</span>
                                                                        <span class="profile-ud-value">{{ $data->cliente->interior_letra }}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Interior Número</span>
                                                                        <span class="profile-ud-value">{{ $data->cliente->interior_numero }}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Colonia</span>
                                                                        <span class="profile-ud-value">{{ $data->cliente->colonia }}</span>
                                                                    </div>
                                                                </div>
                                                                <div class="profile-ud-item">
                                                                    <div class="profile-ud wider">
                                                                        <span class="profile-ud-label">Código Postal</span>
                                                                        <span class="profile-ud-value">{{ $data->cliente->codigo_postal }}</span>
                                                                    </div>
                                                                </div>
                                                            </div><!-- .profile-ud-list -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nk-divider divider md"></div>
                                        <div id="accordion-2" class="accordion accordion-s2">
                                            <div class="accordion-item">
                                                <a href="#" class="accordion-head" data-toggle="collapse" data-target="#accordion-item-1-2">
                                                    <h5 class="title nk-block-title">Archivos</h5>
                                                    <span class="accordion-icon"></span>
                                                </a>
                                                <div class="accordion-body collapse " id="accordion-item-1-2" data-parent="#accordion-2">
                                                    <div class="accordion-inner">
                                                        <div class="nk-block">
                                                            <div class="nk-block-head">
                                                                <div class="nk-block-between">
                                                                    <div class="nk-block-head-content">
                                                                        <h5 class="title"></h5>
                                                                    </div>
                                                                    <div class="nk-block-head-content">
                                                                        <ul class="nk-block-tools g-3">
                                                                            <li class="nk-block-tools-opt">
                                                                                <a href="#" class="btn btn-icon btn-primary d-md-none" data-toggle="modal" data-target="#modalArchivo"><em class="icon ni ni-plus"></em></a>
                                                                                <a href="#" class="btn btn-primary d-none d-md-inline-flex" data-toggle="modal" data-target="#modalArchivo"><em class="icon ni ni-plus"></em><span>Agregar Archivo</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div><!-- .nk-block-head-content -->
                                                                </div>
                                                            </div>
                                                            <table class="datatable-init table">
                                                                <thead>
                                                                    <tr>
                                                                        <th width="50px">#</th>
                                                                        <th>Nombre de Archivo</th>
                                                                        <th>Descripción</th>
                                                                        <th class="text-right">Acciones</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($data->archivos as $file)
                                                                    <tr>
                                                                        <td>{{ $file->id}}</td>
                                                                        <td>
                                                                            <a href="{{ asset(''.$file->url) }}" target="_blank" rel="noopener noreferrer">
                                                                            {{ $file->name }}
                                                                            </a>
                                                                        </td>
                                                                        <td>{{ $file->description }}</td>
                                                                        <td>
                                                                            <div class="dropdown float-right pt-0 pb-0">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger pt-0 pb-0" data-toggle="dropdown">
                                                                                    <em class="icon ni ni-more-h"></em>
                                                                                </a>
                                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                                    <ul class="link-list-opt no-bdr">
                                                                                        <li>
                                                                                            <a href="#" class="delete-record" data-id="{{ $file->id }}">
                                                                                                <em class="icon ni ni-power"></em>
                                                                                                <span>Eliminar</span>
                                                                                            </a>
                                                                                            <form id="formDelete-{{ $file->id }}"
                                                                                                action="{{ route('file.destroy', ['id' => $data->id, 'archivo' => $file->id]) }}"
                                                                                                method="POST">
                                                                                                @csrf
                                                                                            </form>

                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="nk-divider divider md"></div>
                                        <div class="nk-block">
                                            <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                <h5 class="title">Notas</h5>
                                                <a href="#" data-toggle="modal" data-target="#modalNote" class="link link-sm">+ Agregar Nota</a>
                                            </div><!-- .nk-block-head -->
                                            <div class="bq-note">
                                                @foreach ($data->notas as $item)
                                                <div class="bq-note-item">
                                                    <div class="bq-note-text">
                                                        <p>{{ $item->grades }}</p>
                                                    </div>
                                                    <div class="bq-note-meta">
                                                        <span class="bq-note-added">Agregada  <span class="date">{{ \Carbon\Carbon::parse($item->created_at)->format('M d, Y') }} </span></span>
                                                        <span class="bq-note-sep sep">|</span>
                                                        <span class="bq-note-by">Por <span>{{ $item->user->name }}</span></span>
                                                        <a href="#" class="delete-note text-danger" data-id="{{ $item->id }}">
                                                            <em class="icon ni ni-trash-fill"></em>
                                                            <span>Borrar Nota</span>
                                                        </a>
                                                        <form id="formNoteDelete-{{ $item->id }}"
                                                            action="{{ route('nota.destroy', ['id' => $data->id, 'nota' => $item->id]) }}"method="POST">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </div><!-- .bq-note-item -->
                                                @endforeach
                                            </div><!-- .bq-note -->
                                        </div><!-- .nk-block -->
                                        <div class="modal fade" tabindex="-1" id="modalNote">
                                            <div class="modal-dialog" role="document">
                                                <form action="{{ route('nota.store', $data->id) }}" method="POST" class="modal-content"
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
                                        <div class="modal fade" tabindex="-1" id="modalArchivo">
                                            <div class="modal-dialog" role="document">
                                                <form action="{{ route('file.store', $data->id) }}" method="POST" class="modal-content"
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
                                                                    <label class="form-label" for="file">Archivo</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="custom-file">
                                                                            <input type="file" name="file" class="custom-file-input" id="customFile">
                                                                            <label class="custom-file-label" for="customFile">Elige el archivo</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xxl-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="file">Descripción</label>
                                                                    <div class="form-control-wrap">
                                                                        <textarea name="description" class="form-control" id="" cols="30" rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer bg-light">
                                                        <button type="submit" class="btn btn-primary float-right">Guardar Archivo</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>
                        </div>
                        <!-- end page title -->
@endsection
@section('scripts')
        <script>
            (function(NioApp, $){
                'use strict';

                $('.datatable-init tbody').on('click', '.delete-record', function(){
                    let dataid = $(this).data('id');
                    let formDelete = $('#formDelete-'+dataid);
                    Swal.fire({
                        title: '¿Está Seguro de Eliminar el Archivo?',
                        text: "Si existe registros relacionados, no podrá ser eliminado!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Si, estoy seguro!'
                    }).then((result) => {
                        if (result.value) {
                            $(formDelete).submit();
                        }
                    });
                });

                $('.delete-note').on('click', function(){
                    let dataid = $(this).data('id');
                    let formDelete = $('#formNoteDelete-'+dataid);
                    Swal.fire({
                        title: '¿Está Seguro de Eliminar la Nota?',
                        text: "Si existe registros relacionados, no podrá ser eliminado!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Si, estoy seguro!'
                    }).then((result) => {
                        if (result.value) {
                            $(formDelete).submit();
                        }
                    });
                });
            })(NioApp, jQuery);
        </script>
@endsection
