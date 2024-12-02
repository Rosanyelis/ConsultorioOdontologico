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
                                            <h3 class="nk-block-title page-title">Cotizaciones y Presupuesto</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    <a href="{{ route('quote.create') }}" class="btn btn-icon btn-primary d-md-none">
                                                        <em class="icon ni ni-plus"></em></a>
                                                    <a href="{{ route('quote.create') }}" class="btn btn-primary d-none d-md-inline-flex">
                                                        <em class="icon ni ni-plus"></em><span>Agregar Cotización</span></a>
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
                                                    <th>Nro. Cotización</th>
                                                    <th>Paciente</th>
                                                    <th>Telefono</th>
                                                    <th>Correo</th>
                                                    <th>Fecha de Creación</th>
                                                    <th>Fecha de Venc.</th>
                                                    <th class="text-right">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $quote)
                                                    <tr>
                                                        <td>{{ $quote->id }}</td>
                                                        <td>{{ $quote->dni }} - {{ $quote->firstname }} {{ $quote->lastname }} </td>
                                                        <td>{{ $quote->phone }}</td>
                                                        <td>{{ $quote->email }}</td>
                                                        <td>{{ $quote->created_at->format('d-m-Y') }}</td>
                                                        <td>{{ $quote->valid_end }}</td>
                                                        <td class="text-right">
                                                            <div class="dropdown float-right">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger pt-0 pb-0" data-toggle="dropdown">
                                                                    <em class="icon ni ni-more-h"></em>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li>
                                                                            <a href="{{ route('quote.show', $quote->id) }}">
                                                                                <em class="icon ni ni-eye"></em>
                                                                                <span>Ver</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="{{ route('quote.pdf', $quote->id) }}" target="_blank">
                                                                                <em class="icon ni ni-file-pdf"></em>
                                                                                <span>Pdf de Cotización</span>
                                                                            </a>
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

@endsection

@section('scripts')

@endsection
