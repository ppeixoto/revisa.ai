@extends('layouts.dashboard.app')

@section('title','')

@section('content')
<div id="kt_app_content" class="app-content flex-column-fluid">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="card">
            <div class="card-body p-0">
                <div class="card-px text-center py-20 my-10">
                    <h2 class="fs-2x fw-bold mb-10">Seja bem-vindo, Artista!</h2>
                    <p class="text-gray-400 fs-4 fw-semibold mb-10">Antes de acessar, precisaremos confirmar alguns dados.
                        <br>Prometo que não leva mais de 2 minutos.
                    </p>

                    <form action="{{ route('seller.store') }}" method="POST">
                        @csrf
                        <div class="row gx-10 mb-5 justify-content-md-center">
                            <div class="col-lg-6" style="text-align: left;">
                                <x-form.radio-group field="document_type" label="Tipo do Documento" required>
                                    <x-form.radio field="document_type" label="CPF" value="cpf" checked />
                                    <x-form.radio field="document_type" label="CNPJ" value="cnpj" />
                                </x-form.radio-group>
                                <x-form.input field="document" label="Número do Documento" type="text" value="{{ old('document') }}" mask="999.999.999-99" :autocomplete="false" required />
                                <x-form.input field="razao_social" label="Razão Social" type="text" value="{{ old('document') }}" :autocomplete="false" disabled required hidden />
                                <x-form.input field="phone" label="Telefone Celular" type="text" value="{{ old('phone') }}" mask="(99) 9.9999-9999" :autocomplete="false" required />
                            </div>
                        </div>
                        <div class="row gx-10 mb-5  justify-content-md-center">
                            <div class="col-lg-6">
                                <x-form.button placeholder="Continuar" />
                            </div>
                        </div>
                    </form>

                </div>
                <div class="text-center px-4">
                    <img class="mw-100 mh-300px" alt="" src="/metronic8/demo8/assets/media/illustrations/sketchy-1/2.png">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('custom-scripts')
<script>
    $(document).ready(function() {
        $('input[type=radio][name=document_type]').change(function() {
            if (this.value == 'cpf') {
                $('#document').mask('999.999.999-99');
                $("#razao_social").parent().parent().addClass('d-none');
                $("#razao_social").attr('disabled', 'disabled');
                $("#razao_social").removeAttr('required');
            } else if (this.value == 'cnpj') {
                $('#document').mask('99.999.999/9999-99');
                $("#razao_social").parent().parent().removeClass('d-none');
                $("#razao_social").removeAttr('disabled');
                $("#razao_social").attr('required', 'required');
            }
        });
    });

</script>
@endpush
