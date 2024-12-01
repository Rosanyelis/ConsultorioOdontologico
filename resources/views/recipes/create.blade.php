@extends('layouts.app')

@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Receta de: {{ $data->firstname }} {{ $data->lastname }}</h3>
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
                                            <form id="form" action="{{ route('patient.store-recipe', $data->id) }}" method="POST">
                                                @csrf

                                                <div class="card-inner">
                                                    <div class="nk-block">
                                                        <div class="row gy-4 pb-4">
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="medicine">Medicamento</label>
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select" id="medicine"  data-placeholder="Seleccione" data-search="on" >
                                                                            <option value="">Seleccione</option>
                                                                            @foreach ($medicines as $item)
                                                                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="fw-vr-first-name">Dosis</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control " id="dose" placeholder="Ejm: 1 pastilla">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="instructions">Instrucciones de toma</label>
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select" id="instructions"  data-placeholder="Seleccione" data-search="on" >
                                                                            <option value="">Seleccione</option>
                                                                            @foreach ($indications as $item)
                                                                            <option value="{{ $item->description }}">{{ $item->description }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <button id="aggMedicine" type="button" class="btn btn-md btn-success mt-4">Agregar</button>
                                                            </div>
                                                        </div>
                                                        <div class="row gy-4">
                                                            <div class="col-xxl-12 col-md-12">
                                                                <div class="table-responsive">
                                                                    <table id="Medicamentos" class="table">
                                                                        <thead class="thead-light">
                                                                            <tr>
                                                                                <th scope="col">Medicamento</th>
                                                                                <th scope="col">Dosis</th>
                                                                                <th scope="col">Instrucciones</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>

                                                            <div class="col-xxl-12 col-xl-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="crowding">Observaciones</label>
                                                                    <div class="form-control-wrap">
                                                                        <textarea name="observation" class="form-control" id="" cols="30" rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="col-12 mt-3 mb-3 text-right">
                                                        <div class="form-group">
                                                            <input type="hidden" id="datosMedicamentos" name="recipes">
                                                            <button id="guardar" type="button" class="btn btn-primary">Guardar Receta</button>
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
@section('scripts')
    <script src="{{ asset('pagejs/recipes.js') }}"></script>
@endsection
