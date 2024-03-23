<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Consultorio Dental') }}</title>

        <meta content="Gestión de Consultorio Odontológico" name="description" />
        <meta content="Ross Digital" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('./images/favicon.png') }}">
        <!-- StyleSheets  -->
        <link rel="stylesheet" href="{{ asset('./assets/css/dashlite.css?ver=2.9.0') }}">
        <link id="skin-default" rel="stylesheet" href="{{ asset('./assets/css/theme.css?ver=2.9.0') }}">
        @yield('styles')
    </head>
    <body class="nk-body ui-rounder npc-default has-sidebar ">
        <div class="nk-app-root">
            <div class="nk-sidebar" data-content="sidebarMenu">
                @include('layouts.navigation')
            </div>

            <!-- main @s -->
            <div class="nk-main ">
                <!-- wrap @s -->
                <div class="nk-wrap ">
                    <!-- main header @s -->
                    @include('layouts.header')

                <!-- main header @e -->
                    <!-- content @s -->
                    <div class="nk-content ">
                        <div class="container-fluid">

                            @yield('content')
                            <!--<div class="nk-content-inner">
                                <div class="nk-content-body">
                                    <p>Starter page for Demo7 layout.</p>
                                </div>
                            </div>-->
                        </div>
                    </div>
                    <!-- content @e -->
                </div>
                <!-- wrap @e -->
            </div>

        <!-- main @e -->
        </div>
        <!-- app-root @e -->
        <!-- JavaScript -->
        <script src="{{ asset('./assets/js/bundle.js?ver=2.9.0') }}"></script>
        <script src="{{ asset('./assets/js/scripts.js?ver=2.9.0') }}"></script>
        <script>
            (function(NioApp, $){
                'use strict';

                @include('layouts.alerts')

            })(NioApp, jQuery);
        </script>
        @yield('scripts')
    </body>

</html>

