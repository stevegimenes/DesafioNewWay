<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cafeteria New Way</title>

        <!-- Vendors -->

        <!-- Animate CSS -->
        <link href="/js/bower_components/animate.css/animate.min.css" rel="stylesheet">

        <!-- Material Design Icons -->
        <link href="/js/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- Malihu Scrollbar -->
        <link href="/js/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet">

        <!-- SweetAlert -->
        <link href="/js/bower_components/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

        <!-- Select 2 -->
        <link href="/js/bower_components/select2/dist/css/select2.min.css" rel="stylesheet">


        <!-- Site CSS -->
        <link href="/css/app-1.min.css" rel="stylesheet">
    </head>

    <body>
        <!-- Page Loader -->
        <div id="page-loader">
            <div class="preloader preloader--xl preloader--light">
                <svg viewBox="25 25 50 50">
                    <circle cx="50" cy="50" r="20" />
                </svg>
            </div>
        </div>

        <!-- Header -->
        <header id="header">
            <div class="logo">
                <a href="/" class="hidden-xs">
                    Cafeteria
                    <small>New Way</small>
                </a>
                <i class="logo__trigger zmdi zmdi-menu" data-mae-action="block-open" data-mae-target="#navigation"></i>
            </div>
        </header>

        <section id="main">
            <aside id="navigation">
                <div class="navigation__header">
                    <i class="zmdi zmdi-long-arrow-left" data-mae-action="block-close"></i>
                </div>

                <div class="navigation__toggles">
                    &nbsp;
                </div>

                <div class="navigation__menu c-overflow">
                    <ul>
                        <li class="{{ ($controller == '' ? 'navigation__active' : '') }}">
                            <a href="/"><i class="zmdi zmdi-home"></i> Home</a>
                        </li>
                        <li class="{{ ($controller == 'CategoryController' ? 'navigation__active' : '') }}">
                            <a href="/categories"><i class="zmdi zmdi-label"></i> Categorias</a>
                        </li>
                        <li class='{{ ($controller == 'ItemController' ? 'navigation__active' : '') }}'>
                            <a href="/items"><i class="zmdi zmdi-coffee"></i> Produtos</a>
                        </li>
                    </ul>
                </div>
            </aside>

            <section id="content">
                @yield('content')
            </section>
        </section>

        <!-- Older IE Warning -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1>Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="ie-warning__container">
                    <ul class="ie-warning__download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->


        <!-- Javascript Libraries -->

        <!-- jQuery -->
        <script src="/js/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="/js/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Malihu ScrollBar -->
        <script src="/js/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

        <!-- Bootstrap Notify -->
        <script src="/js/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>

        <!-- SweetAlert -->
        <script src="/js/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>

        <!-- Select 2 -->
        <script src="/js/bower_components/select2/dist/js/select2.full.min.js"></script>

        <!-- Simple File Input -->
        <script src="/js/fileinput/fileinput.min.js"></script>

        <!-- Auto Size Textarea -->
        <script src="/js/bower_components/autosize/dist/autosize.min.js"></script>

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="/js/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <!-- Page loader -->
        <script src="/js/page-loader.min.js"></script>

        <!-- Demo Only -->
        <script src="/js/misc.js"></script>

        <!-- Site Functions & Actions -->
        <script src="/js/app.min.js"></script>

        <!-- Scripts de Automatização -->
        <script src="/js/scripts.js"></script>
    </body>
</html>
