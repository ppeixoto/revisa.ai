@extends('layouts.site.app')

@section('content')
<div class="container">
    <div class="section-header left mb-1">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('site.home') }}">HOME</a></li>
                <li class="breadcrumb-item active" aria-current="page">MINHA CONTA</li>
            </ol>
        </nav>

        <h2 class="text-left">MINHA CONTA</h2>
    </div>

    <!-- Nav tabs -->
    <ul class="nav nav-tabs tabs-minha-conta" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active show" id="pedidos-tab" data-toggle="tab" href="#pedidos" role="tab" aria-controls="pedidos" aria-selected="true">MEUS PEDIDOS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="perfil-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="perfil" aria-selected="false">MEUS DADOS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="cartoes-tab" data-toggle="tab" href="#cartoes" role="tab" aria-controls="cartoes" aria-selected="false">MEUS CARTÕES</a>
        </li>
    </ul>

    <div class="tab-content minha-conta">
        <div class="tab-pane" id="perfil" role="tabpanel" aria-labelledby="perfil-tab">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <form id="account-form" method="post" novalidate="novalidate">

                        <div class="row ">
                            <div class="col-md-6 boxsResumoDados" style="margin-top: 25px;">
                                <div class="card col-md-12 col-sm-12 col-xs-12" id="divAlteracaoCliente">
                                    <div class="card-header d-flex align-items-center justify-content-between" style="width: 105.4%; margin-left: -13px;">
                                        <h2 class="meuh2">INFORMAÇÕES PESSOAIS</h2>
                                        <h2 class="meuh2 clearReadOnlyParte1" style="cursor: pointer;">EDITAR</h2>
                                    </div>
                                    <div class="">

                                        <div class="row mt-3">
                                            <label class="col-sm-4 control-label " style="font-weight: 600; margin-bottom: 0px">Nome</label>
                                            <div class="col-sm-8 fontDados">{{ auth()->user()->name }}</div>
                                            <label class="col-sm-4 control-label " style="font-weight: 600; margin-bottom: 0px">Sobrenome</label>
                                            <div class="col-sm-8 fontDados"></div>
                                            <label class="col-sm-4 control-label " style="font-weight: 600; margin-bottom: 0px">CPF</label>
                                            <div class="col-sm-8 fontDados"></div>
                                            <label class="col-sm-4 control-label " style="font-weight: 600; margin-bottom: 0px">RG</label>
                                            <div class="col-sm-8 fontDados"></div>
                                            <label class="col-sm-4 control-label " style="font-weight: 600; margin-bottom: 0px">Telefone</label>
                                            <div class="col-sm-8 fontDados">(87)9 9950-7796</div>
                                            <label class="col-sm-4 control-label " style="font-weight: 600; margin-bottom: 0px">Telefone 2</label>
                                            <div class="col-sm-8 fontDados">
                                            </div>
                                            <label class="col-sm-4 control-label " style="font-weight: 600;">Email</label>
                                            <div class="col-sm-8 fontDados">{{ auth()->user()->email }}</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 boxsResumoEndereco" style="margin-top: 25px;">
                                <div class="card col-md-12 col-sm-12 col-xs-12" id="divAlteracaoCliente">
                                    <div class="card-header d-flex align-items-center justify-content-between" style="width: 105.4%; margin-left: -13px;">
                                        <h2 class="meuh2">MEUS ENDEREÇOS</h2>
                                        <h2 class="meuh2 newEndereco" style="cursor: pointer;">+ ADICIONAR</h2>
                                    </div>
                                    <div class="">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-5 mt-4 boxMeusDados" style="display: none;">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h2 class="meuh2">INFORMAÇÕES PESSOAIS </h2>
                                <strong class="meuh2 hideCardMeusDados" style="float: right;cursor: pointer;">X</strong>
                            </div>
                            <div class="card-body">
                                <div class="row mt-3">

                                    <div class="form-group col-md-6 col-12">
                                        <label>Primeiro nome *</label>
                                        <input type="text" readonly="" value="Talles" name="name" class="form-control readOnlyParte1 " id="name" placeholder="Nome">
                                        <em class="alert"></em>
                                    </div>
                                    <div class="form-group col-md-6  col-12">
                                        <label>Último nome *</label>
                                        <input type="text" readonly="" value="" name="last_name" class="form-control readOnlyParte1 " id="last_name" placeholder="Sobrenome">
                                        <em class="alert"></em>
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label>CPF *</label>
                                        <input type="text" readonly="" value="101.841.374-03" class="form-control cpf " name="cpf" id="cpf" placeholder="CPF" maxlength="14">
                                        <em class="alert"></em>
                                        <input type="hidden" id="isAlteraCpf" value="">
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label>RG *</label>
                                        <input type="text" value="1018" name="rg" class="form-control " id="rg" placeholder="RG">
                                        <em class="alert"></em>
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label>Data de nascimento *</label>
                                        <input type="text" readonly="" value="" name="birthday" class="form-control readOnlyParte1 " id="birthday" placeholder="Data de Nascimento" maxlength="10">
                                        <em class="alert"></em>
                                    </div>
                                    <div class="form-group col-md-6 col-12 ">
                                        <label>Gênero *</label><br>
                                        <span class="ml-3 mt-3 " style="float: left; ">
                                            <input disabled="" id="ndf" class="styled-radio radioGenero" value="Não definido" name="gender" type="radio">
                                            <label for="ndf"></label>
                                            <label for="ndf" class="fontSizeM radioGeneroConta marginBottomMobile20  "> Não definido </label>
                                        </span>
                                        <span class="ml-3 mt-3 " style="float: left; ">
                                            <input disabled="" id="Masculino" class="styled-radio radioGenero" value="Masculino" name="gender" type="radio">
                                            <label for="Masculino"></label>
                                            <label for="Masculino" class="fontSizeM radioGeneroConta marginBottomMobile20  "> Masculino </label>
                                        </span>
                                        <span class="ml-3 mt-3 " style="float: left; ">
                                            <input disabled="" id="Feminino" class="styled-radio radioGenero" value="Feminino" name="gender" type="radio">
                                            <label for="Feminino"></label>
                                            <label for="Feminino" class="fontSizeM radioGeneroConta"> Feminino </label>
                                        </span>
                                        <span class="ml-3 mt-3 " style="float: left; ">
                                            <input disabled="" id="LGBTQIA+" class="styled-radio radioGenero" value="LGBTQIA+" name="gender" type="radio">
                                            <label for="LGBTQIA+"></label>
                                            <label for="LGBTQIA+" class="fontSizeM radioGeneroConta"> LGBTQIA+ </label>
                                        </span>
                                        <span class="ml-3 mt-3 " style="float: left; ">
                                            <input disabled="" id="Outro" class="styled-radio radioGenero" value="Outro" name="gender" type="radio">
                                            <label for="Outro"></label>
                                            <label for="Outro" class="fontSizeM radioGeneroConta"> Outro </label>
                                        </span>
                                        <em class="alert"></em>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Telefone 1 *</label>
                                        <input type="text" readonly="" value="87999507796" name="phone" class="form-control readOnlyParte1 telefoneCel" id="phone" placeholder="Telefone" maxlength="14">
                                        <em class="alert"></em>
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Telefone 2</label>
                                        <input type="text" readonly="" value="" name="phone2" class="form-control readOnlyParte1 telefoneCel" id="phone2" placeholder="Telefone 2 (Opcional)" maxlength="14" autocomplete="off">
                                        <em class="alert"></em>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>E-mail *</label>
                                        <input name="email" readonly="" type="text" class="form-control readOnlyParte1 " id="email" placeholder="Email" value="tallesd2@hotmail.com">
                                        <em class="alert"></em>
                                    </div>
                                    <div class="form-group col-md-6 col-12 emailConfirmacaoDiv" style="display: none;">
                                        <label>Confirmação de E-mail *</label>
                                        <input name="emailConfirma" type="text" class="form-control" id="emailConfirma" placeholder="Confirmação de e-mail ">
                                        <em class="alert"></em>
                                    </div>
                                    <input type="hidden" id="emailAntigo" value="tallesd2@hotmail.com">
                                </div>
                            </div>
                        </div>
                        <div class="card mb-5 mt-4 BoxMeusEnderecosPrincipal" style="display: none;">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h2 class="meuh2">MEU ENDEREÇO</h2>
                                <strong class="meuh2 hideCardMeuEndPrincipal" style="float: right;cursor: pointer;">X</strong>
                            </div>
                            <div class="card-body">
                                <div class="row mt-3">
                                    <div class="form-group col-md-4 col-12">
                                        <label>Identificação</label>
                                        <input value="" type="text" name="identificacao" class="form-control readOnlyParte2 identificacao_edit" readonly="" id="identificacao_edit" placeholder="(Casa, Trabalho, Etc)">
                                        <em class="alert"></em>
                                    </div>
                                    <!-- <div class="clearfix"> -->
                                    <div class="form-group col-md-4 col-12">
                                        <label>Cep (busca automática)*</label>
                                        <input name="cep" value="" type="text" class="form-control readOnlyParte2 cep cep_edit_principal" readonly="" id="cep_edit" placeholder="CEP (busca automática)" maxlength="9">
                                        <em class="alert"></em>
                                    </div>
                                    <div class="form-group col-md-4 col-12 marginBottomMobile20">
                                        <label>Estado *</label>
                                        <select name="uf" id="state_edit" disabled="" style="padding: 7px;background: white; border-color: #ced4da; width:100%;" class="readOnlyParte2 state_edit_principal ">
                                            <option value="">Estado</option>
                                            <option value="AC">AcreS - AC</option>
                                            <option value="AL">Alagoas - AL</option>
                                            <option value="AP">Amapá - AP</option>
                                            <option value="AM">Amazonas - AM</option>
                                            <option value="BA">Bahia - BA</option>
                                            <option value="CE">Ceará - CE</option>
                                            <option value="DF">Distrito Federal - DF</option>
                                            <option value="ES">Espírito Santo - ES</option>
                                            <option value="GO">Goiás - GO</option>
                                            <option value="MA">Maranhão - MA</option>
                                            <option value="MT">Mato Grosso - MT</option>
                                            <option value="MS">Mato Grosso do Sul - MS</option>
                                            <option value="MG">Minas Gerais - MG</option>
                                            <option value="PA">Pará - PA</option>
                                            <option value="PB">Paraíba - PB</option>
                                            <option value="PR">Paraná - PR</option>
                                            <option value="PE">Pernambuco - PE</option>
                                            <option value="PI">Piauí - PI</option>
                                            <option value="RJ">Rio de Janeiro - RJ</option>
                                            <option value="RN">Rio Grande do Norte - RN</option>
                                            <option value="RS">Rio Grande do Sul - RS</option>
                                            <option value="RO">Rondônia - RO</option>
                                            <option value="RR">Roraima - RR</option>
                                            <option value="SC">Santa Catarina - SC</option>
                                            <option value="SP">São Paulo - SP</option>
                                            <option value="SE">Sergipe - SE</option>
                                            <option value="TO">Tocantins - TO</option>
                                        </select>
                                        <em class="alert"></em>
                                    </div>
                                    <input type="hidden" id="cidadeDelay_edit" value="">
                                    <div class="form-group col-md-4 col-12">
                                        <label>Cidade *</label>
                                        <select name="city" id="city_edit" class="form-control city readOnlyParte2 " data-live-search="true">
                                            <option value=""></option>
                                        </select>
                                        <em class="alert"></em>
                                    </div>
                                    <input type="hidden" id="cidadeDelay">
                                    <div class="form-group col-md-4 col-12">
                                        <label>Bairro *</label>
                                        <input type="text" name="neighborhood" class="form-control readOnlyParte2 " readonly="" id="neighborhood_edit" placeholder="Bairro" value="">
                                        <em class="alert"></em>
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label>Endereço *</label>
                                        <input type="text" name="street" class="form-control readOnlyParte2 " readonly="" id="street_edit" value="" placeholder="Endereço">
                                        <em class="alert"></em>
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label>Número *</label>
                                        <input type="text" maxlength="10" name="number" class="form-control readOnlyParte2 " readonly="" placeholder="Número" value="">
                                        <em class="alert"></em>
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label>Complemento</label>
                                        <input value="" type="text" name="complement" class="form-control readOnlyParte2 " readonly="" id="" placeholder="(Apartamento, Bloco, Etc)">
                                        <em class="alert"></em>
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label>Ponto de referência</label>
                                        <input value="" type="text" name="reference_point" class="form-control readOnlyParte2 " readonly="" id="" placeholder="Ponto de Referência">
                                        <em class="alert"></em>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="idEndereco_new" id="idEndereco_new">



                        <div class=" mb-5 text-center" style="display:none;" id="submitAccount">
                            <div class="text-center mb-10">
                                <div class="msg-error"></div>
                                <div class="msg-reply"></div>
                            </div>
                            <button type="submit" class="btn btn-success btn-lg w-100">SALVAR</button>
                        </div>

                        <div class="card mb-5 mt-4">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h2 class="meuh2">MINHA SENHA</h2>
                                <h2 class="meuh2" id="clearReadOnlyParte3" style="cursor: pointer;">EDITAR</h2>
                                <h2 class="meuh2 hideCardSenha" style="display: none; cursor: pointer;">X</h2>
                            </div>
                            <div class="card-body boxSenhas" style="display: none;">
                                <div class="row mt-3">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Senha</label>
                                        <input name="password" readonly="" type="password" class="form-control readOnlyParte3" id="password" placeholder="Senha">
                                        <em class="alert"></em>
                                    </div>
                                    <div class="form-group col-md-6  col-12">
                                        <label>Confirmar senha</label>
                                        <input name="confirmPass" readonly="" type="password" class="form-control readOnlyParte3" id="confirmPass" placeholder="Confirmar Senha">
                                        <em class="alert"></em>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-success btn-lg w-100 mb-5">SALVAR</button>
                                        <div class="msg-error"></div>
                                        <div class="msg-reply"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form id="addres-new-form" method="post" novalidate="novalidate">
                        <div class="card mb-5 mt-4 BoxMeusEnderecosNovos" style="display: none;">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h2 class="meuh2">NOVO ENDEREÇO</h2>
                                <strong class="meuh2 hideCardNovoEndereco" style="float: right;cursor: pointer;">X</strong>
                            </div>
                            <div class="card-body">
                                <div class="row mt-3">
                                    <div class="form-group col-md-4 col-12">
                                        <label>Identificação</label>
                                        <input type="text" name="identificacao_new" class="form-control readOnlyParte2 " placeholder="(Casa, Trabalho, Etc)">
                                        <em class="alert"></em>
                                    </div>
                                    <!-- <div class="clearfix"> -->
                                    <div class="form-group col-md-4 col-12">
                                        <label>Cep (busca automática)*</label>
                                        <input name="cep_new" type="text" class="form-control cep " id="cep_edit_new" placeholder="CEP (busca automática)" maxlength="9">
                                        <em class="alert"></em>
                                    </div>
                                    <div class="form-group col-md-4 col-12 marginBottomMobile20">
                                        <label>Estado *</label>
                                        <br>
                                        <select name="uf_new" id="state_new" disabled="" style="padding: 7px;background: white; border-color: #ced4da; width:100%;" class="state_new ">
                                            <option value="">Estado</option>
                                            <option value="AC">AcreS - AC</option>
                                            <option value="AL">Alagoas - AL</option>
                                            <option value="AP">Amapá - AP</option>
                                            <option value="AM">Amazonas - AM</option>
                                            <option value="BA">Bahia - BA</option>
                                            <option value="CE">Ceará - CE</option>
                                            <option value="DF">Distrito Federal - DF</option>
                                            <option value="ES">Espírito Santo - ES</option>
                                            <option value="GO">Goiás - GO</option>
                                            <option value="MA">Maranhão - MA</option>
                                            <option value="MT">Mato Grosso - MT</option>
                                            <option value="MS">Mato Grosso do Sul - MS</option>
                                            <option value="MG">Minas Gerais - MG</option>
                                            <option value="PA">Pará - PA</option>
                                            <option value="PB">Paraíba - PB</option>
                                            <option value="PR">Paraná - PR</option>
                                            <option value="PE">Pernambuco - PE</option>
                                            <option value="PI">Piauí - PI</option>
                                            <option value="RJ">Rio de Janeiro - RJ</option>
                                            <option value="RN">Rio Grande do Norte - RN</option>
                                            <option value="RS">Rio Grande do Sul - RS</option>
                                            <option value="RO">Rondônia - RO</option>
                                            <option value="RR">Roraima - RR</option>
                                            <option value="SC">Santa Catarina - SC</option>
                                            <option value="SP">São Paulo - SP</option>
                                            <option value="SE">Sergipe - SE</option>
                                            <option value="TO">Tocantins - TO</option>
                                        </select>
                                        <em class="alert"></em>
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label>Cidade *</label>
                                        <select name="city_new" id="city_new" class="form-control city  city_new" data-live-search="true">
                                        </select>
                                        <em class="alert"></em>
                                    </div>
                                    <input type="hidden" id="cidadeDelayNew">
                                    <div class="form-group col-md-4 col-12">
                                        <label>Bairro *</label>
                                        <input type="text" name="neighborhood_new" class="form-control  " id="neighborhood_new" placeholder="Bairro">
                                        <em class="alert"></em>
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label>Endereço *</label>
                                        <input type="text" name="street_new" class="form-control  " id="street_new" placeholder="Endereço">
                                        <em class="alert"></em>
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label>Número *</label>
                                        <input type="text" maxlength="10" name="number_new" class="form-control  " placeholder="Número">
                                        <em class="alert"></em>
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label>Complemento</label>
                                        <input type="text" name="complement_new" class="form-control  " placeholder="(Apartamento, Bloco, Etc)">
                                        <em class="alert"></em>
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label>Ponto de referência</label>
                                        <input type="text" name="reference_point_new" class="form-control  " placeholder="Ponto de Referência">
                                        <em class="alert"></em>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label class="msg-reply-new-end"></label>
                                    </div>
                                    <div class="form-group col-md-12 col-12 btnSalvarConta" style="text-align: right;">
                                        <button type="submit" id="submitAddressNew" class="btn btn-success btn-lg btn-medio">SALVAR</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="modal fade" id="modalEnderecoExcluir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" style="padding: 10px 20px;">
                                        <span aria-hidden="true">×</span><span class="sr-only"></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row" style="padding:5px 15px;">
                                        <strong>Você deseja deletar o Endereço ? </strong>
                                    </div>
                                    <div class="row" style=" padding-top: 0px;">
                                        <div class="col-md-12">
                                            <p id="cepDeletar" class="mb0px"> </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p id="AddressDeletar" class="mb0px"> </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p id="BairroDeletar" class="mb0px"> </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p id="cityDeletar" class="mb0px"> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="" id="btnDeletarEnd" class="btn btn btn-success btn-lg" style="margin-top: 0px; padding: 5px 28px;">Deletar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modalEnderecoFavorito" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" style="padding: 10px 20px;">
                                        <span aria-hidden="true">×</span><span class="sr-only"></span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row" style="padding:5px 15px;">
                                        <strong> Alterar o endereço para Principal ? </strong>
                                    </div>
                                    <div class="row" style=" padding-top: 0px;">
                                        <div class="col-md-12">
                                            <p id="cepFavoritar" class="mb0px"> </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p id="AddressFavoritar" class="mb0px"> </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p id="BairroFavoritar" class="mb0px"> </p>
                                        </div>
                                        <div class="col-md-12">
                                            <p id="cityFavoritar" class="mb0px"> </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="" id="btnFavoritarEnd" class="btn btn btn-success btn-lg" style="margin-top: 0px; padding: 5px 28px;">Salvar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane active show" id="pedidos" role="tabpanel" aria-labelledby="pedidos-tab">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="card mt-4 mb-5">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tabs-minha-conta width100Mobile" id="myTab2" role="tablist2">
                                <li class="nav-item">
                                    <a class="nav-link active " id="pedidos-futuros-tab" data-toggle="tab" href="#pedidos-futuros" role="tab" aria-controls="pedidos-futuros" aria-selected="true">Contratações Futuros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="pedidos-passados-tab" data-toggle="tab" href="#pedidos-passados" role="tab" aria-controls="pedidos-passados" aria-selected="false">Contratações Passados</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="pedidos-nao-aprovados-tab" data-toggle="tab" href="#pedidos-nao-aprovados" role="tab" aria-controls="pedidos-nao-aprovados" aria-selected="false">Não Aprovados</a>
                                </li>
                            </ul>
                        </div>


                        <div class="tab-content ">
                            <div class="tab-pane active" id="pedidos-futuros" role="tabpanel2" aria-labelledby="pedidos-futuros">
                                <div class="card-body">
                                    Nenhum Pedido com Contratações Futuras!
                                    <div id="accordion">
                                        <div class="card">
                                            <!-- Gerado uma query que pega eventos futuros e passados -->
                                            <!-- Aqui divido entre passado e futuro pelo parametro null ou true  -->
                                            <!-- ai rodo as compras em view para exibir na tela do cliente 2 menus -->
                                            <!-- De compras passadas e futuras  -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="pedidos-passados" role="tabpanel2" aria-labelledby="pedidos-passados">
                                <div class="card-body">
                                    <div id="accordion">
                                        <div class="card">



                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne0" aria-expanded="true" aria-controls="collapseOne0">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 23/08/2022 18:51</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 23/08/22</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> 4ABEB-355E6</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne0" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>




                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 25/11/2021 15:32</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 25/11/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> F50ED-66E12</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>




                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 25/11/2021 15:15</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 27/11/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> D200F-122A9</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne2" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>




                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 25/11/2021 15:14</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 27/11/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> DE5F2-06628</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne3" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>




                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne4" aria-expanded="true" aria-controls="collapseOne4">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 25/11/2021 15:09</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 27/11/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> 5D116-D6669</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne4" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>




                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne5" aria-expanded="true" aria-controls="collapseOne5">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 25/11/2021 15:08</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 27/11/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> D6F21-F41D6</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne5" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>




                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne6" aria-expanded="true" aria-controls="collapseOne6">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 25/11/2021 15:05</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 27/11/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> 2F506-69DD0</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne6" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>




                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne7" aria-expanded="true" aria-controls="collapseOne7">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 25/11/2021 15:03</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 27/11/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> FF75F-671F9</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne7" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>




                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne8" aria-expanded="true" aria-controls="collapseOne8">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 25/11/2021 14:55</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 27/11/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> A42AE-76F91</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne8" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>




                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne9" aria-expanded="true" aria-controls="collapseOne9">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 25/11/2021 14:54</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 27/11/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> BCEC6-BB7F9</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne9" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>




                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne10" aria-expanded="true" aria-controls="collapseOne10">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 25/11/2021 14:50</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 27/11/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> 588CD-EC619</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne10" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>




                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne11" aria-expanded="true" aria-controls="collapseOne11">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 25/11/2021 14:46</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 27/11/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> 9EB6D-867C1</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne11" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>




                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne12" aria-expanded="true" aria-controls="collapseOne12">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 25/11/2021 14:43</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 27/11/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> F6B3C-18F95</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne12" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>




                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne13" aria-expanded="true" aria-controls="collapseOne13">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 25/11/2021 14:36</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 27/11/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> CF912-996F1</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne13" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>




                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne14" aria-expanded="true" aria-controls="collapseOne14">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 25/11/2021 14:32</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 27/11/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> 9AB96-C1F38</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne14" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>




                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne15" aria-expanded="true" aria-controls="collapseOne15">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 25/11/2021 14:16</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 27/11/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> B410F-6D901</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne15" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>




                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne16" aria-expanded="true" aria-controls="collapseOne16">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Rafa Mesquita.png" style="width: 100px" class="img-responsive responsive" alt="Rafa Mesquita" title="Rafa Mesquita">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Rafa Mesquita</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 25/11/2021 13:57</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 26/11/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> C6C10-DD95A</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Pré Carrinho</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne16" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas e 45 Min</td>
                                                                <td> <strong>R$ 6.000,00 </strong></td>
                                                            </tr>




                                                            <tr>
                                                                <td colspan="2"> Estruturas Inclusas</td>
                                                                <td class="cursorPoint ShowStructureInclusas colorOrange"> Ver Detalhes <i class="fas fa-sort-down" aria-hidden="true"></i></td>
                                                                <td> <strong> -- </strong></td>
                                                            </tr>

                                                            <tr class="divStructureInclusas" style="text-align: left; display: none;">
                                                                <td colspan="4">
                                                                    <h2 class="meuh2" style="margin-left: 15px; margin-bottom: 15px;">Estruturas Inclusas</h2>
                                                                    <div class="col-md-12 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-panel.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Telas para Exibição de Imagens</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </td>
                                                            </tr>

                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 6.000,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne17" aria-expanded="true" aria-controls="collapseOne17">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 25/11/2021 11:56</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 26/11/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> 6F955-16425</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne17" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>




                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne18" aria-expanded="true" aria-controls="collapseOne18">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 24/11/2021 23:46</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 26/11/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <strong class="d-block "><a target="_blank" href="https://mercadodebandas.com.br/get_voucher_product/6BE19-3382E" class="btn btn-black btn-sm btnImprimir">Imprimir Voucher do pedido </a> </strong>
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> 6BE19-3382E</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Aprovado</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne18" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong>Pronto, sua compra foi APROVADA com Sucesso ! </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong>Cartão de Crédito - 1x </strong>
                                                        &nbsp;&nbsp;Final Cartão: <strong>**** **** **** 0604 </strong>
                                                        &nbsp;&nbsp;Bandeira: <strong style="text-transform: uppercase;">master </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>



                                                            <tr>
                                                                <td colspan="2"> Estruturas Contratadas</td>
                                                                <td class="cursorPoint ShowStructureContratada colorOrange"> Ver Detalhes <i class="fas fa-sort-down" aria-hidden="true"></i></td>
                                                                <td> <strong>R$ 1.000,00 </strong></td>
                                                            </tr>
                                                            <tr class="divStructureContratada" style="text-align: left; display: none;">
                                                                <td colspan="4">
                                                                    <h2 class="meuh2" style="margin-left: 15px; margin-bottom: 15px;">Estruturas Contratadas</h2>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-refletor.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Iluminação</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Estrutura de Grid </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED - RGBW </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Ribalta - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Lâmpada PAR </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Moving Light </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão Seguidor </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Strobo - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Mini Brut </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2"> Estruturas Inclusas</td>
                                                                <td class="cursorPoint ShowStructureInclusas colorOrange"> Ver Detalhes <i class="fas fa-sort-down" aria-hidden="true"></i></td>
                                                                <td> <strong> -- </strong></td>
                                                            </tr>

                                                            <tr class="divStructureInclusas" style="text-align: left; display: none;">
                                                                <td colspan="4">
                                                                    <h2 class="meuh2" style="margin-left: 15px; margin-bottom: 15px;">Estruturas Inclusas</h2>
                                                                    <div class="col-md-12 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-panel.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Telas para Exibição de Imagens</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </td>
                                                            </tr>

                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 7.000,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 5.000,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne19" aria-expanded="true" aria-controls="collapseOne19">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 24/11/2021 23:40</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 26/11/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> 9F0E4-7682F</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne19" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>




                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne20" aria-expanded="true" aria-controls="collapseOne20">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 24/11/2021 23:37</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 26/11/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> 61C56-DD1EF</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne20" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>




                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne21" aria-expanded="true" aria-controls="collapseOne21">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 24/11/2021 23:24</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 26/11/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> DD5E3-619F2</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne21" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>




                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne22" aria-expanded="true" aria-controls="collapseOne22">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 24/11/2021 23:22</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 24/11/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <strong class="d-block "><a target="_blank" href="https://mercadodebandas.com.br/get_voucher_product/6136F-59048" class="btn btn-black btn-sm btnImprimir">Imprimir Voucher do pedido </a> </strong>
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> 6136F-59048</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Aprovado</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne22" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong>Pronto, sua compra foi APROVADA com Sucesso ! </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong>Cartão de Crédito - 8x </strong>
                                                        &nbsp;&nbsp;Final Cartão: <strong>**** **** **** 0604 </strong>
                                                        &nbsp;&nbsp;Bandeira: <strong style="text-transform: uppercase;">master </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>




                                                            <tr>
                                                                <td colspan="2"> Estruturas Inclusas</td>
                                                                <td class="cursorPoint ShowStructureInclusas colorOrange"> Ver Detalhes <i class="fas fa-sort-down" aria-hidden="true"></i></td>
                                                                <td> <strong> -- </strong></td>
                                                            </tr>

                                                            <tr class="divStructureInclusas" style="text-align: left; display: none;">
                                                                <td colspan="4">
                                                                    <h2 class="meuh2" style="margin-left: 15px; margin-bottom: 15px;">Estruturas Inclusas</h2>
                                                                    <div class="col-md-12 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-panel.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Telas para Exibição de Imagens</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </td>
                                                            </tr>

                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 4.000,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 4.556,80</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne23" aria-expanded="true" aria-controls="collapseOne23">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 20/10/2021 17:40</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 20/10/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <strong class="d-block "><a target="_blank" href="https://mercadodebandas.com.br/get_voucher_product/78AE7-6C901" class="btn btn-black btn-sm btnImprimir">Imprimir Voucher do pedido </a> </strong>
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> 78AE7-6C901</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Aprovado</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne23" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong>Pronto, sua compra foi APROVADA com Sucesso ! </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong>Cartão de Crédito - 2x </strong>
                                                        &nbsp;&nbsp;Final Cartão: <strong>**** **** **** 0604 </strong>
                                                        &nbsp;&nbsp;Bandeira: <strong style="text-transform: uppercase;">master </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2"> Cachê Adicional</td>
                                                                <td>00 Hora e 30 Min</td>
                                                                <td> <strong>R$ 750,00 </strong></td>
                                                            </tr>


                                                            <tr>
                                                                <td colspan="2"> Estruturas Contratadas</td>
                                                                <td class="cursorPoint ShowStructureContratada colorOrange"> Ver Detalhes <i class="fas fa-sort-down" aria-hidden="true"></i></td>
                                                                <td> <strong>R$ 2.000,00 </strong></td>
                                                            </tr>
                                                            <tr class="divStructureContratada" style="text-align: left; display: none;">
                                                                <td colspan="4">
                                                                    <h2 class="meuh2" style="margin-left: 15px; margin-bottom: 15px;">Estruturas Contratadas</h2>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-refletor.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Iluminação</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Estrutura de Grid </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED - RGBW </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Ribalta - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Lâmpada PAR </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Moving Light </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão Seguidor </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Strobo - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Mini Brut </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-sound-box.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Estrutura de Som</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Caixas Ativas (Grave, Médio e Agudo) </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Line Array - Sub Graves </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Line Array - Altas Frequências </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Amplificador de guitarra </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Microfones </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Caixas de retorno (monitor) </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Amplificador de baixo </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Corpo de bateria </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Pedestais </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Cabo P10 (instrumentos) </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Cabo XLR (microfone) </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Cabo AC (energia) </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Estabilizador </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Extensão </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2"> Estruturas Inclusas</td>
                                                                <td class="cursorPoint ShowStructureInclusas colorOrange"> Ver Detalhes <i class="fas fa-sort-down" aria-hidden="true"></i></td>
                                                                <td> <strong> -- </strong></td>
                                                            </tr>

                                                            <tr class="divStructureInclusas" style="text-align: left; display: none;">
                                                                <td colspan="4">
                                                                    <h2 class="meuh2" style="margin-left: 15px; margin-bottom: 15px;">Estruturas Inclusas</h2>
                                                                    <div class="col-md-12 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-panel.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Telas para Exibição de Imagens</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </td>
                                                            </tr>

                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 10.750,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 7.055,10</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne24" aria-expanded="true" aria-controls="collapseOne24">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 15/10/2021 17:48</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 15/10/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> C1426-9E629</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Pré Carrinho</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne24" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>




                                                            <tr>
                                                                <td colspan="2"> Estruturas Inclusas</td>
                                                                <td class="cursorPoint ShowStructureInclusas colorOrange"> Ver Detalhes <i class="fas fa-sort-down" aria-hidden="true"></i></td>
                                                                <td> <strong> -- </strong></td>
                                                            </tr>

                                                            <tr class="divStructureInclusas" style="text-align: left; display: none;">
                                                                <td colspan="4">
                                                                    <h2 class="meuh2" style="margin-left: 15px; margin-bottom: 15px;">Estruturas Inclusas</h2>
                                                                    <div class="col-md-12 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-panel.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Telas para Exibição de Imagens</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </td>
                                                            </tr>

                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 4.000,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne25" aria-expanded="true" aria-controls="collapseOne25">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 15/10/2021 16:16</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 15/10/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <strong class="d-block "><a target="_blank" href="https://mercadodebandas.com.br/get_voucher_product/06363-D9821" class="btn btn-black btn-sm btnImprimir">Imprimir Voucher do pedido </a> </strong>
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> 06363-D9821</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Aprovado</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne25" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong>Pronto, sua compra foi APROVADA com Sucesso ! </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong>Cartão de Crédito - 2x </strong>
                                                        &nbsp;&nbsp;Final Cartão: <strong>**** **** **** 0604 </strong>
                                                        &nbsp;&nbsp;Bandeira: <strong style="text-transform: uppercase;">master </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2"> Cachê Adicional</td>
                                                                <td>01 Hora e 30 Min</td>
                                                                <td> <strong>R$ 1.950,00 </strong></td>
                                                            </tr>


                                                            <tr>
                                                                <td colspan="2"> Estruturas Contratadas</td>
                                                                <td class="cursorPoint ShowStructureContratada colorOrange"> Ver Detalhes <i class="fas fa-sort-down" aria-hidden="true"></i></td>
                                                                <td> <strong>R$ 2.000,00 </strong></td>
                                                            </tr>
                                                            <tr class="divStructureContratada" style="text-align: left; display: none;">
                                                                <td colspan="4">
                                                                    <h2 class="meuh2" style="margin-left: 15px; margin-bottom: 15px;">Estruturas Contratadas</h2>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-refletor.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Iluminação</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Estrutura de Grid </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED - RGBW </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Ribalta - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Lâmpada PAR </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Moving Light </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão Seguidor </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Strobo - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Mini Brut </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-sound-box.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Estrutura de Som</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Caixas Ativas (Grave, Médio e Agudo) </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Line Array - Sub Graves </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Line Array - Altas Frequências </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Caixas de retorno (monitor) </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Amplificador de baixo </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Amplificador de guitarra </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Corpo de bateria </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Microfones </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Pedestais </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Cabo P10 (instrumentos) </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Cabo XLR (microfone) </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Cabo AC (energia) </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Estabilizador </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Extensão </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2"> Estruturas Inclusas</td>
                                                                <td class="cursorPoint ShowStructureInclusas colorOrange"> Ver Detalhes <i class="fas fa-sort-down" aria-hidden="true"></i></td>
                                                                <td> <strong> -- </strong></td>
                                                            </tr>

                                                            <tr class="divStructureInclusas" style="text-align: left; display: none;">
                                                                <td colspan="4">
                                                                    <h2 class="meuh2" style="margin-left: 15px; margin-bottom: 15px;">Estruturas Inclusas</h2>
                                                                    <div class="col-md-12 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-panel.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Telas para Exibição de Imagens</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </td>
                                                            </tr>

                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 11.950,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 8.309,34</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne26" aria-expanded="true" aria-controls="collapseOne26">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 14/10/2021 15:50</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 15/10/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <strong class="d-block "><a target="_blank" href="https://mercadodebandas.com.br/get_voucher_product/8746B-00C16" class="btn btn-black btn-sm btnImprimir">Imprimir Voucher do pedido </a> </strong>
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> 8746B-00C16</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Aprovado</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne26" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong>Pronto, sua compra foi APROVADA com Sucesso ! </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong>Cartão de Crédito - 1x </strong>
                                                        &nbsp;&nbsp;Final Cartão: <strong>**** **** **** 0604 </strong>
                                                        &nbsp;&nbsp;Bandeira: <strong style="text-transform: uppercase;">master </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2"> Cachê Adicional</td>
                                                                <td>01 Hora</td>
                                                                <td> <strong>R$ 1.200,00 </strong></td>
                                                            </tr>


                                                            <tr>
                                                                <td colspan="2"> Estruturas Contratadas</td>
                                                                <td class="cursorPoint ShowStructureContratada colorOrange"> Ver Detalhes <i class="fas fa-sort-down" aria-hidden="true"></i></td>
                                                                <td> <strong>R$ 1.000,00 </strong></td>
                                                            </tr>
                                                            <tr class="divStructureContratada" style="text-align: left; display: none;">
                                                                <td colspan="4">
                                                                    <h2 class="meuh2" style="margin-left: 15px; margin-bottom: 15px;">Estruturas Contratadas</h2>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-refletor.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Iluminação</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Estrutura de Grid </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED - RGBW </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Ribalta - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Lâmpada PAR </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Moving Light </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão Seguidor </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Strobo - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Mini Brut </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2"> Estruturas Inclusas</td>
                                                                <td class="cursorPoint ShowStructureInclusas colorOrange"> Ver Detalhes <i class="fas fa-sort-down" aria-hidden="true"></i></td>
                                                                <td> <strong> -- </strong></td>
                                                            </tr>

                                                            <tr class="divStructureInclusas" style="text-align: left; display: none;">
                                                                <td colspan="4">
                                                                    <h2 class="meuh2" style="margin-left: 15px; margin-bottom: 15px;">Estruturas Inclusas</h2>
                                                                    <div class="col-md-12 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-panel.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Telas para Exibição de Imagens</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </td>
                                                            </tr>

                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 8.200,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 6.200,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne27" aria-expanded="true" aria-controls="collapseOne27">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 13/10/2021 23:26</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 16/10/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <strong class="d-block "><a target="_blank" href="https://mercadodebandas.com.br/get_voucher_product/9A6F5-B6075" class="btn btn-black btn-sm btnImprimir">Imprimir Voucher do pedido </a> </strong>
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> 9A6F5-B6075</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Aprovado</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne27" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong>Pronto, sua compra foi APROVADA com Sucesso ! </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong>Cartão de Crédito - 4x </strong>
                                                        &nbsp;&nbsp;Final Cartão: <strong>**** **** **** 0604 </strong>
                                                        &nbsp;&nbsp;Bandeira: <strong style="text-transform: uppercase;">master </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2"> Cachê Adicional</td>
                                                                <td>01 Hora e 30 Min</td>
                                                                <td> <strong>R$ 1.950,00 </strong></td>
                                                            </tr>


                                                            <tr>
                                                                <td colspan="2"> Estruturas Contratadas</td>
                                                                <td class="cursorPoint ShowStructureContratada colorOrange"> Ver Detalhes <i class="fas fa-sort-down" aria-hidden="true"></i></td>
                                                                <td> <strong>R$ 2.000,00 </strong></td>
                                                            </tr>
                                                            <tr class="divStructureContratada" style="text-align: left; display: none;">
                                                                <td colspan="4">
                                                                    <h2 class="meuh2" style="margin-left: 15px; margin-bottom: 15px;">Estruturas Contratadas</h2>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-refletor.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Iluminação</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Estrutura de Grid </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED - RGBW </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Ribalta - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Lâmpada PAR </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Moving Light </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão Seguidor </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Strobo - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Mini Brut </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-sound-box.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Estrutura de Som</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Caixas Ativas (Grave, Médio e Agudo) </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Line Array - Sub Graves </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Line Array - Altas Frequências </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Caixas de retorno (monitor) </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Amplificador de baixo </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Amplificador de guitarra </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Corpo de bateria </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Microfones </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Pedestais </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Cabo P10 (instrumentos) </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Cabo XLR (microfone) </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Cabo AC (energia) </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Estabilizador </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Extensão </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2"> Estruturas Inclusas</td>
                                                                <td class="cursorPoint ShowStructureInclusas colorOrange"> Ver Detalhes <i class="fas fa-sort-down" aria-hidden="true"></i></td>
                                                                <td> <strong> -- </strong></td>
                                                            </tr>

                                                            <tr class="divStructureInclusas" style="text-align: left; display: none;">
                                                                <td colspan="4">
                                                                    <h2 class="meuh2" style="margin-left: 15px; margin-bottom: 15px;">Estruturas Inclusas</h2>
                                                                    <div class="col-md-12 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-panel.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Telas para Exibição de Imagens</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </td>
                                                            </tr>

                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 11.950,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 8.554,20</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne28" aria-expanded="true" aria-controls="collapseOne28">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 13/10/2021 22:36</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 15/10/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <strong class="d-block "><a target="_blank" href="https://mercadodebandas.com.br/get_voucher_product/" class="btn btn-black btn-sm btnImprimir">Imprimir Voucher do pedido </a> </strong>
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> </strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Aprovado</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne28" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong>Pronto, sua compra foi APROVADA com Sucesso ! </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong>Cartão de Crédito - 2x </strong>
                                                        &nbsp;&nbsp;Final Cartão: <strong>**** **** **** 0604 </strong>
                                                        &nbsp;&nbsp;Bandeira: <strong style="text-transform: uppercase;">master </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2"> Cachê Adicional</td>
                                                                <td>01 Hora e 30 Min</td>
                                                                <td> <strong>R$ 1.950,00 </strong></td>
                                                            </tr>


                                                            <tr>
                                                                <td colspan="2"> Estruturas Contratadas</td>
                                                                <td class="cursorPoint ShowStructureContratada colorOrange"> Ver Detalhes <i class="fas fa-sort-down" aria-hidden="true"></i></td>
                                                                <td> <strong>R$ 1.000,01 </strong></td>
                                                            </tr>
                                                            <tr class="divStructureContratada" style="text-align: left; display: none;">
                                                                <td colspan="4">
                                                                    <h2 class="meuh2" style="margin-left: 15px; margin-bottom: 15px;">Estruturas Contratadas</h2>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-palco.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Palco - Espaço Apresentação</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Área necessária (m2) </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Altura do solo - Sem informações</p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Altura pé-direito </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-refletor.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Iluminação</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Estrutura de Grid </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED - RGBW </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Ribalta - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Lâmpada PAR </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Moving Light </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão Seguidor </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Strobo - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Mini Brut </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2"> Estruturas Inclusas</td>
                                                                <td class="cursorPoint ShowStructureInclusas colorOrange"> Ver Detalhes <i class="fas fa-sort-down" aria-hidden="true"></i></td>
                                                                <td> <strong> -- </strong></td>
                                                            </tr>

                                                            <tr class="divStructureInclusas" style="text-align: left; display: none;">
                                                                <td colspan="4">
                                                                    <h2 class="meuh2" style="margin-left: 15px; margin-bottom: 15px;">Estruturas Inclusas</h2>
                                                                    <div class="col-md-12 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-panel.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Telas para Exibição de Imagens</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </td>
                                                            </tr>

                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 8.950,03</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 7.264,15</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne29" aria-expanded="true" aria-controls="collapseOne29">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 13/10/2021 22:35</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 15/10/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> </strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne29" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>02 Horas</td>
                                                                <td> <strong>R$ 4.000,00 </strong></td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2"> Cachê Adicional</td>
                                                                <td>01 Hora e 30 Min</td>
                                                                <td> <strong>R$ 1.950,00 </strong></td>
                                                            </tr>



                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne30" aria-expanded="true" aria-controls="collapseOne30">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 29/09/2021 21:01</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 29/09/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> 4CD1B-F606C</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne30" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>00 Hora e 1 Min</td>
                                                                <td> <strong>R$ 5.000,00 </strong></td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2"> Cachê Adicional</td>
                                                                <td>0 Hora</td>
                                                                <td> <strong>R$ 3.000,00 </strong></td>
                                                            </tr>


                                                            <tr>
                                                                <td colspan="2"> Estruturas Contratadas</td>
                                                                <td class="cursorPoint ShowStructureContratada colorOrange"> Ver Detalhes <i class="fas fa-sort-down" aria-hidden="true"></i></td>
                                                                <td> <strong>R$ 0,00 </strong></td>
                                                            </tr>
                                                            <tr class="divStructureContratada" style="text-align: left; display: none;">
                                                                <td colspan="4">
                                                                    <h2 class="meuh2" style="margin-left: 15px; margin-bottom: 15px;">Estruturas Contratadas</h2>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-palco.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Palco - Espaço Apresentação</h5>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-panel.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Telas para Exibição de Imagens</h5>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </td>
                                                            </tr>

                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne31" aria-expanded="true" aria-controls="collapseOne31">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 29/09/2021 20:57</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 29/09/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> 659FB-B518D</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne31" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>00 Hora e 1 Min</td>
                                                                <td> <strong>R$ 5.000,00 </strong></td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2"> Cachê Adicional</td>
                                                                <td>0 Hora</td>
                                                                <td> <strong>R$ 3.000,00 </strong></td>
                                                            </tr>


                                                            <tr>
                                                                <td colspan="2"> Estruturas Contratadas</td>
                                                                <td class="cursorPoint ShowStructureContratada colorOrange"> Ver Detalhes <i class="fas fa-sort-down" aria-hidden="true"></i></td>
                                                                <td> <strong>R$ 0,00 </strong></td>
                                                            </tr>
                                                            <tr class="divStructureContratada" style="text-align: left; display: none;">
                                                                <td colspan="4">
                                                                    <h2 class="meuh2" style="margin-left: 15px; margin-bottom: 15px;">Estruturas Contratadas</h2>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-palco.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Palco - Espaço Apresentação</h5>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-panel.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Telas para Exibição de Imagens</h5>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-sound-box.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Estrutura de Som</h5>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </td>
                                                            </tr>

                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne32" aria-expanded="true" aria-controls="collapseOne32">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 29/09/2021 20:03</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 29/09/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> 6C7EC-B4F0B</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne32" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>00 Hora e 1 Min</td>
                                                                <td> <strong>R$ 5.000,00 </strong></td>
                                                            </tr>




                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne33" aria-expanded="true" aria-controls="collapseOne33">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 29/09/2021 17:48</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 29/09/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> C9845-6151F</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Checkout</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne33" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>00 Hora e 1 Min</td>
                                                                <td> <strong>R$ 5.000,00 </strong></td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2"> Cachê Adicional</td>
                                                                <td>0 Hora</td>
                                                                <td> <strong>R$ 3.000,00 </strong></td>
                                                            </tr>


                                                            <tr>
                                                                <td colspan="2"> Estruturas Contratadas</td>
                                                                <td class="cursorPoint ShowStructureContratada colorOrange"> Ver Detalhes <i class="fas fa-sort-down" aria-hidden="true"></i></td>
                                                                <td> <strong>R$ 0,00 </strong></td>
                                                            </tr>
                                                            <tr class="divStructureContratada" style="text-align: left; display: none;">
                                                                <td colspan="4">
                                                                    <h2 class="meuh2" style="margin-left: 15px; margin-bottom: 15px;">Estruturas Contratadas</h2>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-refletor.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Iluminação</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Estrutura de Grid </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED - RGBW </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Ribalta - LED </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-panel.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Telas para Exibição de Imagens</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Painel de led </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Tvs </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-sound-box.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Estrutura de Som</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Caixas Ativas (Grave, Médio e Agudo) </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Line Array - Sub Graves </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Line Array - Altas Frequências </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Amplificador de guitarra </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Microfones </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2"> Estruturas Inclusas</td>
                                                                <td class="cursorPoint ShowStructureInclusas colorOrange"> Ver Detalhes <i class="fas fa-sort-down" aria-hidden="true"></i></td>
                                                                <td> <strong> -- </strong></td>
                                                            </tr>

                                                            <tr class="divStructureInclusas" style="text-align: left; display: none;">
                                                                <td colspan="4">
                                                                    <h2 class="meuh2" style="margin-left: 15px; margin-bottom: 15px;">Estruturas Inclusas</h2>
                                                                    <div class="col-md-12 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-palco.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Palco - Espaço Apresentação</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Área necessária (m2) </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Altura do solo </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Altura pé-direito </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <div class="col-md-12 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-refletor.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Iluminação</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Estrutura de Grid </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <div class="col-md-12 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-panel.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Telas para Exibição de Imagens</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Painel de led </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <div class="col-md-12 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-gerador.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Estrutura de Energia</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Gerador </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </td>
                                                            </tr>

                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 11.000,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne34" aria-expanded="true" aria-controls="collapseOne34">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 28/09/2021 15:53</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 28/09/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> 4625B-73316</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne34" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>00 Hora e 1 Min</td>
                                                                <td> <strong>R$ 5.000,00 </strong></td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2"> Cachê Adicional</td>
                                                                <td>0 Hora</td>
                                                                <td> <strong>R$ 3.000,00 </strong></td>
                                                            </tr>


                                                            <tr>
                                                                <td colspan="2"> Estruturas Contratadas</td>
                                                                <td class="cursorPoint ShowStructureContratada colorOrange"> Ver Detalhes <i class="fas fa-sort-down" aria-hidden="true"></i></td>
                                                                <td> <strong>R$ 0,00 </strong></td>
                                                            </tr>
                                                            <tr class="divStructureContratada" style="text-align: left; display: none;">
                                                                <td colspan="4">
                                                                    <h2 class="meuh2" style="margin-left: 15px; margin-bottom: 15px;">Estruturas Contratadas</h2>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-palco.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Palco - Espaço Apresentação</h5>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-refletor.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Iluminação</h5>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-panel.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Telas para Exibição de Imagens</h5>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-gerador.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Estrutura de Energia</h5>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </td>
                                                            </tr>

                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne35" aria-expanded="true" aria-controls="collapseOne35">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 28/09/2021 14:27</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 28/09/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> 6831B-5460E</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne35" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>00 Hora e 1 Min</td>
                                                                <td> <strong>R$ 5.000,00 </strong></td>
                                                            </tr>




                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne36" aria-expanded="true" aria-controls="collapseOne36">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Papaninfa.jpeg" style="width: 100px" class="img-responsive responsive" alt="Papaninfa" title="Papaninfa">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Papaninfa</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 26/09/2021 21:34</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 29/09/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> 56A12-F7E11</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Checkout</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne36" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>00 Hora e 1 Min</td>
                                                                <td> <strong>R$ 5.000,00 </strong></td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2"> Cachê Adicional</td>
                                                                <td>0 Hora</td>
                                                                <td> <strong>R$ 3.000,00 </strong></td>
                                                            </tr>


                                                            <tr>
                                                                <td colspan="2"> Estruturas Contratadas</td>
                                                                <td class="cursorPoint ShowStructureContratada colorOrange"> Ver Detalhes <i class="fas fa-sort-down" aria-hidden="true"></i></td>
                                                                <td> <strong>R$ 0,00 </strong></td>
                                                            </tr>
                                                            <tr class="divStructureContratada" style="text-align: left; display: none;">
                                                                <td colspan="4">
                                                                    <h2 class="meuh2" style="margin-left: 15px; margin-bottom: 15px;">Estruturas Contratadas</h2>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-refletor.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Iluminação</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Estrutura de Grid </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED - RGBW </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Ribalta - LED </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <div class="col-md-6 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-sound-box.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Estrutura de Som</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Caixas Ativas (Grave, Médio e Agudo) </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Line Array - Sub Graves </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Line Array - Altas Frequências </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Amplificador de guitarra </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Microfones </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2"> Estruturas Inclusas</td>
                                                                <td class="cursorPoint ShowStructureInclusas colorOrange"> Ver Detalhes <i class="fas fa-sort-down" aria-hidden="true"></i></td>
                                                                <td> <strong> -- </strong></td>
                                                            </tr>

                                                            <tr class="divStructureInclusas" style="text-align: left; display: none;">
                                                                <td colspan="4">
                                                                    <h2 class="meuh2" style="margin-left: 15px; margin-bottom: 15px;">Estruturas Inclusas</h2>
                                                                    <div class="col-md-12 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-palco.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Palco - Espaço Apresentação</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Área necessária (m2) </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Altura do solo </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Altura pé-direito </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <div class="col-md-12 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-refletor.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Iluminação</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Estrutura de Grid </p>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Canhão - LED </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <div class="col-md-12 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-panel.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Telas para Exibição de Imagens</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Painel de led </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                    <div class="col-md-12 structureBuy">
                                                                        <div class="line-icon inline-flex">
                                                                            <img src="https://mercadodebandas.com.br/img/structures/icon-gerador.svg" alt="" class="imgStructureBuy">
                                                                            <div>
                                                                                <h5 class="mb0 titleStructureBuy ">Estrutura de Energia</h5>
                                                                                <p class="mb0 ml-10 fontSizeStructureList"> - Gerador </p>
                                                                                <div class="mb-15"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </td>
                                                            </tr>

                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 10.000,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne37" aria-expanded="true" aria-controls="collapseOne37">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Santa Clara.jpeg" style="width: 100px" class="img-responsive responsive" alt="Santa Clara" title="Santa Clara">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Santa Clara</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 26/09/2021 16:36</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 26/09/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> 57BC0-6FFC4</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne37" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>00 Hora e 1 Min</td>
                                                                <td> <strong>R$ 5.000,00 </strong></td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2"> Cachê Adicional</td>
                                                                <td>0 Hora</td>
                                                                <td> <strong>R$ 800,00 </strong></td>
                                                            </tr>



                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne38" aria-expanded="true" aria-controls="collapseOne38">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Alok.jpeg" style="width: 100px" class="img-responsive responsive" alt="Alok" title="Alok">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Alok</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 23/09/2021 10:38</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 23/09/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> </strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne38" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>00 Hora e 1 Min</td>
                                                                <td> <strong>R$ 5.000,00 </strong></td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2"> Cachê Adicional</td>
                                                                <td>0 Hora</td>
                                                                <td> <strong>R$ 2.300,00 </strong></td>
                                                            </tr>



                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>


                                            <div class="card-header" style="background: #aaa69d " id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="d-flex align-items-center  justify-content-between btn btn-link" data-toggle="collapse" data-target="#collapseOne39" aria-expanded="true" aria-controls="collapseOne39">
                                                        <div class="d-flex align-items-center info-ingresso marginBottomMobile10">
                                                            <div class="thumb">
                                                                <img src="https://mercadodebandas.com.br/uploads/artista/Alok.jpeg" style="width: 100px" class="img-responsive responsive" alt="Alok" title="Alok">
                                                            </div>
                                                            <span class="title">
                                                                <span class="class_event_mobile">Alok</span>
                                                                <small class="d-block"><strong>Data da Compra:</strong> 15/09/2021 16:56</small>
                                                                <small class="d-block"><strong>Data da Apresentação:</strong> 30/09/21</small>

                                                            </span>
                                                        </div>

                                                        <span class="title title2 tttes">
                                                            <span style="display: inline-flex;">Pedido: &nbsp;<strong class="d-block"> DB6F4-16B26</strong></span>
                                                        </span>

                                                        <span class="title title2 tttes">
                                                            <span class="d-block" style="text-transform: uppercase;">Status</span>
                                                            <strong class="d-block" style="text-transform: uppercase;">Artista</strong>
                                                        </span>

                                                        <i class="fa faMobile" aria-hidden="true"></i>

                                                    </button>
                                                </h5>
                                            </div>


                                            <div id="collapseOne39" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">

                                                <div class="row meus_pedidos_mobile" style="padding:10px;">

                                                    <div class="col-md-12">Status: <strong> </strong></div>
                                                    <div class="col-md-12">Forma Pag.: <strong> </strong>
                                                    </div>


                                                </div>

                                                <div class="table-responsive desc_localretirada_mobile">
                                                    <table class="table">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th colspan="2" class="text-center">DETALHES</th>
                                                                <th class="text-center">VALOR</th>
                                                                <th class="text-center">DESCRIÇÃO</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody style="text-align: center;">

                                                            <tr>
                                                                <td colspan="2"> Cachê Padrão</td>
                                                                <td>00 Hora</td>
                                                                <td> <strong>R$ 0,00 </strong></td>
                                                            </tr>




                                                        </tbody>


                                                        <tbody>


                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> SUBTOTAL</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;"> DESLOCAMENTO <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista."></i><span class="sr-only">O deslocamento é calculado baseado na distância entre o local da apresentação e o CEP matriz do Artista.</span></td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="3" style="text-align: right !important;">CUPOM DE DESCONTO</td>
                                                                <td colspan="3" style="text-align: right !important;">R$ 0,00</td>
                                                            </tr>

                                                            <tr>
                                                                <!-- <td > </td> -->
                                                                <td colspan="3" style="text-align: right !important; background: #ff7700; color:#fff; font-weight: bold;">TOTAL DA COMPRA <i data-toggle="tooltip" class="fas fa-question-circle" title="" aria-hidden="true" data-original-title="Não acrescido de júros."></i><span class="sr-only">Não acrescido de júros.</span></td>
                                                                <td colspan="3" style="text-align: right !important; font-weight: bold;"> R$ 0,00</td>
                                                            </tr>
                                                        </tbody>


                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="pedidos-nao-aprovados" role="tabpanel2" aria-labelledby="pedidos-nao-aprovados">
                                <div class="card-body">
                                    Nenhum Pedido Cancelado!
                                    <div id="accordion">
                                        <div class="card">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
