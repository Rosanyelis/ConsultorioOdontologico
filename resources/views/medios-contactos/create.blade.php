@extends('layouts.app')
@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Agregar Medio de Contacto</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    <a href="{{ route('medio-contacto.index') }}" class="btn btn-icon btn-secondary d-md-none"><em class="icon ni ni-arrow-left"></em></a>
                                                    <a href="{{ route('medio-contacto.index') }}" class="btn btn-secondary d-none d-md-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Regresar</span></a>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="card card-preview">
                                    <div class="card-inner">
                                        <form class="row gy-2 form-validate" action="{{ route('medio-contacto.store') }}" method="POST">
                                            @csrf
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Medio de Contacto</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" name="name" class="form-control"
                                                            id="name" placeholder="Ejm: Jane Doe" value="{{ old('name') }}">
                                                        @if ($errors->has('name'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('name') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group float-right">
                                                    <button type="submit" class="btn btn-primary">Guardar Medio de Contacto</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>
                        </div>
                        <!-- end page title -->
@endsection
