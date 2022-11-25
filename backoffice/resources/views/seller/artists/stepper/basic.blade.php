<x-form.separator title="Dados Básicos" />
<div class="row gx-10 mb-5 justify-content-md-center">
    <div class="col-lg-12" style="text-align: left;">
        <x-form.select field="category_id" label="Classificação" :options="$categories->toArray()" required />
        <x-form.input field="name" label="Nome do Artista" type="text" value="{{ old('name') }}" :autocomplete="false" required maxlength=65 />
        <x-form.text field="name_preview" label="Link" value="https://mercadodebandas.com.br/" />
        <x-form.radio-group field="document_type" label="Possui CNPJ" required>
            <x-form.radio field="document_type" label="Sim" value="cnpj" checked />
            <x-form.radio field="document_type" label="Não" value="cpf" />
        </x-form.radio-group>
        <x-form.input field="document" label="CNPJ" type="text" value="{{ old('document') }}" mask="99.999.999/9999-99" :autocomplete="false" required />
        <x-form.input field="razao_social" label="Razão Social" type="text" value="{{ old('document') }}" :autocomplete="false" required />
        <x-form.select field="start_date" label="Inicio do Projeto" :options="$years" :selected="date('Y')" required description="Selecione o ano em que o projeto/nome do artista foi criado" />
        <x-form.select field="music_genres[]" label="Estilos Musicais" :options="$genres->toArray()" required multiple search description="Adicione quantos estilos musicais estiverem disponíveis no repertório do artista" />
    </div>
</div>

@pushOnce('custom-scripts')
<script>
    function string_to_slug(str) {
        str = str.replace(/^\s+|\s+$/g, '');
        str = str.toLowerCase();

        var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
        var to = "aaaaeeeeiiiioooouuuunc------";
        for (var i = 0, l = from.length; i < l; i++) {
            str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
        }

        str = str.replace(/[^a-z0-9 -]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-');

        return str;
    }

</script>
@endPushOnce

@push('custom-scripts')
<script>
    $(document).ready(function() {
        $('input[type=radio][name=document_type]').change(function() {
            if (this.value == 'cpf') {
                $("label[for=document]").text("CPF");
                $('#document').mask('999.999.999-99');
                $("#razao_social").parent().parent().addClass('d-none');
                $("#razao_social").attr('disabled', 'disabled');
                $("#razao_social").removeAttr('required');
            } else if (this.value == 'cnpj') {
                $("label[for=document]").text("CNPJ");
                $('#document').mask('99.999.999/9999-99');
                $("#razao_social").parent().parent().removeClass('d-none');
                $("#razao_social").removeAttr('disabled');
                $("#razao_social").attr('required', 'required');
            }
        });

        $("#name").unbind("keyup");
        $("#name").bind("keyup", function(e) {
            var value = e.target.value;
            $("#name_preview").text("https://mercadodebandas.com.br/" + string_to_slug(value));
        });
    });

</script>
@endpush
