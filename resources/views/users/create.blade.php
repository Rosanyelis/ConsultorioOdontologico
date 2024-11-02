@extends('layouts.app')
@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Agregar Usuarios</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    <a href="{{ route('user.index') }}" class="btn btn-icon btn-secondary d-md-none"><em class="icon ni ni-arrow-left"></em></a>
                                                    <a href="{{ route('user.index') }}" class="btn btn-secondary d-none d-md-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Regresar</span></a>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="card card-preview">
                                    <div class="card-inner">
                                        <form class="row gy-2 form-validate" action="{{ route('user.store') }}" method="POST">
                                            @csrf

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Nombre de Usuario</label>
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

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="name">Rol</label>
                                                    <div class="form-control-wrap">
                                                        <select class="form-select" name="rol" data-placeholder="Seleccione un rol">
                                                            <option value="">Seleccione un rol</option>
                                                            @foreach ($roles as $item)
                                                            <option value="{{ $item->name }}" @if (old('rol') == $item->name)  selected @endif>{{ $item->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if ($errors->has('rol'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('rol') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="correo">Correo</label>
                                                    <div class="form-control-wrap">
                                                        <input type="email" name="email" class="form-control"
                                                            id="correo" placeholder="Ejm: janedoe@example.com"
                                                            value="{{ old('email') }}">

                                                        @if ($errors->has('email'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('email') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label class="form-label" for="password">Contraseña</label>
                                                    <div class="form-control-wrap">
                                                        <input type="password" name="password" class="form-control"
                                                            id="password" placeholder="*********">
                                                        @if ($errors->has('password'))
                                                            <span class="invalid text-danger">
                                                                {{ $errors->first('password') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group float-right">
                                                    <button type="submit" class="btn btn-primary">Guardar Usuario</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>
                        </div>
                        <!-- end page title -->
@endsection
