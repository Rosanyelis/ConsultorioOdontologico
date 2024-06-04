@extends('layouts.app')
@section('styles')
        <style>
            #signature-pad {
                border: 2px dotted #CCCCCC;
                border-radius: 5px;
                height: 200px;
            }
        </style>
@endsection
@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Pacientes</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    <a href="#" class="btn btn-icon btn-info d-md-none">
                                                        <em class="icon ni ni-file-xls"
                                                        data-toggle="modal" data-target="#modalImport"></em></a>
                                                    <a href="#" class="btn btn-info d-none d-md-inline-flex"
                                                        data-toggle="modal" data-target="#modalImport">
                                                        <em class="icon ni ni-file-xls"></em><span>Importar Pacientes</span></a>
                                                    &nbsp;&nbsp;
                                                    <a href="{{ route('patient.create') }}" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                    <a href="{{ route('patient.create') }}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Agregar Paciente</span></a>
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
                                                    <th>Paciente</th>
                                                    <th>Edad</th>
                                                    <th>Teléfono</th>
                                                    <th>Whatsapp</th>
                                                    <th>Última Visita</th>
                                                    <th class="text-right">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $item)
                                                    <tr>
                                                        <td>#{{ $loop->iteration }}</td>
                                                        <td>{{ $item->firstname }} {{ $item->lastname }}</td>
                                                        <td>{{ $item->age }}</td>
                                                        <td>{{ $item->phone }}</td>
                                                        <td>{{ $item->whatsapp }}</td>
                                                        <td>{{ $item->last_visit_date }}</td>
                                                        <td class="text-right">
                                                            <div class="dropdown float-right">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger pt-0 pb-0" data-toggle="dropdown">
                                                                    <em class="icon ni ni-more-h"></em>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li>
                                                                            <a href="{{ route('patient.show', $item->id) }}">
                                                                                <em class="icon ni ni-eye"></em>
                                                                                <span>Ver</span>
                                                                            </a>
                                                                        </li>
                                                                        @if (!$item->intraoral_exam)
                                                                        <li>
                                                                            <a href="{{ route('patient.examen-intraoral', $item->id) }}">
                                                                                <em class="icon ni ni-note-add"></em>
                                                                                <span>Realizar Examen IntraOral</span>
                                                                            </a>
                                                                        </li>
                                                                        @endif
                                                                        @if (!$item->treatment_plan)
                                                                        <li>
                                                                            <a href="{{ route('patient.treatment-plan', $item->id) }}">
                                                                                <em class="icon ni ni-note-add"></em>
                                                                                <span>Realizar Plan de Tratamiento</span>
                                                                            </a>
                                                                        </li>
                                                                        @endif
                                                                        @if ($item->url_signature == '')
                                                                        <li>
                                                                            <a href="{{ route('patient.signature', $item->id) }}">
                                                                                <em class="icon ni ni-edit-alt-fill"></em>
                                                                                <span>Agregar Firma</span>
                                                                            </a>
                                                                        </li>
                                                                        @endif
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
                        @include('patients.partials.modal-import')
@endsection

