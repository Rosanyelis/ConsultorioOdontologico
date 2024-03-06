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
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Pacientes</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Utility</a></li> -->
                                            <li class="breadcrumb-item active">Pacientes</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-row-reverse">
                                            <a href="button" class="btn btn-primary mb-4">
                                                <i class="ri-add-fill align-middle me-2"></i> Nuevo Paciente
                                            </a>
                                        </div>
                                        <table id="datatable" class="table table-striped dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th width="50px">#</th>
                                                    <th>Paciente</th>
                                                    <th>Edad</th>
                                                    <th class="float-end">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Rosa Menendez</td>
                                                    <td>27</td>
                                                    <td >
                                                        <div class="float-end">
                                                        <a href="button" class="btn btn-link btn-sm pt-0 pb-0">
                                                            <i class="ri-eye-fill"></i>
                                                        </a>
                                                        <a href="button" class="btn btn-link btn-sm pt-0 pb-0">
                                                            <i class="ri-pencil-fill"></i>
                                                        </a>
                                                        <a href="button" class="btn btn-link btn-sm pt-0 pb-0">
                                                            <i class="ri-delete-bin-5-fill"></i>
                                                        </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
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
                $("#datatable").DataTable({
                    language: {
                        url: '//cdn.datatables.net/plug-ins/2.0.1/i18n/es-ES.json',
                        paginate: {
                            previous: "<i class='mdi mdi-chevron-left'>",
                            next: "<i class='mdi mdi-chevron-right'>"
                        }
                    },
                    drawCallback: function() {
                        $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
                    }
                });
            });
        </script>
@endsection
