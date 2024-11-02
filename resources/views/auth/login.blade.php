<!doctype html>
<html lang="zxx" class="js">

    <head>

        <meta charset="utf-8" />
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Sistema de Gestión expendientes de juzgados" name="description" />
        <meta content="Ross Digital" name="author" />
        <base href="../../../">
        <!-- Fav Icon  -->
        <link rel="shortcut icon" href="{{ asset('./images/favicon.png') }}">
        <!-- StyleSheets  -->
        <link rel="stylesheet" href="{{ asset('./assets/css/dashlite.css?ver=2.9.0') }}">
        <link id="skin-default" rel="stylesheet" href="{{ asset('./assets/css/theme.css?ver=2.9.0') }}">

    </head>

    <body class="nk-body ui-rounder npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-md">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                            </div>
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="brand-logo text-center">
                                    <a href="{{ route('login') }}" class="logo-link">
                                        <img class="logo-light logo-img logo-img-lg"
                                        src="{{ asset('') }}{{ $sucursal->logo_login }}"
                                            alt="logo">
                                        <img class="logo-dark logo-img logo-img-lg"
                                            src="{{ asset('') }}{{ $sucursal->logo_login }}"
                                            alt="logo-dark">
                                    </a>
                                </div>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title text-center">Iniciar Sesión</h5>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <form action="{{ url('login') }}" method="POST" class="form-validate is-alter" autocomplete="off">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="email-address">Email</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input autocomplete="off" type="text" class="form-control form-control-lg"
                                            name="email" required id="email-address"
                                            placeholder="janedoe@example.com">
                                        </div>
                                    </div><!-- .form-group -->
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Contraseña</label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg"
                                            required id="password" name="password" autocomplete="current-password"
                                            placeholder="*********">
                                        </div>
                                    </div><!-- .form-group -->
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Ingresar</button>
                                    </div>
                                </form><!-- form -->
                            </div><!-- .nk-block -->
                            <div class="nk-block nk-auth-footer">
                                <div class="nk-block-between">
                                    <ul class="nav nav-sm">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"></a>
                                        </li>
                                        <li class="nav-item">
                                            <p class="nav-link">2016 © {{ $sucursal->name }}</p>
                                        </li>
                                    </ul><!-- .nav -->
                                </div>
                            </div><!-- .nk-block -->
                        </div><!-- .nk-split-content -->
                        <div class="nk-split-content nk-split-stretch d-flex toggle-break-lg"
                        style="background-image: url({{ asset('images/bg-login1.jpg') }}); background-size: cover;">
                        </div><!-- .nk-split-content -->
                    </div><!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('./assets/js/bundle.js?ver=2.9.0') }}"></script>
    <script src="{{ asset('./assets/js/scripts.js?ver=2.9.0') }}"></script>
    <!-- select region modal -->


</html>
