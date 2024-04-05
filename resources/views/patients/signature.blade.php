@extends('layouts.app')
@section('styles')
        <style>
            #signature-pad {
                border: 2px dotted #CCCCCC;
                border-radius: 5px;
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
                                            <h3 class="nk-block-title page-title">Firma de Paciente</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    <a href="{{ route('patient.index') }}" class="btn btn-icon btn-secondary d-md-none"><em class="icon ni ni-arrow-left"></em></a>
                                                    <a href="{{ route('patient.index') }}" class="btn btn-secondary d-none d-md-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Regresar</span></a>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-inner-group">
                                            <form action="{{ route('patient.store-signature', $data->id) }}" method="POST">
                                                @csrf
                                                <div class="card-inner">
                                                    <div class="nk-block">
                                                        <form>
                                                            <div class="row gy-4 justify-content-md-center">
                                                                <div class="col-md-8 " >
                                                                    <div id="signature-pad" class="signature-pad">
                                                                        <div class="signature-pad--body">
                                                                            <canvas></canvas>
                                                                        </div>
                                                                        <div class="signature-pad--footer">
                                                                            <div class="signature-pad--actions">
                                                                                <div>
                                                                                    <button type="button" class="btn btn-secondary btn-sm clear" data-action="clear">Limpiar</button>
                                                                                    <button type="button" class="btn btn-info btn-sm save" data-action="save-png">Guardar Firma</button>
                                                                                </div>
                                                                                <div>
                                                                                    <!-- <button type="button" class="button save" data-action="save-jpg">Save as JPG</button>
                                                                                    <button type="button" class="button save" data-action="save-svg">Save as SVG</button> -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-3 mb-3 text-right">
                                                                <div class="form-group">
                                                                    <input id="inputSignature" type="hidden" name="signature" value="">
                                                                    <button type="submit" class="btn btn-primary">Procesar Firma en Sistema</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
@endsection
@section('scripts')
        <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.2.0/dist/signature_pad.umd.min.js"></script>
        <script src="{{ asset('js/signature.js') }}"></script>

@endsection
