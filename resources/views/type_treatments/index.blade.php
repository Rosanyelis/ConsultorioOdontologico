@extends('layouts.app')
@section('styles')

@endsection
@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Tratamientos Odontológicos</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    <!-- <a href="#" class="btn btn-icon btn-info d-md-none">
                                                        <em class="icon ni ni-file-xls"
                                                        data-toggle="modal" data-target="#modalImport"></em></a>
                                                    <a href="#" class="btn btn-info d-none d-md-inline-flex"
                                                        data-toggle="modal" data-target="#modalImport">
                                                        <em class="icon ni ni-file-xls"></em><span>Importar Tipo de Tratamientos</span></a>
                                                    &nbsp;&nbsp; -->
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-primary d-md-none"
                                                        data-toggle="modal" data-target="#modalCreate">
                                                        <em class="icon ni ni-plus"></em></a>
                                                    <a href="javascript:void(0);" class="btn btn-primary d-none d-md-inline-flex"
                                                        data-toggle="modal" data-target="#modalCreate">
                                                        <em class="icon ni ni-plus"></em><span>Agregar Tratamientos</span></a>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="card card-preview">
                                    <div class="card-inner">
                                        <table class="datatable-init table">
                                            <thead>
                                                <tr>
                                                    <th width="50px">#</th>
                                                    <th>Tratamientos Odontológicos</th>
                                                    <th class="text-right">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td class="text-right">
                                                            <div class="dropdown float-right">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger pt-0 pb-0" data-toggle="dropdown">
                                                                    <em class="icon ni ni-more-h"></em>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li>
                                                                            <a href="#" class="delete-record" data-id="{{ $item->id }}">
                                                                                <em class="icon ni ni-trash text-danger"></em>
                                                                                <span>Eliminar</span>
                                                                            </a>
                                                                            <form id="formDelete-{{ $item->id }}" action="{{ route('medicine.destroy', ['id' => $item->id]) }}"method="POST">
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
                                </div><!-- .card-preview -->
                            </div>
                        </div>
                        <!-- end page title -->
                        @include('medicine.partials.modal-import')
                        @include('medicine.partials.modal-create')
@endsection

@section('scripts')
    <script src="{{ asset('pagejs/type_treatments.js') }}"></script>
@endsection
