
                                                            <div class="nk-block nk-block-between">
                                                                <div class="nk-block-head">
                                                                    <h6 class="title"></h6>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="nk-block">
                                                                    <a href="#" class="btn btn-white btn-icon btn-outline-light" data-toggle="modal"
                                                                        data-target="#modalEditPatient">
                                                                        <em class="icon ni ni-edit"></em>
                                                                    </a>
                                                                </div>
                                                            </div><!-- .nk-block-between  -->
                                                            <div class="nk-block">
                                                                <div class="profile-ud-list">
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">DNI</span>
                                                                            <span class="profile-ud-value">{{ $data->dni }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Nombres</span>
                                                                            <span class="profile-ud-value">{{ $data->firstname }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Primer Apellido</span>
                                                                            <span class="profile-ud-value">{{ $data->lastname }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Segundo Apellido</span>
                                                                            <span class="profile-ud-value">{{ $data->second_surname }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Edad</span>
                                                                            <span class="profile-ud-value">{{ $data->age }}</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Teléfono</span>
                                                                            <span class="profile-ud-value">
                                                                                <a href="https://wa.me/{{ $data->phone }}"
                                                                                    target="_blank" class="btn btn-sm btn-primary">
                                                                                    <em class="icon ni ni-whatsapp"></em>
                                                                                    <span>{{ $data->phone }}</span>
                                                                                </a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="profile-ud-item">
                                                                        <div class="profile-ud wider">
                                                                            <span class="profile-ud-label">Fecha Nac.</span>
                                                                            <span class="profile-ud-value">{{ $data->birthdate }}</span>
                                                                        </div>
                                                                    </div>

                                                                </div><!-- .profile-ud-list -->
                                                            </div><!-- .nk-block -->
                                                            <div class="nk-divider divider md"></div>
                                                            <div id="accordion-1" class="accordion accordion-s2">
                                                                <div class="accordion-item">
                                                                    <a href="#" class="accordion-head" data-toggle="collapse" data-target="#accordion-item-1-1">
                                                                        <h5 class="title nk-block-title">Salud Actual del Paciente</h5>
                                                                        <span class="accordion-icon"></span>
                                                                    </a>
                                                                    <div class="accordion-body collapse " id="accordion-item-1-1" data-parent="#accordion-1">
                                                                        <div class="accordion-inner">
                                                                            <div class="nk-block">
                                                                                <div class="row gy-4">
                                                                                    <div class="col-xxl-12 col-md-12 table-responsive">
                                                                                        <table class="table">
                                                                                            <tr>
                                                                                                <td>¿Posee alguna enfermedad?</td>
                                                                                                <td>{{ $data->patient_health->has_disease }}</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                            <td>Detalles de enfermedad</td>
                                                                                                <td colspan="2">{{ $data->patient_health->disease }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Posee alérgias?</td>
                                                                                                <td>{{ $data->patient_health->allergies }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Tiene epilepsia?</td>
                                                                                                <td>{{ $data->patient_health->epilepsy }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Tiene hepatitis?</td>
                                                                                                <td>{{ $data->patient_health->hepatitis }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Tiene hipertension?</td>
                                                                                                <td>{{ $data->patient_health->hypertension }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Tiene problemas cardiacos?</td>
                                                                                                <td>{{ $data->patient_health->heart_disease }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Tiene diabetes?</td>
                                                                                                <td>{{ $data->patient_health->have_diabetes }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Está embarazada?</td>
                                                                                                <td>{{ $data->patient_health->pregnant }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Usa Hilo dental?</td>
                                                                                                <td>{{ $data->patient_health->dental_floss }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Dolor en alguna pieza dentaria?</td>
                                                                                                <td>{{ $data->patient_health->tooth_pain }}</td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td>¿Mal olor o sabor?</td>
                                                                                                <td>{{ $data->patient_health->bad_smell_taste }}</td>
                                                                                            </tr>
                                                                                        </table>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-divider divider md"></div>
                                                            <div id="accordion-2" class="accordion accordion-s2">
                                                                <div class="accordion-item">
                                                                    <a href="#" class="accordion-head" data-toggle="collapse" data-target="#accordion-item-1-2">
                                                                        <h5 class="title nk-block-title">Galería de Fotos del Paciente</h5>
                                                                        <span class="accordion-icon"></span>
                                                                    </a>
                                                                    <div class="accordion-body collapse " id="accordion-item-1-2" data-parent="#accordion-2">
                                                                        <div class="accordion-inner">
                                                                            <div class="nk-block">
                                                                                <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                                                    <div class="nk-block-head-content">
                                                                                        <!-- <h5 class="nk-block-title">Fotos del Paciente</h5> -->
                                                                                    </div>
                                                                                    <div class="nk-block-head-content">
                                                                                        <ul class="nk-block-tools g-3">
                                                                                            <li class="nk-block-tools-opt">
                                                                                                <a href="#" class="btn btn-icon btn-sm btn-primary" data-toggle="modal"
                                                                                                    data-target="#modalAddFile"><em class="icon ni ni-plus"></em></a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row gy-4">
                                                                                    @foreach ($data->files as $item)
                                                                                    <div class="col-xxl-3 col-md-3">
                                                                                        <div class="nk-file">
                                                                                            <div class="nk-file-thumb">
                                                                                                <img src="{{ asset($item->path) }}" class="nk-file-img" alt="{{ $item->name }}">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-divider divider md"></div>
                                                            <div class="nk-block">
                                                                <div class="nk-block-head nk-block-head-sm nk-block-between">
                                                                    <h5 class="title">Notas del Doctor</h5>
                                                                    <a href="#" data-toggle="modal" data-target="#modalNote" class="link link-sm">+ Agregar Nota</a>
                                                                </div><!-- .nk-block-head -->
                                                                <div class="bq-note">
                                                                    @foreach ($data->notes as $item)
                                                                    <div class="bq-note-item">
                                                                        <div class="bq-note-text">
                                                                            <p>{{ $item->grades }}</p>
                                                                        </div>
                                                                        <div class="bq-note-meta">
                                                                        <span class="bq-note-added">Agregada  <span class="date">{{ \Carbon\Carbon::parse($item->created_at)->format('M d, Y') }} </span></span>
                                                                            <span class="bq-note-sep sep">|</span>

                                                                            <a href="#" class="delete-note text-danger" data-id="{{ $item->id }}">
                                                                                <em class="icon ni ni-trash-fill"></em>
                                                                                <span>Borrar Nota</span>
                                                                            </a>
                                                                            <form id="formNoteDelete-{{ $item->id }}"
                                                                                action="{{ route('patient.destroy-note', ['id' => $data->id, 'note_id' => $item->id]) }}"method="POST">
                                                                                @csrf
                                                                            </form>
                                                                        </div>
                                                                    </div><!-- .bq-note-item -->
                                                                    @endforeach
                                                                </div><!-- .bq-note -->
                                                            </div><!-- .nk-block -->
