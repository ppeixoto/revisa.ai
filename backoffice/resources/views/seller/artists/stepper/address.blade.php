<x-form.separator title="Endereço Matriz" description="Endereço considerado para calcular a distância e tempo até o local da primeira apresentação do dia.<BR>Indicamos colocar um endereço central a todos da equipe." />
<div class="row gx-10 mb-5 justify-content-md-center">
    <div class="col-lg-12" style="text-align: left;">
        <x-form.input field="zipcode" label="CEP" type="text" value="{{ old('zipcode') }}" mask="99.999-999" :autocomplete="false" required description="Digite o CEP e o endereço será carregado automaticamente." />
        <x-form.select field="state" label="Estado" :options="$states->toArray()" required />
        <x-form.select field="city" label="Cidade" required />
        <x-form.input field="address" label="Logradouro" type="text" value="{{ old('address') }}" :autocomplete="false" required />
        <x-form.input field="number" label="Número" type="text" value="{{ old('number') }}" :autocomplete="false" required />
        <x-form.input field="complement" label="Complemento" type="text" value="{{ old('complement') }}" :autocomplete="false" />
        <x-form.input field="neighborhood" label="Bairro" type="text" value="{{ old('neighborhood') }}" :autocomplete="false" required />
    </div>
</div>

@push('custom-scripts')
<script>
    $(document).ready(function() {
        $("#zipcode").unbind("keyup");
        $('#zipcode').keyup(function(e) {
            var cep = e.target.value.replace(/\D/g, '');
            if (cep.length == 8) {
                $.ajax({
                    url: 'https://viacep.com.br/ws/' + cep + '/json/'
                    , type: 'get'
                    , dataType: 'json'
                    , success: function(data, textStatus, xhr) {
                        if (typeof data.error == 'undefined') {
                            $('#state option:contains("' + data.uf + ' - ")').prop('selected', true).trigger('change');
                            $.ajax({
                                url: "{{ route('api.states.show', '') }}" + "/" + $('#state').val()
                                , type: 'GET'
                                , dataType: 'json'
                            , }).done(function(result) {
                                $("#city").empty();
                                result.data.forEach(function(item) {
                                    $("#city").append(
                                        '<option value="' + item.id + '">' + item.name + "</option>"
                                    );
                                });
                                $('#city option:contains("' + data.localidade + '")').prop('selected', true).trigger('change')
                                $('#address').val(data.logradouro);
                                $('#neighborhood').val(data.bairro);
                                $('input#complement').val('');
                                $('input#number').val('');
                                $('input#number').focus();
                            });
                        }
                    }
                });
            }
        });
    });
</script>
@endpush
