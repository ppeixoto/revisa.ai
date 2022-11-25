@extends('layouts.site.app')

@section('content')
<div class="container">
    <div class="section-header left mb-4">
    </div>
    <div class="row">
        <div class="col-lg-12 col-12 mb-5">
            <div class="card">
                <div class="card-body" style="padding: 20px 10%; align-items: center; text-align: center;">
                    <h1>Acesse sua conta</h1>
                    <form id="login-form2" action="{{ route('signin') }}" method="post" class="login-form" novalidate="novalidate">
                        @csrf
                        <div class="row mt-3">
                            <div class="form-group col-md-12 col-12">
                                <input type="email" class="form-control mb10" required="" placeholder="E-mail" name="email" value="">
                            </div>
                            <div class="form-group col-md-12 col-12">
                                <input type="password" class="form-control mb10" required="" placeholder="Senha ou Cpf" name="password">
                            </div>
                            <div class="form-group col-md-12 col-12">
                                <button style="padding: 10px 20px; width:50%!important;" type="submit" class="btn btn-success btn-lg  w-100">Entrar</button>
                                <div class="msg-error mt-4"></div>
                                <div class="msg-reply mt-4"></div>
                            </div>
                        </div>
                    </form>

                    <div class="link-forget">
                        <a href="https://mercadodebandas.com.br/esqueci-senha" style="margin-bottom: 15px; margin-right: 15px;">Esqueceu sua senha?</a>
                        <a href="https://mercadodebandas.com.br/esqueci-email">Esqueceu seu email?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
