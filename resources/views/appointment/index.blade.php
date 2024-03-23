@extends('layouts.app')
@section('content')
                        <!-- start page title -->
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Citas</h3>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <a href="#" class="btn btn-primary" data-toggle="modal"
                                                data-target="#addEventPopup"><em class="icon ni ni-plus"></em>
                                                <span>Añadir Cita</span>
                                            </a>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-inner">
                                            <div id="calendar" class="nk-calendar"></div>
                                        </div>
                                    </div>
                                    @include('appointment.partials.modal-create')
                                    @include('appointment.partials.modal-show')
                                    @include('appointment.partials.modal-delete')
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
@endsection
@section('scripts')
        <script src="{{ asset('./assets/js/libs/fullcalendar.js?ver=2.9.0') }}"></script>
        <script src="{{ asset('./assets/js/apps/calendar.js?ver=2.9.0') }}"></script>
        <script>
            (function(NioApp, $){
                'use strict';

            })(NioApp, jQuery);
        </script>
@endsection
