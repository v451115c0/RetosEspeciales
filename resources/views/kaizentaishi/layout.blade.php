
@php
    date_default_timezone_set('America/Mexico_City');
@endphp

<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <title>@yield('titulo')</title>
        <link rel="icon" type="image/x-icon" href="https://nikkenlatam.com/favicon.ico"/>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
        <link href="{{asset('retos/bootstrap/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('retos/css/plugins.css')}}" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="{{asset('retos/plugins/table/datatable/datatables.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('retos/plugins/table/datatable/custom_dt_zero_config.css')}}">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css">

        <script src="{{asset('retos/js/libs/jquery-3.1.1.min.js')}}"></script>
        <script src="{{asset('retos/bootstrap/js/popper.min.js')}}"></script>
        <script src="{{asset('retos/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('retos/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{asset('retos/js/custom.js')}}"></script>

        <script src="{{asset('retos/plugins/sweetalerts/promise-polyfill.js')}}"></script>
        <link href="{{asset('retos/plugins/sweetalerts/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('retos/plugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('retos/css/ui-kit/custom-sweetalert.css')}}" rel="stylesheet" type="text/css" />
        
        <script src="{{asset('retos/plugins/sweetalerts/sweetalert2.min.js')}}"></script>
        <script src="{{asset('retos/plugins/sweetalerts/custom-sweetalert.js')}}"></script>

        <script src="{{asset('retos/plugins/table/datatable/datatables.js')}}"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.2.1/js/dataTables.buttons.min.js"></script>
        <script type="text/javascript" language="javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
        <script type="text/javascript" language="javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
        <script type="text/javascript" language="javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
        <script type="text/javascript" language="javascript" src="//cdn.datatables.net/buttons/1.2.1/js/buttons.html5.min.js"></script>

        <link href="{{asset('retos/css/ui-kit/custom-modal.css')}}" rel="stylesheet" type="text/css" />
        <script src="{{asset('retos/js/modal/classie.js')}}"></script>

        @yield('styles')
        <style>
            .form-control {
                border: 1px solid #ccc;
                color: #888ea8;
                font-size: 15px;
            }
            code { color: #3862f5; }
            .form-control:disabled, .form-control[readonly] { background-color: #f1f3f9; border-color: #f1f3f1; }
            .btn-primary.disabled, .btn-primary:disabled { background-color: #3862f5; border-color: #3862f5; }
            label { color: #3b3f5c; margin-bottom: 14px; }
            .form-control::-webkit-input-placeholder { color: #888ea8; font-size: 15px; }
            .form-control::-ms-input-placeholder { color: #888ea8; font-size: 15px; }
            .form-control::-moz-placeholder { color: #888ea8; font-size: 15px; }
            .form-control:focus { border-color: #3862f5; }
            .input-group-text {
                background-color: #f3f4f7;
                border-color: #e9ecef;
                color: #6156ce;
            }
            select.form-control {
                display: inline-block;
                width: 100%;
                height: calc(2.25rem + 2px);
                vertical-align: middle;
                background: #fff url({{ asset('retos/img/arrow-down.png') }}) no-repeat right .75rem center;
                background-size: 13px 14px;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
            }
            select.form-control::-ms-expand { display: none; }

            .alert-success > .close{
                display: none;
            }

            .pointer{
                cursor: pointer;
            }

            #chat-circle {
                position: fixed;
                bottom: 55px;
                right: 15px;
                background-color: transparent;
                border-radius: 5px;
                color: #fff;
                padding: 0;
                z-index: 999;
                cursor: pointer;
                box-shadow: none;
                outline: 0;
                -webkit-transition: background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1), color 0.2s cubic-bezier(0.4, 0, 0.2, 1), -webkit-box-shadow 0.2s cubic-bezier(0.4, 0, 1, 1);
                transition: background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1), color 0.2s cubic-bezier(0.4, 0, 0.2, 1), -webkit-box-shadow 0.2s cubic-bezier(0.4, 0, 1, 1);
                -o-transition: box-shadow 0.2s cubic-bezier(0.4, 0, 1, 1), background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1), color 0.2s cubic-bezier(0.4, 0, 0.2, 1);
                transition: box-shadow 0.2s cubic-bezier(0.4, 0, 1, 1), background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1), color 0.2s cubic-bezier(0.4, 0, 0.2, 1);
                transition: box-shadow 0.2s cubic-bezier(0.4, 0, 1, 1), background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1), color 0.2s cubic-bezier(0.4, 0, 0.2, 1), -webkit-box-shadow 0.2s cubic-bezier(0.4, 0, 1, 1);
                will-change: box-shadow, transform;
            }

            #chat-circle i {
                font-size: 30px;
                color: #fff;
                padding: 16px;
                background: #5c1ac3;
                background-image: none;
                background-image: linear-gradient(to right, #5E51F0 0%, #1ABC9C 100%);
                border-radius: 50%;
                letter-spacing: 0;
            }
        </style>
    </head>
    <body class="default-sidebar">
        <header class="tabMobileView header navbar fixed-top d-lg-none">
            <div class="nav-toggle">
                    <a href="javascript:void(0);" class="nav-link sidebarCollapse" data-placement="bottom">
                        <i class="flaticon-menu-line-2"></i>
                    </a>
                <a href="javascript:void(0);" class=""> <img src="https://services.nikken.com.mx/img/icons/logo_nikken_white.png" class="img-fluid" alt="logo"></a>
            </div>
            <ul class="nav navbar-nav">
                <li class="nav-item d-lg-none"> 
                    
                </li>
            </ul>
        </header>
        <header class="header navbar fixed-top navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse d-none d-lg-block" data-placement="bottom">
                <i class="flaticon-menu-line-2"></i>
            </a>
        </header>
        <div class="main-container" id="container">
            <div class="overlay"></div>
            <div class="cs-overlay"></div>
            <div class="sidebar-wrapper sidebar-theme">
                <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
                <nav id="sidebar" style="/*position: fixed; width: 17%;*/">
                    <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
                        <li class="nav-item d-flex">
                            <a href="javascript:void(0)" class="navbar-brand">
                                <img src="https://services.nikken.com.mx/img/icons/logo_nikken_white.png" class="img-fluid" alt="logo">
                            </a>
                            <p class="border-underline"></p>
                        </li>
                        <li class="nav-item theme-text">
                            <a href="javascript:void(0)" class="nav-link"> NIKKEN </a>
                        </li>
                    </ul>
                    <ul class="list-unstyled menu-categories" id="accordionExample">
                        <li class="menu">
                            <a href="javascript:void(0)" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                                <div class="">
                                    &nbsp;&nbsp;&nbsp;
                                    <i class="flaticon-user-11"></i>
                                    <span>Retos especiales</span>
                                </div>
                            </a>
                            <ul class="submenu list-unstyled collapse show" id="ecommerce" data-parent="#accordionExample" style="">
                                <li>
                                    <a href="https://services.nikken.com.mx/kiai/{{ $associateidencode }}">Club Viajeros</a>
                                </li>
                                <li>
                                    <a href="https://services.nikken.com.mx/viajeros_premium/{{ $associateidencode }}" target="_new">Viajeros Premium</a>
                                </li>
                                <li>
                                    <a href="https://services.nikken.com.mx/serpro/{{ $associateidencode }}/N">Reto Ser Pro</a>
                                </li>
                                <li>
                                    <a href="https://services.nikken.com.mx/kaizen/{{ $associateidencode }}">Equipo Kaizen</a>
                                </li>
                                <li>
                                    <a href="https://services.nikken.com.mx/taishi/{{ $associateidencode }}" >Equipo Taishi</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

            @yield('kaizenphp1')

            <div id="content" class="main-content">
                <div class="container">
                    <div class="page-header">
                        <div class="page-title">
                            <h3>@yield('reto')</h3>
                        </div>
                    </div>

                    @yield('kiai')

                    @yield('respro')

                    @yield('kaizen')

                    @yield('taishi')

                    @yield('no')

                </div>
            </div>
        </div>

        <div id="chat">
            <div id="chat-circle" class="btn btn-raised d-lg-block bs-tooltip" data-placement="left" title="¿Necesitas ayuda? Ve nuestro tutorial" data-toggle="modal" data-target=".mdl-tutorial">
                <i class="flaticon-question"></i>
            </div>
            <div class="modal fade bd-example-modal-lg mdl-tutorial" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="myExtraLargeModalLabel"></h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="stopVideo()">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="py-3 text-center">
                                <video controls="true" class="embed-responsive-item" width="100%">
                                    <source src="{{ asset('retos/img/tutorial.m4v') }}" type="video/mp4" />
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('kaizenphp2')

        <footer class="footer-section theme-footer">
            <div class="footer-section-1  sidebar-theme">
            </div>
            <div class="footer-section-2 container-fluid">
                <div class="row">
                    <div id="toggle-grid" class="col-xl-7 col-md-6 col-sm-6 col-12 text-sm-left text-center">
                        
                    </div>
                    <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                        <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                            <li class="list-inline-item  mr-3">
                                <p class="bottom-footer">&#xA9; {{ Date('Y')}} <a href="javascript:void(0)">NIKKEN Latinoamerica</a> &nbsp;&nbsp;&nbsp;v. 2.0</p>
                            </li>
                            <li class="list-inline-item align-self-center">
                                <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </body>
    <script src="{{asset('retos/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('retos/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('retos/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('retos/plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('retos/plugins/blockui/jquery.blockUI.min.js')}}"></script>
    <script src="{{asset('retos/js/app.js')}}"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153578520-1"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });

        function stopVideo(){
            $('video')[0].pause();
        }
    </script>
    <script src="{{asset('retos/js/custom.js')}}"></script>
    <script>
        $(function() {
            $.noConflict();
            $('#zero-config').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.11/i18n/Spanish.json"
                },
                dom: 'Bfrtip',
                buttons: [
                    { extend: 'excel', className: 'btn btn-fill btn-fill-dark btn-rounded mb-4 mr-3', text:"<img src='{{ asset('retos/img/excel.png') }}' width='15px'></img> Exportar a Excel",}
                ]
            });
            $('#vgpFinalTxt').text($('#vpFinalLabel').text());
        });
    </script>
    @yield('scripts')
</html>