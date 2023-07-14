<!DOCTYPE html>
<html lang="{{ config('app.locale') == 'pt_BR' ? 'pt-BR' : 'en' }}">

<head>
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ __('texts.meta_descricao') }}">
    <meta name="language" content="{{ config('app.locale') == 'pt_BR' ? 'pt' : 'en' }}">
    <meta name="robots" content="index,follow">
    <meta name="keywords" content="{{ __('texts.meta_keywords') }}">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="{{ __('texts.meta_descricao') }}"">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:type" content="website">
    <link rel="canonical" href="{{ url('/') }}">
    <!-- Bootstrap -->
    {{-- <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.3.0/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
        integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Video.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/video.js/8.3.0/video-js.min.css"
        integrity="sha512-IhUEHAVKtjGwKoBY2lnSHDo7Ivn9oKNLJMNbU6JygLxxfxj/12xby07R0KLu+3fJt6QbYukZZi5X6AaHr4MigQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Scripts -->
    <script src="{{ asset('assets/js/head.js') }}"></script>
    <!-- Estilo -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- Extras -->
    @yield('head')
</head>

<body class="">
    <script>
        setTheme()
    </script>
    <!-- Cabeçalho -->
    <header>
        <div class="header py-2 pb-lg-5" >
            <div id="myVideo">
                <img src="{{asset('assets/images/bg-headera.gif')}}" alt="">
            </div>
            {{-- <video class="play-video-headersss" style="display: none" id="myVideo"
                onloadedmetadata="this.muted = true;this.style.display='block';" playsinline autoplay muted loop>
                 <source src="{{ asset('assets/video/header-bg.mp4') }}" type="video/mp4">
            </video>  --}}



                <div class="container py-3 " style="z-index: 1 !important">
                <div class="row justify-content-center px-lg-4">
                    <div class="col-12 col-lg-11">
                        <nav class="navbar navbar-expand navbar-dark align-items-center">
                            <a class="navbar-brand" href="{{ route('home') }}">
                                <img class="d-none d-lg-inline-block" src="{{ asset('assets/images/logo.png') }}"
                                    alt="Indutiva Tecnologia" width="200">
                                <img class="d-lg-none " src="{{ asset('assets/images/logo-in-white.svg') }}"
                                    alt="Indutiva Tecnologia" width="40">
                            </a>
                            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="collapsibleNavId">
                                <ul class="navbar-nav ms-auto mt-2 mt-lg-0 gap-2 gap-lg-3">
                                    <li class="nav-item">
                                        <a href="https://wa.me/message/AJ2M3D7QJ7R7P1" target="_blank"
                                            class="btn btn-outline-light border-2 rounded-3 fw-500">
                                            {{ __('texts.entrar_em_contato') }}
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link  fw-500 text-white d-flex align-items-center gap-1"
                                            href="#" id="dropdownId" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            @if (config('app.locale') == 'pt_BR')
                                                <img src="{{ asset('assets/icons/icon-brazil.svg') }}" alt="Português"
                                                    class="icon-bandeira">
                                                <span class="d-none d-lg-inline-block">
                                                    Português
                                                </span>
                                            @else
                                                <img src="{{ asset('assets/icons/icon-usa.svg') }}" alt="English"
                                                    class="icon-bandeira">
                                                <span class="d-none d-lg-inline-block">
                                                    English
                                                </span>
                                            @endif
                                            <i class="fa-solid fa-chevron-down fs-12px"></i>
                                        </a>
                                        <div class="dropdown-menu py-0" aria-labelledby="dropdownId">
                                            @if (config('app.locale') == 'pt_BR')
                                                <a class="text-decoration-none text-white px-2 py-0 d-flex align-items-center gap-1"
                                                    href="{{ route('home', ['lg' => 'en']) }}"
                                                    style="margin-left: -1px">
                                                    <img src="{{ asset('assets/icons/icon-usa.svg') }}"
                                                        alt="English" class="icon-bandeira">
                                                    <span class="d-none d-lg-inline-block">
                                                        English
                                                    </span>
                                                </a>
                                            @else
                                                <a class="text-decoration-none text-white px-2 py-0 d-flex align-items-center gap-1"
                                                    href="{{ route('home', ['lg' => 'pt']) }}"
                                                    style="margin-left: -1px">
                                                    <img src="{{ asset('assets/icons/icon-brazil.svg') }}"
                                                        alt="Português" class="icon-bandeira">
                                                    <span class="d-none d-lg-inline-block">
                                                        Português
                                                    </span>
                                                </a>
                                            @endif

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>

            <!--  -->
            <div class="container text-white pt-lg-4 mt-lg-3 pb-5" style="z-index: 1 !important">
                <div class="row align-items-center pt-5 px-lg-4 gx-5 justify-content-center pb-4 ">
                    <div class="col-12 col-lg-6" style="z-index: 1 !important">
                        <h1 class="fw-700 mb-3 h1-title">
                            {{ __('texts.sistemas_personalizados_para_empresarios') }}
                        </h1>
                        <p class="fw-500 fs-4 p-header">
                            {{ __('texts.papeis_e_planilhas_sao_coisas_do_passado') }}
                        </p>
                        <div class="mt-4 pt-3 d-flex flex-column flex-lg-row gap-3 gap-lg-2 align-items-lg-center">
                            <div class="">
                                <a class="btn btn-primary btn-lg fs-5 fw-500 border-0 btn-primary-custom"
                                    href="https://wa.me/message/AJ2M3D7QJ7R7P1" target="_blank">
                                    {{ __('texts.quero_um_sistema') }}
                                </a>
                            </div>
                            <div class="">
                                <button type="button"
                                    class="btn btn-none text-white d-flex gap-1 border-0 align-items-center p-0 ps-1">
                                    <img src="{{ asset('assets/icons/play-circle.svg') }}" alt=""
                                        width="22" class="iconplay">
                                    {{ __('texts.ver_video') }}
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <!-- Vídeo -->

                        <div class="d-block d-lg-none balao-rotacao d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/images/logo-in.svg') }}" class="img-logo-in"
                                alt="Logo Indutiva Tecnologia">
                            @if (config('app.locale') == 'pt_BR')
                                <img src="{{ asset('assets/images/text-rotate.png') }}" class="img-text-rotate "
                                    alt="Texto em rotação">
                                <img src="{{ asset('assets/images/text-rotate-white.png') }}"
                                    class="img-text-rotate img-text-rotate-dark " alt="Texto em rotação">
                            @else
                                <img src="{{ asset('assets/images/text-rotate-en.png') }}" class="img-text-rotate "
                                    alt="Rotating text">
                                <img src="{{ asset('assets/images/text-rotate-en-white.png') }}"
                                    class="img-text-rotate img-text-rotate-dark " alt="Rotating text">
                            @endif
                        </div>

                        <button type="button" class="btn btn-none border-0  position-relative p-0"
                            id="btn-play-video-2" data-bs-toggle="modal" data-bs-target="#modal-video-header"
                            onclick="clickPlayerHeader()">
                            <div class="video-header d-flex align-items-center justify-content-center">
                                <img src="{{ asset('assets/images/ilust-empresas.jpg') }}" alt="Vídeo"
                                    class="img-video-previa w-100" id="img-video-previa">
                                <img src="{{ asset('assets/icons/play-circle-blue.svg') }}" alt="Play"
                                    width="130" class="" id="img-play-viedo-header">
                            </div>
                        </button>
                        <div class="d-none d-lg-flex balao-rotacao d-flex align-items-center justify-content-center">
                            <img src="{{ asset('assets/images/logo-in.svg') }}" class="img-logo-in"
                                alt="Logo Indutiva Tecnologia">
                            @if (config('app.locale') == 'pt_BR')
                                <img src="{{ asset('assets/images/text-rotate.png') }}" class="img-text-rotate "
                                    alt="Texto em rotação">
                                <img src="{{ asset('assets/images/text-rotate-white.png') }}"
                                    class="img-text-rotate img-text-rotate-dark " alt="Texto em rotação">
                            @else
                                <img src="{{ asset('assets/images/text-rotate-en.png') }}" class="img-text-rotate "
                                    alt="Rotating text">
                                <img src="{{ asset('assets/images/text-rotate-en-white.png') }}"
                                    class="img-text-rotate img-text-rotate-dark " alt="Texto em rotação">
                            @endif
                        </div>

                    </div>
                </div>
            </div>
            <div class="pb-lg-4" style="z-index: 1 !important"></div>
        </div>
    </header>
    <div class="position-relative">
        <div class="class-ajuste-header">
        </div>
    </div>

    <main>
        @yield('content')
    </main>


    <!-- Modal Vídeo Header -->
    <div class="modal fade " id="modal-video-header" tabindex="-1" data-bs-keyboard="false" data-bs-backdrop="static" role="dialog"
        aria-labelledby="ModalVideo" aria-hidden="true">
        <button type="button" class="btn btn-none border-0 text-light opacity-75 fechar-modal"
            data-bs-dismiss="modal" id="closeModal" title="Fechar">
            <i class="fa-solid fa-xmark fa-2x"></i>
        </button>
        <input type="hidden" name="" id="linguagem" value="{{config('app.locale')}}">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
            <div class="modal-content rounded-0 bg-transparent">
                <div class="modal-body bg-dark">
                    @if (config('app.locale') == 'pt_BR')


                          <div id="player"></div>



                {{--  <video id="video-modal-header" class="video-js" controls preload="auto" poster-1=""
                        data-setup="{}">
                        <source
                            src="https://youtu.be/NAIWXKniRoA"
                            type="video/mp4" />
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                        </p>
                    </video> --}}

                    @else
                    <div id="player"></div>
                   {{-- <video id="video-modal-header" class="video-js" controls preload="auto" poster-1=""
                        data-setup="{}">
                        <source
                            src=""
                            type="video/mp4" />
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                        </p>
                    </video> --}}

                    @endif
                </div>
            </div>
        </div>
    </div>



    <!-- Whatsapp -->
    <div class="class-btn-whatsapp">
        <a href="https://wa.me/message/AJ2M3D7QJ7R7P1" target="_blank">
            <img src="{{ asset('assets/icons/btn-whatsapp.svg') }}" alt="Entrar em contato" class="btn-whatsapp">
        </a>
    </div>


    <footer>
        <div class="bg-white pb-5 pt-3 pt-lg-5">
            <div class="container text-dark ">
                <div class="row align-items-center px-lg-4 gx-5 justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-8 row">
                        <div class="col-12 col-lg-12 mx-auto">
                            <hr class="hr-dividor-footer">
                            <div class="row gy-4  py-4">
                                <div class="col-6 col-lg-3">
                                    <a href="https://www.instagram.com/indutiva_tecnologia.oficial/" target="_blank"
                                        class="d-flex align-items-center gap-1 fw-500 text-decoration-none link-dark">
                                        <img src="{{ asset('assets/icons/instagram.svg') }}" alt="Instagram"
                                            width="18" height="18">
                                        Instagram
                                    </a>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <a href="https://www.facebook.com/IndutivaTecnologia" target="_blank"
                                        class="d-flex align-items-center gap-1 fw-500 text-decoration-none link-dark">
                                        <img src="{{ asset('assets/icons/facebook.svg') }}" alt="Facebook"
                                            width="18" height="18">
                                        Facebook
                                    </a>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <a href="https://www.linkedin.com/company/indutiva-tecnologia/mycompany/"
                                        target="_blank"
                                        class="d-flex align-items-center gap-2 fw-500 text-decoration-none link-dark">
                                        <img src="{{ asset('assets/icons/linkedin.svg') }}" alt="Linkedin"
                                            width="18" height="18">
                                        Linkedin
                                    </a>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <a href="tel:+5562983391219"
                                        class="d-flex align-items-center gap-1 fw-500 text-decoration-none link-dark">
                                        <img src="{{ asset('assets/icons/phone.svg') }}" alt="(62) 98339-1219"
                                            width="18" height="18">
                                        (62) 98339-1219
                                    </a>
                                </div>
                            </div>
                            <hr class="hr-dividor-footer">
                            <div class="row gy-4 justify-content-lg-between mt-5 pt-4 mb-4">
                                <div class="col-12 col-lg-9 order-2 order-lg-1">
                                    <div
                                        class="pt-4 pt-lg-0 d-flex flex-column flex-lg-row gap-4 align-items-center text-center text-lg-start">
                                        <div class="">
                                            <img src="{{ asset('assets/icons/indutiva-blue.svg') }}"
                                                class="d-none d-lg-inline-block" alt="Indutiva Tecnologia"
                                                width="35">
                                            <img src="{{ asset('assets/images/logo-blue.svg') }}"
                                                class="d-inline-block d-lg-none" alt="Indutiva Tecnologia"
                                                width="150">
                                        </div>
                                        <div class="small text-gray">
                                            <div class="mb-1 mb-lg-0">Indutiva Tenologia - CNPJ 34.812.013/0001-87
                                            </div>
                                            <div class="">Copyright © 2023 Indutiva.
                                                {{ __('texts.todos_os_direitos_reservados') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 order-1 order-lg-2">
                                    <button type="button" id="alternar-tema"
                                        class="btn-alternar-tema btn btn-outline-dark d-flex align-items-center gap-1 fs-14px">
                                        <img src="{{ asset('assets/icons/sun-blue.svg') }}" alt="Claro"
                                            id="icon-claro" width="16">
                                        <img src="{{ asset('assets/icons/moon.svg') }}" alt="Escuro"
                                            id="icon-escuro" width="16" style="display: none">
                                        <span id="text-modo-tema">{{ __('texts.modo_escuro') }}</span>

                                        <div
                                            class="checkbox-custom form-check form-switch my-0 ms-auto ms-lg-0 py-0 d-flex align-items-center ">
                                            <label for="checkbox-alternar-tema" class="visually-hidden">Alternar
                                                tema</label>
                                            <input class="form-check-input my-0" type="checkbox" role="switch"
                                                id="checkbox-alternar-tema" checked>
                                        </div>

                                        {{-- <i class="fa-solid fa-chevron-up ms-2 fs-11px ms-auto ms-lg-2"></i> --}}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scritps -->
    <!-- Bootstrap -->
    {{-- <script src="{{ asset('assets/bootstrap-5.3.0/js/bootstrap.bundle.min.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"
        integrity="sha512-VK2zcvntEufaimc+efOYi622VN5ZacdnufnmX7zIhCPmjhKnOi9ZDMtg1/ug5l183f19gG1/cBstPO4D8N/Img=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Vídeo JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/8.3.0/video.min.js"
        integrity="sha512-2uqQaCV1+Xwdhj0ZwOuckUfVRwK+uWl372jXlURTK376U/rt0pg8zwEKYlMhzTg6JsyUciE0ogqEXJ54TDfgOg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Variáveis -->
    <script>
        var textModoClaro = "{{ __('texts.modo_claro') }}"
        var textModoEscuro = "{{ __('texts.modo_escuro') }}"
    </script>
    <!-- Script Principal -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Scripts Extras -->
    @yield('scripts')
</body>

</html>
