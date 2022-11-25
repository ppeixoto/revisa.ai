@extends('layouts.site.app')

@section('content')
    <main id="main" class="interno">
        <section class=" wow fadeInUp">
            <div class="container">
                <div class="section-header left mb-1">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ env('APP_URL') }}">HOME</a></li>
                            <li class="breadcrumb-item active" aria-current="page">ATENDIMENTO AO CLIENTE.</li>
                        </ol>
                    </nav>
                    <h3 class="text-left h3_mobile">Área de Contato</h2>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-12 ">
                        <div class="card mb-5">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h2 class="meuh2 h2_mobile">Dúvidas Frequentes</h2>
                            </div>
                            <div class="card-body">
                                <div class="accordion accord-faq" id="accordionExample">
                                    <?php foreach($faq as $key => $item): ?>
                                    <div class="card">
                                        <div class="card-header" id="heading_{{ $key }}">
                                            <h3 class="mb-0 ">
                                                <button class="btn btn-link meuh2 h3_mobile_2" type="button"
                                                    data-toggle="collapse" data-target="#colap_{{ $key }}"
                                                    aria-expanded="true" aria-controls="colap_{{ $key }}">
                                                    {{ $item->question }}
                                                </button>
                                            </h3>
                                        </div>
                                        <div id="colap_{{ $key }}" class="collapse contato_desc_mobile"
                                            aria-labelledby="heading_{{ $key }}" data-parent="#accordionExample">
                                            <div class="card-body">
                                                {{ $item->answer }}
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12 mb20">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h2 class="meuh2 h2_mobile">Enviar Mensagem</h2>
                            </div>
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        
                                        <a class="nav-link {{!$errors->storeOrder->count() ? 'active show' : ''}}" id="home-tab" data-toggle="tab" href="#home"
                                            role="tab" aria-controls="home" aria-selected="true">NÃO CONTRATEI <small
                                                class="d-block">mas tenho dúvidas</small>
                                        </a>
                                    </li>
                                    <li class="nav-item {{$errors->storeOrder->count() ? 'active show' : ''}}">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                            role="tab" aria-controls="profile" aria-selected="false">CONTRATEI <small
                                                class="d-block">e tenho dúvidas</small>
                                        </a>
                                    </li>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane {{!$errors->storeOrder->count() ? 'active' : ''}}" id="home" role="tabpanel" aria-labelledby="home-tab"
                                        data-id="SemEvento">
                                        <div class="row mt-3">
                                            <form name="contatoSemCompra" id="contatoSemCompra"
                                                action="{{ route('site.contact.store') }}"
                                                style="width: 100%; display: contents;" method="post">
                                                @csrf
                                                <div class="form-group mb20 col-md-6  col-12">
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Primeiro Nome" value="{{ old('name') }}">
                                                    @if($errors->store->first('email'))
                                                        <small class="text-danger">{{ $errors->store->first('email') }}</small>
                                                    @endif
                                                </div>
                                                <div class="form-group mb20 col-md-6  col-12">
                                                    <input type="text" class="form-control" name="last_name"
                                                        placeholder="Sobrenome" value="{{ old('last_name') }}">
                                                    @if($errors->store->first('last_name'))
                                                        <small class="text-danger">{{ $errors->store->first('last_name') }}</small>
                                                    @endif
                                                </div>

                                                <div class="form-group mb20 col-md-6 col-12">
                                                    <input type="text" class="form-control cpf" name="cpf"
                                                        placeholder="CPF" value="{{ old('cpf') }}">
                                                    @if($errors->store->first('cpf'))
                                                        <small class="text-danger">{{ $errors->store->first('cpf') }}</small>
                                                    @endif
                                                </div>

                                                <div class="form-group mb20 col-md-6 col-12">
                                                    <input type="text" class="form-control telefoneCel" name="phone"
                                                        placeholder="Seu Telefone" value="{{ old('phone') }}">
                                                    @if($errors->store->first('phone'))
                                                        <small class="text-danger">{{ $errors->store->first('phone') }}</small>
                                                    @endif
                                                </div>
                                                <div class="form-group mb20 col-md-12 col-12">
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Seu Email" value="{{ old('email') }}">
                                                    @if($errors->store->first('email'))
                                                        <small class="text-danger">{{ $errors->store->first('email') }}</small>
                                                    @endif
                                                </div>
                                                <div class="form-group mb20 col-md-12 col-12">
                                                    <textarea rows="5" class="form-control" name="message" id="mensagemContato" placeholder="Mensagem">{{ old('message') }}</textarea>
                                                    @if($errors->store->first('message'))
                                                        <small class="text-danger">{{ $errors->store->first('message') }}</small>
                                                    @endif
                                                </div>
                                                <label class="containerCheckbox"
                                                    style="font-size: 14px; margin-left: 15px;">Isto é uma RECLAMAÇÃO :(
                                                    <input type="checkbox" name="is_complaint" id="reclamacao">
                                                    <span class="checkmark" style="margin-left: 5px;"></span>
                                                </label>
                                                <div class="col-lg-12 ">
                                                    <span id="statusAjax"></span>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mt-2 text-center">
                                                        <button type="submit"
                                                            class="btn btn-success btn-lg w-100">Enviar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane {{$errors->storeOrder->count() ? 'active' : ''}}" id="profile" role="tabpanel" aria-labelledby="profile-tab"
                                        data-id="ComEvento">
                                        <div class="row mt-3">
                                            <form name="MensagemSemEvento" id="MensagemSemEvento" method="post"
                                                action="{{ route('site.contact.storeOrder') }}" style="width: 100%; display: contents;">
                                                @csrf
                                                <div class="form-group mb20 col-md-12 col-12">
                                                    <i>É preciso informar um pedido existente para prosseguir. O número do
                                                        pedido será validado automaticamente.</i>
                                                </div>
                                                <div class="form-group mb20 col-md-6 col-12">
                                                    <input type="text" class="form-control nPedido"
                                                        name="NpedidoContato2" id="NpedidoContato2"
                                                        placeholder="Nº Pedido">
                                                        @if($errors->storeOrder->first('order_id'))
                                                            <small class="text-danger">{{ $errors->storeOrder->first('order_id') }}</small>
                                                        @endif
                                                </div>
                                                <div class="form-group mb20 col-md-6 col-12">
                                                    <input type="text" class="form-control" readonly
                                                        name="eventoContato2" id="eventoContato2" placeholder="Atração">
                                                </div>
                                                <div class="col-lg-12 ">
                                                    <span id="statusBuscaPedido"></span>
                                                </div>
                                                <div class="form-group mb20 col-md-12  col-12">
                                                    <input type="text" class="form-control" readonly
                                                        name="nomeComprador2" id="nomeComprador2"
                                                        placeholder="Nome do Comprador">
                                                </div>
                                                <div class="form-group mb20 col-md-6 col-12">
                                                    <input type="text" class="form-control cpf" name="buyer_cpf"
                                                        placeholder="CPF do Comprador">
                                                        @if($errors->storeOrder->first('buyer_cpf'))
                                                            <small class="text-danger">{{ $errors->storeOrder->first('buyer_cpf') }}</small>
                                                        @endif
                                                </div>
                                                <div class="form-group mb20 col-md-6 col-12">
                                                    <input type="text" class="form-control" name="buyer_email"
                                                        placeholder="E-mail do Comprador">
                                                        @if($errors->storeOrder->first('buyer_email'))
                                                            <small class="text-danger">{{ $errors->storeOrder->first('buyer_email') }}</small>
                                                        @endif
                                                </div>

                                                <div class="form-group mb20 col-md-12 col-12 ">
                                                    <label class="containerCheckbox naoDono"
                                                        style="font-size: 14px;padding-top: 3px; ">O PEDIDO NÃO É MEU
                                                        <input type="checkbox" id="notMyOrder" name="not_my_order" {{old('not_my_order') ? 'checked=checked' : ''}}>
                                                        <span class="checkmark" style="margin-left: 5px;"></span>
                                                    </label>
                                                </div>

                                                <div class="form-group mb20 col-md-6  col-12 hideContent">
                                                    <input type="text" class="form-control" name="name"
                                                        placeholder="Seu Nome" value="{{ old('name') }}">
                                                        @if($errors->storeOrder->first('name'))
                                                            <small class="text-danger">{{ $errors->storeOrder->first('name') }}</small>
                                                        @endif
                                                </div>
                                                <div class="form-group mb20 col-md-6  col-12 hideContent">
                                                    <input type="text" class="form-control" name="last_name"
                                                        placeholder="Seu Sobrenome" value="{{ old('last_name') }}">
                                                        @if($errors->storeOrder->first('last_name'))
                                                            <small class="text-danger">{{ $errors->storeOrder->first('last_name') }}</small>
                                                        @endif
                                                </div>
                                                <div class="form-group mb20 col-md-6 col-12 hideContent">
                                                    <input type="text" class="form-control telefoneCel"
                                                        name="phone" placeholder="Seu Telefone" value="{{ old('phone') }}">
                                                        @if($errors->storeOrder->first('phone'))
                                                            <small class="text-danger">{{ $errors->storeOrder->first('phone') }}</small>
                                                        @endif
                                                </div>
                                                <div class="form-group mb20 col-md-6 col-12 hideContent">
                                                    <input type="email" class="form-control" name="email"
                                                        placeholder="Seu Email" value="{{ old('email') }}">
                                                        @if($errors->storeOrder->first('email'))
                                                            <small class="text-danger">{{ $errors->storeOrder->first('email') }}</small>
                                                        @endif
                                                </div>
                                                <div class="form-group mb20 col-md-12 col-12">
                                                    <textarea rows="5" class="form-control" name="message" id="mensagemContato2" placeholder="Mensagem">{{ old('message') }}</textarea>
                                                    @if($errors->storeOrder->first('message'))
                                                            <small class="text-danger">{{ $errors->storeOrder->first('message') }}</small>
                                                        @endif
                                                </div>
                                                <label class="containerCheckbox"
                                                    style="font-size: 14px; margin-left: 15px;">Isto é uma RECLAMAÇÃO :(
                                                    <input type="checkbox" name="is_complaint" id="reclamacao" {{old('is_complaint') ? 'checked=checked' : ''}}>
                                                    <span class="checkmark" style="margin-left: 5px;"></span>
                                                </label>

                                                <div class="col-lg-12 ">
                                                    <span id="statusContato"></span>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="mt-2 text-center">
                                                        <button type="submit"
                                                            class="btn btn-success btn-lg w-100">Enviar</button>
                                                    </div>
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5 col-12 ">
                        <div class="card mb-5">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h2 class="meuh2 h2_mobile">Nossas Informações</h2>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <iframe
                                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAGZfEZ_tVhzddxxAsKoPQM0ExJBDVTwxE&q=<?= rawurlencode('51110-160 Avenida do Líbano Pina Recife PE') ?>"
                                        width="100%" height="300" frameborder="0" style="border:0;"
                                        allowfullscreen=""></iframe>
                                </div>
                                <p>
                                    <strong>Shopping RioMar</strong><br />
                                    Avenida do Líbano, 251, Pina, Recife-PE<br />
                                    CEP: 51.110-160<br />
                                    Quiosque 119 - Em frente a Loja Nagem.<br /><br />

                                    <strong>SAC - Central de atendimento ao cliente:</strong><br />
                                    WhatsApp: (81) 9.8145-7889<br />
                                    Quiosque: (81) 3032-0093<br /><br />

                                    <strong>Horários de funcionamento do SAC:</strong><br />
                                    Segunda a Sábado: 09:00h às 22:00h<br />
                                    Domingo: 12:00h às 21:00h<br />
                                    <small>* Feriados a depender do Shopping.</small>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection


@push('custom-scripts')
    <script>
        $(document).ready(function() {
            changeNotMyOrderContent();

            $('.cpf').mask('999.999.999-99');

            $('.hideContent').hide();

            $("#notMyOrder").change(function() {
                changeNotMyOrderContent();
            });

        });

        function changeNotMyOrderContent() {
            if ($("#notMyOrder").is(":checked")) {
                $('.hideContent').show();
            } else {
                $('.hideContent').hide();
            }
        }
    </script>
@endpush
