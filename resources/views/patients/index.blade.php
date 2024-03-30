@extends('layouts.app')
@section('styles')
        <!-- DataTables -->
        <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables.net-select-bs4/css//select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
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
                                                        <td>#{{ $item->id }}</td>
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
                                                                        <li>
                                                                            <a href="#">
                                                                                <em class="icon ni ni-pen-fill"></em>
                                                                                <span>Editar</span>
                                                                            </a>
                                                                        </li>
                                                                        @if ($item->intraoral_exam->count() == 0)
                                                                        <li>
                                                                            <a href="{{ route('patient.examen-intraoral', $item->id) }}">
                                                                                <em class="icon ni ni-note-add"></em>
                                                                                <span>Realizar Examen IntraOral</span>
                                                                            </a>
                                                                        </li>
                                                                        @endif
                                                                        @if ($item->treatment_plan->count() == 0)
                                                                        <li>
                                                                            <a href="{{ route('patient.treatment-plan', $item->id) }}">
                                                                                <em class="icon ni ni-note-add"></em>
                                                                                <span>Realizar Plan de Tratamiento</span>
                                                                            </a>
                                                                        </li>
                                                                        @endif
                                                                        @if ($item->url_signature == '')
                                                                        <li>
                                                                            <a href="#">
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

@endsection
@section('scripts')
    <!-- Required datatable js -->
        <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <!-- Responsive examples -->
        <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

        <!-- Datatable init js -->
        <script>
            $(document).ready(function() {

            });
        </script>
@endsection
