@extends('layouts.app')
@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Editar Expediente</h3>
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
                                        <form class="row gy-2 form-validate" action="{{ route('expediente.update', $data->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Cliente</label>
                                                    <div class="form-control-wrap">
                                                        <select class="form-select form-control form-control-lg" data-search="on"
                                                            name="clientes_id">
                                                            <option value="">Seleccione un cliente</option>
                                                            @foreach ($clientes as $item)
                                                            <option value="{{ $item->id }}" @if ($data->clientes_id == $item->id) selected @endif >{{ $item->firstname }} {{ $item->second_name }} {{ $item->lastname }} {{ $item->second_surname }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if ($errors->has('clientes_id'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('clientes_id') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="asunto">Asunto</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="asunto" class="form-control"
                                                            id="asunto" value="{{ $data->asunto }}">
                                                        @if ($errors->has('asunto'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('asunto') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="numero_expendiente">Nro. de Expediente</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="numero_expendiente" class="form-control"
                                                            id="numero_expendiente" value="{{ $data->numero_expendiente }}">
                                                        @if ($errors->has('numero_expendiente'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('numero_expendiente') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="contraparte">Contraparte</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="contraparte" class="form-control"
                                                            id="contraparte"  value="{{ $data->contraparte }}">
                                                        @if ($errors->has('contraparte'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('contraparte') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Materias</label>
                                                    <div class="form-control-wrap">
                                                        <select class="form-select form-control form-control-lg" data-search="on"
                                                            name="materias_id">
                                                            <option value="">Seleccione una materia</option>
                                                            @foreach ($materias as $item)
                                                            <option value="{{ $item->id }}" @if ($data->materias_id == $item->id) selected @endif>{{ $item->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if ($errors->has('materias_id'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('materias_id') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Juzgados</label>
                                                    <div class="form-control-wrap">
                                                        <select class="form-select form-control form-control-lg" data-search="on"
                                                            name="juzgados_id">
                                                            <option value="">Seleccione un juzgada</option>
                                                            @foreach ($juzgados as $item)
                                                            <option value="{{ $item->id }}" @if ($data->juzgados_id == $item->id) selected @endif>{{ $item->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if ($errors->has('juzgados_id'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('juzgados_id') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="tipo_costo">Tipo de Costo de Asunto</label>
                                                    <div class="form-control-wrap">
                                                        <select id="tipo_costo" class="form-select form-control form-control-lg"
                                                            name="tipo_costo">
                                                            <option value="">Seleccione...</option>
                                                            <option value="Fijo" @if($data->tipo_costo == 'Fijo') selected @endif >Fijo</option>
                                                            <option value="Variable" @if($data->tipo_costo == 'Variable') selected @endif  >Variable</option>
                                                        </select>
                                                        @if ($errors->has('tipo_costo'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('tipo_costo') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="costo_porcentaje">Costo Porcentaje ($)</label>
                                                    <div class="form-control-wrap">
                                                        <input type="number" id="costo_porcentaje" name="costo_porcentaje" class="form-control"
                                                            id="costo_porcentaje" value="{{ $data->costo_porcentaje }}">
                                                        @if ($errors->has('costo_porcentaje'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('costo_porcentaje') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="porcentaje_asunto">Porcentaje de Asunto (%)</label>
                                                    <div class="form-control-wrap">
                                                        <input type="number" id="porcentaje_asunto" name="porcentaje_asunto" class="form-control"
                                                            id="porcentaje_asunto" value="{{ $data->porcentaje_asunto }}">
                                                        @if ($errors->has('porcentaje_asunto'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('porcentaje_asunto') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="valor_porcentaje" id="valor_porcentaje_title">Valor Porcentaje del Asunto ($)</label>
                                                    <div class="form-control-wrap">
                                                        <input type="number" id="valor_porcentaje" name="valor_porcentaje" class="form-control"
                                                            id="valor_porcentaje" value="{{ $data->valor_porcentaje }}">
                                                        @if ($errors->has('valor_porcentaje'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('valor_porcentaje') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group float-right">
                                                    <button type="submit" class="btn btn-primary">Actualizar expediente</button>
                                                </div>
                                            </div>
                                        </form>
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

                var costo_porcentaje = 0;// dinero
                var porcentaje_asunto = 0; // porcentaje
                var valor_porcentaje = 0;

                $('#tipo_costo').on('change', function(){
                    if($(this).val() == 'Fijo'){
                        $('#costo_porcentaje').val('').change();
                        $('#porcentaje_asunto').val('').change();
                        $('#costo_porcentaje').prop('disabled', true);
                        $('#porcentaje_asunto').prop('disabled', true);
                        $('#valor_porcentaje_title').text('Costo Asunto ($)');
                    }else{

                        $('#costo_porcentaje').prop('disabled', false);
                        $('#porcentaje_asunto').prop('disabled', false);
                        $('#valor_porcentaje_title').text('Valor Porcentaje del Asunto ($)');
                    }
                })

                $('#costo_porcentaje').on('change', function(){
                    costo_porcentaje = $(this).val();
                });

                $('#porcentaje_asunto').on('change', function(){
                    porcentaje_asunto = $(this).val() / 100;
                    valor_porcentaje = (costo_porcentaje * porcentaje_asunto);
                    $('#valor_porcentaje').val(valor_porcentaje);
                });

            })(NioApp, jQuery);
        </script>
@endsection
