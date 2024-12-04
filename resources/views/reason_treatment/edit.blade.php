@extends('layouts.app')

@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Editar Motivo de Consulta</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li>
                                                    <a href="{{ route('reason-treatment.index') }}" class="btn btn-primary">
                                                        <em class="icon ni ni-arrow-left"></em>
                                                        <span>Regresar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <form action="{{ route('reason-treatment.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <div class="row g-4">
                                                    <div class="col-xxl-12 col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="time">Motivo de Consulta</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xxl-12 col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="time">Color para motivo de consulta</label>
                                                            <div class="form-control-wrap">
                                                                <select id="event-theme" name="event_theme" class="form-control select-calendar-theme" data-search="on">
                                                                    <option value="">Seleccione..</option>
                                                                    <option value="event-primary" @if( $data->event_theme == 'event-primary') selected @endif >Primario</option>
                                                                    <option value="event-success" @if( $data->event_theme == 'event-success') selected @endif>Verde</option>
                                                                    <option value="event-info" @if( $data->event_theme == 'event-info') selected @endif>Azul Turqueza</option>
                                                                    <option value="event-warning" @if( $data->event_theme == 'event-warning') selected @endif>Amarillo</option>
                                                                    <option value="event-danger" @if( $data->event_theme == 'event-danger') selected @endif>Rojo</option>
                                                                    <option value="event-pink" @if( $data->event_theme == 'event-pink') selected @endif>Rosado</option>
                                                                    <option value="event-blue" @if( $data->event_theme == 'event-blue') selected @endif>Azul</option>
                                                                    <option value="event-indigo" @if( $data->event_theme == 'event-indigo') selected @endif>Indigo</option>
                                                                    <option value="event-orange" @if( $data->event_theme == 'event-orange') selected @endif>Naranja</option>
                                                                    <option value="event-purple" @if( $data->event_theme == 'event-purple') selected @endif>Purpura</option>
                                                                    <option value="event-dark" @if( $data->event_theme == 'event-dark') selected @endif>Negro</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-5 mb-3 text-right">
                                                    <div class="form-group ">
                                                        <button type="submit"
                                                            class="btn btn-lg btn-primary">Guardar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end page content -->

@endsection
@section('scripts')
    <script src="{{ asset('pagejs/template.js') }}"></script>
@endsection
