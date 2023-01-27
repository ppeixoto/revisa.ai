<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Revisa aí - Seu aplicativo de revisões online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplicativo de revisão de textos para diversos fins" />
    <meta name="keywords" content="grmática, correção de texto" />
    <meta content="Revisa Aí" name="author" />


    <link rel="shortcut icon" href="site/images/favicon.ico" />


    <link href="/site/css/bootstrap.min.css" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" href="/site/css/materialdesignicons.min.css" type="text/css" />


    <link rel="stylesheet" href="/site/css/swiper-bundle.min.css" type="text/css" />


    <link href="/site/css/style.min.css" rel="stylesheet" type="text/css" />


    <link href="/site/css/colors/default.css" rel="stylesheet" type="text/css" id="color-opt" />

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-navlist" data-bs-offset="60">


    <div id="preloader">
        <div id="status">
            <div class="load">
                <hr />
                <hr />
                <hr />
                <hr />
            </div>
        </div>
    </div>



    <nav id="navbar" class="navbar navbar-expand-lg fixed-top sticky">
        <div class="container">
            <a class="navbar-brand" href="{{ route('site.home') }}">Revisa.Aí</a>
            <a class="btn-sm btn-primary" href="{{ route('login') }}">Entrar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu text-muted"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="navbar-navlist">
                    <li class="nav-item">
                        <a class="nav-link active" href="@if(!request()->routeIs('site.home')){{route('site.home')}}@endif#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="@if(!request()->routeIs('site.home')){{route('site.home')}}@endif#features">Como funciona</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="@if(!request()->routeIs('site.home')){{route('site.home')}}@endif#client">Quem usa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="@if(!request()->routeIs('site.home')){{route('site.home')}}@endif#price">Valores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="@if(!request()->routeIs('site.home')){{route('site.home')}}@endif#faq">Perguntas Frequentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="@if(!request()->routeIs('site.home')){{route('site.home')}}@endif#about">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="@if(!request()->routeIs('site.home')){{route('site.home')}}@endif#contact">Contato</a>
                    </li>
                </ul>

                {{-- <ul class="list-inline mb-0 ps-lg-4 ms-2">
                    <li class="list-inline-item">
                        <a href="#" class="primary-link"><i class="mdi mdi-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="primary-link"><i class="mdi mdi-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="primary-link"><i class="mdi mdi-instagram"></i></a>
                    </li>
                </ul> --}}
            </div>

        </div>

    </nav>


    @yield('content')


    <footer class="bg-dark section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <ul class="list-inline social-list mb-0">
                            <li class="list-inline-item"><a href="#" class="social-icon footer-link"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-icon footer-link"><i class="mdi mdi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-icon footer-link"><i class="mdi mdi-linkedin"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-icon footer-link"><i class="mdi mdi-google-plus"></i></a></li>
                        </ul>

                    </div>
                    <div class="footer-terms">
                        <ul class="mb-0 list-inline text-center mt-4">
                            <li class="list-inline-item"><a href="#" class="footer-link">Temos de Uso</a></li>
                            <li class="list-inline-item"><a href="#" class="footer-link">Política de Privacidade</a></li>
                            <li class="list-inline-item"><a href="#" class="footer-link">Entre em Contato</a></li>
                        </ul>
                    </div>

                    <div class="mt-4 pt-2 text-center">
                        <p class="text-white-50 mb-0">
                            <script>
                                document.write(new Date().getFullYear())

                            </script> &copy; Revisa.Ai - Landing Page</a>
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </footer>




    <div class="modal fade" id="presentationVideo" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content  bg-transparent border-0">
                <div class="modal-body p-0">
                    <div class="text-end">
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="ratio ratio-16x9">
                        <video id="VisaChipCardVideo" class="video-box" controls>
                            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>

            </div>

        </div>

    </div>



    <button onclick="topFunction()" id="back-to-top">
        <i class="mdi mdi-arrow-up"></i>
    </button>




    <script src="/site/js/bootstrap.bundle.min.js"></script>


    <script src="/site/js/swiper-bundle.min.js"></script>


    <script src="/site/js/contact.js"></script>


    <script src="/site/js/index.init.js"></script>


    <script src="/site/js/app.js"></script>
</body>

</html>
