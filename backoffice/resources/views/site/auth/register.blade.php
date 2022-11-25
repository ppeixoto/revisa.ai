@extends('layouts.site.app')

@section('content')
<div class="container">
    <div class="section-header left mb-4">
    </div>
    <div class="row">
        <div class="col-lg-12 col-12 " style="margin-bottom: 30px;">
            <div class="card">
                <div class="card-body" style="padding: 20px 10%; align-items: center; text-align: center;">
                    <h3>Criar Conta</h3>
                    <span style="display:inline-flex;">Você ainda não tem conta em nosso site?</span>
                    <span style="display:inline-flex;">Cadastra-se para fazer sua Compra.</span>
                    <!-- <span style="display:inline-flex;">Compre e Divirta-se !!!</span> -->

                    <form id="login-form3" method="post" class="login-form" action="{{ route('signup') }}">
                        @csrf
                        <div class="row mt-3">
                            <div class="form-group col-md-12 col-12">
                                <input type="text" class="form-control mb10" value="" required="" placeholder="Digite seu Nome" name="name">
                            </div>

                            <div class="form-group col-md-12 col-12">
                                <input type="email" class="form-control mb10" value="" required="" placeholder="E-mail" name="email">
                            </div>

                            <div class="form-group col-md-12 col-12">
                                <input type="password" class="form-control mb10" value="" required="" placeholder="Senha" name="password">
                            </div>

                            <div class="form-group col-md-12 col-12 centralizarTextoMobile" style="text-align: center;">
                                <button style="padding: 10px 20px; width:50%!important;" type="submit" class="btn btn-success btn-lg w-100">Cadastrar-se</button>
                                <div class="msg-error2 mt-4"></div>
                                <div class="msg-reply2 mt-4"></div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</div>
@endsection
