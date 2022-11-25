<x-form.separator title="Estrutura e Equipamentos" description="Observações Importantes: <BR>* Contratantes querem Facilidades, Incluir GRÁTIS ou Terceirizar Aluguel de estruturas de palco e equipamentos de som, torna seu serviço mais atraente ao público.<BR>* É indicado, o artista possuir uma extensão de 10 metros a 30 metros." />

<x-form.separator title="Espaço Apresentação" description="* Informe ao cliente uma ideia do espaço minímo necessário para sua apresentação" />
<div class="col-lg-6" style="text-align: left;">
    <x-form.select field="presentation_space_width" label="Largura" :options="$band_members_transport" :selected="0" required description="Medida em metros" />
</div>
<div class="col-lg-6" style="text-align: left;">
    <x-form.select field="presentation_space_depth" label="Profundidade" :options="$band_members_transport" :selected="0" required description="Medida em metros" />
</div>

<x-form.separator title="Equipamentos" description="Exemplos: Caixas de Som, Microfones, entre outros.<BR>Detalhes: marcas, modelos, potência, tamanho, entre outras variantes." />
<x-form.checkbox-switch field="has_equipments" label="Possui Equipamentos inclusos ou exigidos?" checked />
<x-form.repeater id="equipments">
    <x-form.repeater-item>
        <div class="form-group row mb-5">
            <div class="col-md-3">
                <x-form.select field="category" label="Categoria" :options="$equipment_categories->toArray()" required search repeater />
            </div>
            <div class="col-md-3">
                <x-form.input field="equipment" label="Equipamento" type="text" :autocomplete="false" required />
            </div>
            <div class="col-md-3">
                <x-form.input field="detail" label="Detalhe" type="text" :autocomplete="false" required />
            </div>
            <x-form.repeater-item-delete />
        </div>
    </x-form.repeater-item>
</x-form.repeater>



@push('custom-scripts')
<script>
    $(document).ready(function() {

        $('#has_equipments').change(function(e) {
            $('#has_equipments').is(':checked') ? $("#equipments").removeClass('d-none') : $("#equipments").addClass('d-none');
        });
    });

</script>
@endpush
