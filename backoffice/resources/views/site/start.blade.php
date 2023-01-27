@extends('layouts.site.app')

@section('content')

<section class="bg-home4 overflow-hidden" id="home">
    <div class="container">
        <div class="position-relative" style="z-index: 1;">
            <div class="row align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div>
                        <h6 class="home-subtitle text-primary mb-4">Solicite sua Revisão</h6>
                        <h1>Informe seus dados e anexe o arquivo com seu texto.</h1>
                        <form method="POST" action="{{ route('signup') }}" enctype="multipart/form-data" class="contact-form mt-4">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="position-relative mb-3">
                                        <span class="input-group-text"><i class="mdi mdi-account-outline"></i></span>
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Nome" required="">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="position-relative mb-3">
                                        <span class="input-group-text"><i class="mdi mdi-email-outline"></i></span>
                                        <input name="email" id="email" type="email" class="form-control" placeholder="E-mail" required="">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="position-relative mb-3">
                                        <span class="input-group-text"><i class="mdi mdi-lock-outline"></i></span>
                                        <input name="password" id="password" type="password" class="form-control" placeholder="Senha" required="">
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="position-relative mb-3">
                                        <span class="input-group-text"><i class="mdi mdi-file-document-outline"></i></span>
                                        <input name="file" id="file" type="file" class="form-control" required="">
                                        @error('file')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-end">
                                    <button name="submit" type="submit" id="submit" class="btn btn-primary">Enviar Solicitação<i class="mdi mdi-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6 offset-xl-1">
                    <div class="mt-lg-0 mt-5">
                        <img src="/site/images/home/home1.png" alt="home04" class="home-img">
                    </div>
                </div>
            </div>

        </div>
    </div>

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


@endsection
