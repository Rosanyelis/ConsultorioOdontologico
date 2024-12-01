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
                                                    <th width="50px">#</th>
                                                    <th>Nro. Cotización</th>
                                                    <th>Paciente</th>
                                                    <th>Fecha de Creación</th>
                                                    <th>Fecha de Venc.</th>
                                                    <th class="text-right">Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $quote)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $quote->id }}</td>
                                                        <td>{{ $quote->patient->dni }} - {{ $quote->patient->firstname }} {{ $quote->patient->lastname }} </td>
                                                        <td>{{ $quote->created_at->format('d-m-Y') }}</td>
                                                        <td>{{ $quote->valid_end }}</td>
                                                        <td class="text-right">
                                                            <a href="{{ route('quote.show', $quote->id) }}" class="btn btn-sm btn-icon ">
                                                                <em class="icon ni ni-eye"></em>
                                                            </a>
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
