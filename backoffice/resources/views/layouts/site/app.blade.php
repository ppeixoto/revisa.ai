<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Revisa aí - Seu aplicativo de revisões online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Aplicativo de revisão de textos para diversos fins" />
    <meta name="keywords" content="grmática, correção de texto" />
    <meta content="Revisa Aí" name="author" />

    <!-- favicon -->
    <link rel="shortcut icon" href="site/images/favicon.ico" />

    <!-- Bootstrap css-->
    <link href="/site/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- Materialdesign icon-->
    <link rel="stylesheet" href="/site/css/materialdesignicons.min.css" type="text/css" />

    <!-- Swiper Slider css -->
    <link rel="stylesheet" href="/site/css/swiper-bundle.min.css" type="text/css" />

    <!-- Custom Css -->
    <link href="/site/css/style.min.css" rel="stylesheet" type="text/css" />

    <!-- colors -->
    <link href="/site/css/colors/default.css" rel="stylesheet" type="text/css" id="color-opt" />

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-navlist" data-bs-offset="60">

    <!--start page Loader -->
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
    <!--end page Loader -->

    <!-- START NAVBAR -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top sticky">
        <div class="container">
            <a class="navbar-brand" href="index-1.html">Revisa.Aí</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu text-muted"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="navbar-navlist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Como funciona</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#client">Quem usa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#price">Valores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">Perguntas Frequentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contato</a>
                    </li>
                </ul>
                <!--end navbar-nav-->
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
            <!--end collapse-->
        </div>
        <!--end container-->
    </nav>
    <!-- END NAVBAR -->

    @yield('content')

    <!-- START FOOTER -->
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
                        <!--end social-->
                    </div>
                    <div class="footer-terms">
                        <ul class="mb-0 list-inline text-center mt-4">
                            <li class="list-inline-item"><a href="#" class="footer-link">Temos de Uso</a></li>
                            <li class="list-inline-item"><a href="#" class="footer-link">Política de Privacidade</a></li>
                            <li class="list-inline-item"><a href="#" class="footer-link">Entre em Contato</a></li>
                        </ul>
                    </div>
                    <!--end footer-terms-->
                    <div class="mt-4 pt-2 text-center">
                        <p class="text-white-50 mb-0">
                            <script>
                                document.write(new Date().getFullYear())

                            </script> &copy; Revisa.Ai - Landing Page</a>
                        </p>
                    </div>
                </div>
                <!--end row-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </footer>
    <!-- END FOOTER -->


    <!-- Modal -->
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
                <!--end modal-body-->
            </div>
            <!--end modal-content-->
        </div>
        <!--end modal-dialog-->
    </div>
    <!--end modal-->

    <!--start back-to-top-->
    <button onclick="topFunction()" id="back-to-top">
        <i class="mdi mdi-arrow-up"></i>
    </button>
    <!--end back-to-top-->


    <!-- Bootstrap Bundale js -->
    <script src="/site/js/bootstrap.bundle.min.js"></script>

    <!-- Swiper Slider js -->
    <script src="/site/js/swiper-bundle.min.js"></script>

    <!-- Contact Js -->
    <script src="/site/js/contact.js"></script>

    <!-- Index-init Js -->
    <script src="/site/js/index.init.js"></script>

    <!-- App js -->
    <script src="/site/js/app.js"></script>
</body>

</html>
