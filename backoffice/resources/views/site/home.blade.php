@extends('layouts.site.app')

@section('content')
<!-- START HOME -->
<section class="bg-home4 overflow-hidden" id="home">
    <div class="container">
        <div class="position-relative" style="z-index: 1;">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div>
                        <h6 class="home-subtitle text-primary mb-4">Revisa Aí</h6>
                        <h1>Revisões de texto brilhantes, de forma simplificada</h1>
                        <p class="text-black-50 fs-17 pt-4">Escreva textos ousados, claros e sem erros, para diversas finalidades.</p>
                        <div class="text-center subscribe-form mt-5">
                            <a href="{{ route('site.start') }}" style="position: relative; text-transform: uppercase; top: 6px; right: 32px; outline: none; border-radius: 30px; font-size: 16px; padding: 9px 124px;" class="btn btn-primary">Solicitar Revisão</a>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-lg-6 offset-xl-1">
                    <div class="mt-lg-0 mt-5">
                        <img src="/site/images/home/home1.png" alt="home04" class="home-img">
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
    <!--end container-->
</section>
<div class="position-relative">
    <div class="shape overflow-hidden text-white position-absolute">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 100%;" height="250" preserveAspectRatio="none" viewBox="0 0 1440 250">
            <g mask="url(&quot;#SvgjsMask1006&quot;)" fill="none">
                <path d="M 0,246 C 288,210 1152,102 1440,66L1440 250L0 250z" fill="rgba(255, 255, 255, 1)"></path>
            </g>
            <defs>
                <mask id="SvgjsMask1006">
                    <rect width="1440" height="250" fill="#ffffff"></rect>
                </mask>
            </defs>
        </svg>
    </div>
</div>
<!-- END HOME -->



<!-- START FEATURES -->
<section class="section" id="features">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-5">
                    <h3>Como Funciona?</h3>
                    <p class="text-muted">Seu texto passará por diversas etapas de correção.</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="feature-box card border-0 mt-3">
                    <div class="card-body">
                        <div class="feature-icon mx-auto">
                            <i class="mdi mdi-chart-areaspline"></i>
                        </div>
                        <div class="mt-4">
                            <h6 class="mb-3 fs-17">Inteligência Artificial</h6>
                            <p class="text-muted"> Através de modelos altamente treinados, a inteligência artificial é a primeira etapa no processo de correção.</p>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end feature-box-->
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6">
                <div class="feature-box card border-0 mt-3">
                    <div class="card-body">
                        <div class="feature-icon mx-auto">
                            <i class="mdi mdi-gift"></i>
                        </div>
                        <div class="mt-4">
                            <h6 class="mb-3 fs-17">Estilo de Escrita</h6>
                            <p class="text-muted">Através de modelos altamente treinados, a inteligência artificial é a primeira etapa no processo de correção.</p>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end feature-box-->
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6">
                <div class="feature-box card border-0 mt-3">
                    <div class="card-body">
                        <div class="feature-icon mx-auto">
                            <i class="mdi mdi-xml"></i>
                        </div>
                        <div class="mt-4">
                            <h6 class="mb-3 fs-17">Precisão Técnica</h6>
                            <p class="text-muted">Através de modelos altamente treinados, a inteligência artificial é a primeira etapa no processo de correção.</p>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end feature-box-->
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6">
                <div class="feature-box card border-0 mt-3">
                    <div class="card-body">
                        <div class="feature-icon mx-auto">
                            <i class="mdi mdi-webpack"></i>
                        </div>
                        <div class="mt-4">
                            <h6 class="mb-3 fs-17">Fluxo Lógico</h6>
                            <p class="text-muted">Através de modelos altamente treinados, a inteligência artificial é a primeira etapa no processo de correção.</p>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end feature-box-->
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6">
                <div class="feature-box card border-0 mt-3">
                    <div class="card-body">
                        <div class="feature-icon mx-auto">
                            <i class="mdi mdi-responsive"></i>
                        </div>
                        <div class="mt-4">
                            <h6 class="mb-3 fs-17">Aprimoramento de conteúdo</h6>
                            <p class="text-muted">Através de modelos altamente treinados, a inteligência artificial é a primeira etapa no processo de correção.</p>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end feature-box-->
            </div>
            <!--end col-->

            <div class="col-lg-4 col-md-6">
                <div class="feature-box card border-0 mt-3">
                    <div class="card-body">
                        <div class="feature-icon mx-auto">
                            <i class="mdi mdi-leaf"></i>
                        </div>
                        <div class="mt-4">
                            <h6 class="mb-3 fs-17">Acesso ao Profissional</h6>
                            <p class="text-muted"> Através de modelos altamente treinados, a inteligência artificial é a primeira etapa no processo de correção.</p>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
                <!--end feature-box-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- END FEATURES -->


<!-- START Process -->
<section class="section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-4">
                    <h3>Como funciona?</h3>
                    <p class="text-muted">Seu texto passará por diversos processos para ser corrigido e aprimorado.</p>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-10">
                <div class="timeline-page position-relative py-4">
                    <div class="timeline-item mb-lg-5 pb-5">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="text-center mb-5 mb-lg-0">
                                    <img src="/site/images/work-1.png" alt="Work" class="img-fluid">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
                                <div class="works-description-right text-start bg-light mx-lg-3 mx-4">
                                    <h5 class="fs-18">Envie seu texto</h5>
                                    <p class="text-muted mb-0">Seu texto será previamente analisado através de nossa inteligência artificial.</p>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end timeline-item-->

                    <div class="timeline-item mb-5 pb-5">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="works-description-left text-start bg-light mx-lg-3 mx-4 text-lg-end">
                                    <h5 class="fs-18">Revisão</h5>
                                    <p class="text-muted mb-0">Profissionais especializados farão a revisão e devidas correções do seu texto com base nos parâmetros especificados.
                                    </p>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6 order-first order-lg-last">
                                <div class="text-center mb-5 mb-lg-0">
                                    <img src="/site/images/work-2.png" alt="Work" class="img-fluid">
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end timeline-item-->
                    <div class="timeline-item">
                        <div class="row align-items-start">
                            <div class="col-lg-6">
                                <div class="text-center mb-5 mb-lg-0">
                                    <img src="/site/images/work-3.png" alt="Work" class="img-fluid">
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-lg-6">
                                <div class="works-description-right text-start bg-light mx-lg-3 mx-4">
                                    <h5 class="fs-18">Apresentação e Entrega</h5>
                                    <p class="text-muted mb-0">Seu texto será entregue com uma apresentação de todas as modificações que foram realizadas e seus respectivos motivos.</p>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end timeline-item-->
                </div><!-- timeline-page -->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- END Process -->


<!-- START CTA -->
<section class="bg-cta" style="background-image: url('images/bg-cta01.jpg');">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center text-white">
                    <h3 class="mb-3">Apresentação em vídeo</h3>
                    <p>Veja como funciona todo o processo do Revisa Aí.</p>
                    <a href="#presentationVideo" class="play-btn mt-4" data-bs-toggle="modal">
                        <i class="mdi mdi-play text-white"></i>
                    </a>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- END CTA -->


<!-- START CLIENTS -->
<section class="section bg-client bg-light" id="client" style="background-image: url('images/bg.jpg');background-size: cover;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center mb-5">
                    <h3>O que nossos usuários estão falando?</h3>
                    <p class="text-muted mt-2 mb-0">Levamos muito a sério nosso trabalho e isso transparece em feedbacks de nossos clientes</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="swiper-container testimonialslider">
                    <div class="swiper-wrapper pb-5">
                        <div class="swiper-slide">
                            <div class="testimonial-box text-center card border-0">
                                <div>
                                    <div class="testi-img position-relative d-inline-block">
                                        <img src="/site/images/users/img1.jpg" alt="" class="img-fluid rounded-circle">
                                        <div class="quote-icon">
                                            <i class="mdi mdi-format-quote-open"></i>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h6 class="mb-0 fs-17">Primeira Pessoa</h6>
                                        <p class="text-muted mb-0">João Peessoa - PB</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted mb-0">" Serviço Excelente. "</p>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end testimonial-box-->
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-box text-center card border-0">
                                <div>
                                    <div class="testi-img position-relative d-inline-block">
                                        <img src="/site/images/users/img2.jpg" alt="" class="img-fluid rounded-circle">
                                        <div class="quote-icon">
                                            <i class="mdi mdi-format-quote-open"></i>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h6 class="mb-0 fs-17">Segunda Pessoa</h6>
                                        <p class="text-muted mb-0">Recife - PE</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted mb-0">"Me ajudou muito no processo de correção para meu doutorado. "</p>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end testimonial-box-->
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-box text-center card border-0">
                                <div>
                                    <div class="testi-img position-relative d-inline-block">
                                        <img src="/site/images/users/img4.jpg" alt="" class="img-fluid rounded-circle">
                                        <div class="quote-icon">
                                            <i class="mdi mdi-format-quote-open"></i>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <h6 class="mb-0 fs-17">Terceira Pessoa</h6>
                                        <p class="text-muted mb-0">São Paulo - SP</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="text-muted mb-0">" Minhas petições estão em outro nível desde que comecei a usar. "</p>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end testimonial-box-->
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <!--end col-->
        <div class="row row-cols-md-5 row-cols-1 mt-4">
            <div class="col">
                <div class="client-images text-center mt-4">
                    <img src="/site/images/clients/01.png" alt="img1" class="img-fluid">
                </div>
            </div>
            <!--end col-->
            <div class="col">
                <div class="client-images text-center mt-4">
                    <img src="/site/images/clients/02.png" alt="img2" class="img-fluid">
                </div>
            </div>
            <!--end col-->
            <div class="col">
                <div class="client-images text-center mt-4">
                    <img src="/site/images/clients/03.png" alt="img3" class="img-fluid">
                </div>
            </div>
            <!--end col-->
            <div class="col">
                <div class="client-images text-center mt-4">
                    <img src="/site/images/clients/04.png" alt="img4" class="img-fluid">
                </div>
            </div>
            <!--end col-->
            <div class="col">
                <div class="client-images text-center mt-4">
                    <img src="/site/images/clients/05.png" alt="img5" class="img-fluid">
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- END CLIENTS -->


<!-- START FEATURE  -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="features-box">
                    <h3 class="mb-4">Nós somos um serviço totalmente inovador</h3>
                    <p class="text-muted mb-4">Nosso serviço é totalmente diferenciado, e aqui te damos os motivos.</p>
                    <div class="row" id="counter">
                        <div class="col-md-5 col-6">
                            <div>
                                <h5 class="counter_value" data-target="4954">&nbsp;</h5>
                                <h6 class="text-muted">Clientes Satisfeitos</h6>
                            </div>
                        </div>
                        <div class="col-md-5 col-6">
                            <div>
                                <h5 class="counter_value" data-target="7526">&nbsp;</h5>
                                <h6 class="text-muted">Textos Entregues</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-6 offset-lg-1">
                <div class="text-center mt-5 mt-lg-0">
                    <img src="/site/images/features.png" alt="Features" class="img-fluid">
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- END FEATURE -->


<!-- START PRICING -->
<section class="section bg-light" id="price">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-4">
                    <h3>Nossos Valores</h3>
                    <p class="text-muted mt-2">Nossa precificação de forma simples e direta.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="price-box card border-0 mt-4">
                    <div class="text-center">
                        <h5 class="mb-0">Avulso</h5>
                    </div>
                    <div class="plan-price text-center mt-4">
                        <h1 class="text-primary mb-0 display-4 fw-medium"><sup>R$</sup>0.05<sub class="text-muted">/palavra</sub></h1>
                    </div>
                    <div class="price-features mt-5">
                        <p> Funcionalidade 1: <span class="fw-medium float-end"><i class="mdi mdi-check text-success"></i></span></p>
                        <p> Funcionalidade 2: <span class="fw-medium float-end"><i class="mdi mdi-check text-success"></i></span></span></p>
                        <p> Funcionalidade 3: <span class="fw-medium float-end"><i class="mdi mdi-close text-danger"></i></span></span></p>
                        <p> Funcionalidade 4: <span class="fw-medium float-end"><i class="mdi mdi-close text-danger"></i></span></span></p>
                        <p> Funcionalidade 5: <span class="fw-medium float-end"><i class="mdi mdi-close text-danger"></i></span></span></p>
                    </div>
                    <div class="text-center mt-4">
                        <a href="#" class="btn btn-outline-primary w-100">Iniciar Agora</a>
                    </div>
                </div>
                <!--end pricing-box-->
            </div>
            <!--end col-->
            <div class="col-md-6 col-lg-6">
                <div class="price-box card border-0 mt-4">
                    <div class="ribbon">20% sale</div>
                    <div class="text-center">
                        <h5 class="mb-0">Membro</h5>
                    </div>
                    <div class="plan-price text-center mt-4">
                        <h1 class="text-primary mb-0 display-4 fw-medium"><sup>R$</sup>0.04<sub class="text-muted">/palavra</sub></h1>
                    </div>
                    <div class="price-features mt-5">
                        <p> Funcionalidade 1: <span class="fw-medium float-end"><i class="mdi mdi-check text-success"></i></span></p>
                        <p> Funcionalidade 2: <span class="fw-medium float-end"><i class="mdi mdi-check text-success"></i></span></span></p>
                        <p> Funcionalidade 3: <span class="fw-medium float-end"><i class="mdi mdi-check text-success"></i></span></span></p>
                        <p> Funcionalidade 4: <span class="fw-medium float-end"><i class="mdi mdi-check text-success"></i></span></span></p>
                        <p> Funcionalidade 5: <span class="fw-medium float-end"><i class="mdi mdi-check text-success"></i></span></span></p>
                    </div>
                    <div class="text-center mt-4">
                        <a href="#" class="btn btn-primary w-100">Iniciar Agora</a>
                    </div>
                </div>
                <!--end pricing-box-->
            </div>
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- END PRICING -->


<!-- START FAQ -->
<section class="section" id="faq">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-5 pb-2">
                    <h3>Perguntas Frequentes</h3>
                    <p class="text-muted mt-2">Veja aqui as principais .</p>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-4 pb-2">
                    <div class="faq d-flex">
                        <div class="icon flex-shrink-0 me-3">
                            1
                        </div>
                        <div class="content">
                            <h5 class="fs-17">Pergunta Principal 01</h5>
                            <p class="text-muted mb-0">Resposta a pergunta Principal 01.</p>
                        </div>
                    </div>
                </div>
                <div class="mb-4 pb-2">
                    <div class="faq d-flex">
                        <div class="icon flex-shrink-0 me-3">
                            2
                        </div>
                        <div class="content">
                            <h5 class="fs-17">Pergunta Principal 02</h5>
                            <p class="text-muted mb-0">Resposta a pergunta Principal 02.</p>
                        </div>
                    </div>
                </div>
                <div class="mb-4 pb-2">
                    <div class="faq d-flex">
                        <div class="icon flex-shrink-0 me-3">
                            3
                        </div>
                        <div class="content">
                            <h5 class="fs-17">Pergunta Principal 03</h5>
                            <p class="text-muted mb-0">Resposta a pergunta Principal 03.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--end col-->
            <div class="col-lg-6">
                <div class="mb-4 pb-4">
                    <div class="faq d-flex">
                        <div class="icon flex-shrink-0 me-3">
                            4
                        </div>
                        <div class="content">
                            <h5 class="fs-17">Pergunta Principal 04</h5>
                            <p class="text-muted mb-0">Resposta a pergunta Principal 04.</p>
                        </div>
                    </div>
                </div>
                <div class="query-form">
                    <h6 class="fs-18">Tem alguma pergunta que não está aqui?</h6>
                    <p class="text-muted">Mande sua pergunta no nosso e-mail</p>
                    <form action="#">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Digite o e-mail">
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- END FAQ -->


<!-- START ABOUT -->
<section class="section bg-light" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="text-center">
                    <h3>Quemm somos</h3>
                    <p class="text-muted pt-2">Nós somos uma equipe dinâmica de pessoas talentosas e inovadores com bastante experiência em revisões textuais.</p>
                </div>
            </div>
        </div>
        <!--end row-->


        <!-- START TEAM -->
        <div class="row mt-5">
            <div class="col-md-6 col-lg-3">
                <div class="card team-box border-0 bg-transparent mt-3">
                    <div class="position-relative mx-auto">
                        <img src="/site/images/users/img5.jpg" alt="team" height="200" class="img-fluid rounded-circle img-thumbnail">
                        <ul class="team-social list-unstyled">
                            <li><a href="#" class="primary-link"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="my-1"><a href="#" class="primary-link"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li><a href="#" class="primary-link"><i class="mdi mdi-skype"></i></a></li>
                        </ul>
                    </div>
                    <div class="card-body text-center">
                        <h6 class="mb-0"><a href="#" class="primary-link">Pessoa 01</a></h6>
                        <p class="text-muted fs-14 mb-0">CEO/Founder</p>
                    </div>
                </div>
                <!--end card-->
            </div>
            <!--end col-->

            <div class="col-md-6 col-lg-3">
                <div class="card team-box border-0 bg-transparent mt-3">
                    <div class="position-relative mx-auto">
                        <img src="/site/images/users/img6.jpg" alt="team" class="img-fluid rounded-circle img-thumbnail">
                        <ul class="team-social list-unstyled">
                            <li><a href="#" class="primary-link"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="my-1"><a href="#" class="primary-link"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li><a href="#" class="primary-link"><i class="mdi mdi-skype"></i></a></li>
                        </ul>
                        <!--end team-social-->
                    </div>
                    <div class="card-body text-center">
                        <h6 class="mb-0"><a href="#" class="primary-link">Pessoa 02</a></h6>
                        <p class="text-muted fs-14 mb-0">CTO/Co-Founder</p>
                    </div>
                </div>
                <!--end card-->
            </div>
            <!--end col-->

            <div class="col-md-6 col-lg-3">
                <div class="card team-box border-0 bg-transparent mt-3">
                    <div class="position-relative mx-auto">
                        <img src="/site/images/users/img7.jpg" alt="team" class="img-fluid rounded-circle img-thumbnail">
                        <ul class="team-social list-unstyled">
                            <li><a href="#" class="primary-link"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="my-1"><a href="#" class="primary-link"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li><a href="#" class="primary-link"><i class="mdi mdi-skype"></i></a></li>
                        </ul>
                        <!--end team-social-->
                    </div>
                    <div class="card-body text-center">
                        <h6 class="mb-0"><a href="#" class="primary-link">Pessoa 03</a></h6>
                        <p class="text-muted fs-14 mb-0">Web Designer</p>
                    </div>
                </div>
                <!--end card-->
            </div>
            <!--end col-->

            <div class="col-md-6 col-lg-3">
                <div class="card team-box border-0 bg-transparent mt-3">
                    <div class="position-relative mx-auto">
                        <img src="/site/images/users/img8.jpg" alt="team" class="img-fluid rounded-circle img-thumbnail">
                        <ul class="team-social list-unstyled">
                            <li><a href="#" class="primary-link"><i class="mdi mdi-facebook"></i></a></li>
                            <li class="my-1"><a href="#" class="primary-link"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li><a href="#" class="primary-link"><i class="mdi mdi-skype"></i></a></li>
                        </ul>
                        <!--end team-social-->
                    </div>
                    <div class="card-body text-center">
                        <h6 class="mb-0"><a href="#" class="primary-link">Pessoa 04</a></h6>
                        <p class="text-muted fs-14 mb-0">Web Developer</p>
                    </div>
                </div>
                <!--end card-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
        <!--END TEAM-->
    </div>
    <!--end container-->
</section>
<!-- END ABOUT -->


<!-- START CTA -->
<section class="bg-cta" style="background-image: url('/site/images/bg-cta02.jpg');">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center text-white">
                    <h2 class="mb-3">Inicie agora mesmo sua revisão de texto.</h2>
                    <p class="text-white-50 mb-0">Descomplique sua vida e tenha a melhor experiência em revisão de texto.</p>
                    <div class="mt-4 pt-4">
                        <a href="#subscribe" class="btn btn-outline-white" data-bs-toggle="modal">Iniciar</a>
                    </div>
                </div>
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!-- END CTA -->

<!--start contact-->
<section class="section bg-light" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="text-center mb-5">
                    <h3>Contato</h3>
                    <p class="text-muted mt-2">Ainda tem uma dúvida ou pergunta? Fale conosco.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="contact-details mb-4 mb-lg-0">
                    <p class="mb-3"><i class="mdi mdi-email-outline align-middle text-muted fs-20 me-2"></i> <span class="fw-medium">support@revisa.ai</span></p>
                    <p class="mb-3"><i class="mdi mdi-web align-middle text-muted fs-20 me-2"></i> <span class="fw-medium">revisa.ai</span></p>
                    <p class="mb-3"><i class="mdi mdi-phone align-middle text-muted fs-20 me-2"></i> <span class="fw-medium">+55 (83) 99999.9999</span></p>
                    <p class="mb-3"><i class="mdi mdi-hospital-building text-muted fs-20 me-2"></i> <span class="fw-medium">9:00 - 18:00 / Segunda à Sexta</span></p>
                    <p class="mb-3"><i class="mdi mdi-map-marker-outline text-muted fs-20 me-2"></i> <span class="fw-medium">Recife - Pernambuco - Brasil.</span></p>
                </div>
                <!--end contact-details-->
            </div>
            <!--end col-->
            <div class="col-lg-7">
                <form method="post" onsubmit="return validateForm()" class="contact-form" name="myForm" id="myForm">
                    <span id="error-msg"></span>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                                <input name="name" id="name" type="text" class="form-control" placeholder="Digite seu nome*">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <span class="input-group-text"><i class="mdi mdi-email-outline"></i></span>
                                <input name="email" id="email" type="email" class="form-control" placeholder="Digite seu email*">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="position-relative mb-3">
                                <span class="input-group-text"><i class="mdi mdi-file-document-outline"></i></span>
                                <input name="subject" id="subject" type="text" class="form-control" placeholder="Assunto">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="position-relative mb-3">
                                <span class="input-group-text align-items-start"><i class="mdi mdi-comment-text-outline"></i></span>
                                <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Digite sua mensagem*"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-end">
                            <input type="submit" id="submit" name="send" class="btn btn-primary" value="Enviar">
                        </div>
                    </div>
                </form>
                <!--end form-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>
<!--end contact-->

@endsection
