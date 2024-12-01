@extends('layouts.app')

@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Registro Dental de: {{ $data->firstname }} {{ $data->lastname }}</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    <a href="{{ route('patient.show', $data->id) }}" class="btn btn-icon btn-secondary d-md-none"><em class="icon ni ni-arrow-left"></em></a>
                                                    <a href="{{ route('patient.show', $data->id) }}" class="btn btn-secondary d-none d-md-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Regresar</span></a>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-inner-group">
                                            <form id="form" action="{{ route('patient.store_record_dental', $data->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="card-inner">
                                                    <div class="nk-block">
                                                        <div class="row gy-4 pb-4">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-vr-first-name">Tipo de Registro Dental</label>
                                                                    <div class="form-control-wrap">
                                                                        <select name="type_image" class="form-select " data-search="on">
                                                                            <option value="">Seleccione</option>
                                                                            <option value="Fotos Extraorales">Fotos Extraorales</option>
                                                                            <option value="Fotos Intraorales">Fotos Intraorales</option>
                                                                            <option value="Tomas de Modelo de Estudio">Tomas de Modelo de Estudio</option>
                                                                            <option value="Radiografía Panorámica">Radiografía Panorámica</option>
                                                                            <option value="RX - Cefalometrica">RX - Cefalometrica</option>
                                                                            <option value="Tomografía 3D">Tomografía 3D</option>
                                                                        </select>
                                                                        @if ($errors->has('type_image'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('type_image') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-vr-first-name">Archivo o Foto</label>
                                                                    <div class="form-control-wrap">
                                                                        <div class="custom-file">
                                                                            <input type="file" name="archivo" class="custom-file-input" id="customFile">
                                                                            <label class="custom-file-label" for="customFile">Buscar Archivo</label>
                                                                        </div>
                                                                        @if ($errors->has('archivo'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('archivo') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-vr-first-name">Observaciones</label>
                                                                    <div class="form-control-wrap">
                                                                        <textarea class="form-control" name="observations" rows="3"></textarea>
                                                                        @if ($errors->has('observations'))
                                                                            <span class="invalid text-danger">
                                                                                {{ $errors->first('observations') }}
                                                                            </span>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 mt-3 mb-3 text-right">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-primary">Guardar Registro Dental</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--col-->
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
@endsection

