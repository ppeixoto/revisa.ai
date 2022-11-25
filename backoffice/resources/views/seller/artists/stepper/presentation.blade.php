<x-form.separator title="Tempo de Apresentação" description="Múltiplos de 15 minutos" />
<div class="row gx-10 mb-5 justify-content-md-center">
    <div class="col-lg-12" style="text-align: left;">
        <x-form.input-spinner field="base_time" label="Tempo Mínimo de Apresentação" required readonly hour="2" minute="0" minHour="0" maxHour="12" description="Menor tempo de apresentação, que interfere na redução do valor do cache padrão." />
    </div>
</div>
<div class="row gx-10 mb-5 justify-content-md-center">
    <div class="col-lg-12" style="text-align: left;">
        <x-form.input-spinner field="max_time" label="Tempo Máximo de Apresentação" required readonly hour="5" minute="0" minHour="1" maxHour="12" description="Por questões de Saúde dos artistas, o sistema bloqueia um máximo de 12 horas de apresentação." />
    </div>
</div>
<x-form.separator title="Valores de Prateleira" description="Valores exibidos para todos os clientes da plataforma. ( Ex: Casamentos, Aniversários, Eventos Corporativos, etc.)" />
<div class="row gx-10 mb-5 justify-content-md-center">
    <div class="col-lg-12" style="text-align: left;">
        <x-form.input field="base_fee" label="Cachê Padrão" type="text" :autocomplete="false" placeholder="0,00" required mask="999.999.999,99" reverse price description="Valor cobrado para o menor tempo de apresentação. Custo de Transporte não Incluso." />
        <x-form.input field="half_hour_extra_fee" label="Adicional de 30 minutos" type="text" :autocomplete="false" placeholder="0,00" required mask="999.999.999,99" reverse price description="Valores cobrados aos clientes, para acrescentar minutos ao tempo mínimo de apresentação do artista." />
        <x-form.input field="hour_extra_fee" label="Adicional de 1 hora" type="text" :autocomplete="false" placeholder="0,00" required mask="999.999.999,99" reverse price description="Valores cobrados aos clientes, para acrescentar minutos ao tempo mínimo de apresentação do artista." />
    </div>
</div>
<div class="row gx-10 mb-5 justify-content-md-center">
    <div class="col-lg-12" style="text-align: left;">
        <x-form.checkbox-switch field="has_discounts_on_weekdays" label="Disponibilizar DESCONTOS em determinados dias da semana ?" checked />
        <div id="discounts_on_weekdays_fields">
            <x-form.checkbox-button-group field="discount_weekdays" label="Selecione os dias da semana" :options="[
                                            ['name' => 'Segunda' ,'checked' => true],
                                            ['name' => 'Terça' ,'checked' => true],
                                            ['name' => 'Quarta' ,'checked' => true],
                                            ['name' => 'Quinta' ,'checked' => true],
                                            ['name' => 'Sexta' ,'checked' => false],
                                            ['name' => 'Sábado' ,'checked' => false],
                                            ['name' => 'Domingo' ,'checked' => false]
                                            ]" description='Indique dias com menor demanda (Ex: Dias de semana). <BR> Os dias de menor fluxo na plataforma já estão pré selecionados. <BR> O Desconto não será aplicado em datas comemorativas.' />
            <x-form.input field="discount_percentage_on_weekdays" label="Selecione qual o desconto percentual" type="text" :autocomplete="false" placeholder="0,00" mask="99,99" reverse percentage />
            <x-form.form-group field="discount_preview" label="Valores com Desconto" :hidden="false" :required="false">
                <p class="form-control-static" id="discount_preview_base_fee">Cache dias Promocionais R$ 0,00</p>
                <p class="form-control-static" id="discount_preview_half_hour_extra_fee">30 minutos Adicionais R$ 0,00</p>
                <p class="form-control-static" id="discount_preview_hour_extra_fee">1 hora Adicional R$ 0,00</p>
            </x-form.form-group>
        </div>
    </div>
</div>
<x-form.separator title="Valores adicionais em Datas Comemorativas" description="Selecione a data e insira o valor do adicional.     O Valor inserido será adicionado ao valor do cachê." />
<div class="col-lg-12" style="text-align: left;">
    <x-form.repeater id="holidays">
        <x-form.repeater-item>
            <div class="form-group row mb-5">
                <div class="col-md-5">
                    <x-form.select field="holidays" label="Data Comemorativa" :options="$holidays" search repeater />
                </div>
                <div class="col-md-5">
                    <x-form.input field="holiday_extra_fee" label="Valor Adicional" type="text" :autocomplete="false" placeholder="0,00" mask="999.999.999,99" reverse price />
                </div>
                <x-form.repeater-item-delete />
            </div>
        </x-form.repeater-item>
    </x-form.repeater>
</div>

@push('custom-scripts')
<script>
    $(document).ready(function() {
        
        $('#has_discounts_on_weekdays').change(function(e) {
            $('#has_discounts_on_weekdays').is(':checked') ? $("#discounts_on_weekdays_fields").removeClass('d-none') : $("#discounts_on_weekdays_fields").addClass('d-none');
        });

        $("#discount_percentage_on_weekdays").unbind("keyup");
        $('#discount_percentage_on_weekdays').keyup(function(e) {
            /* todo create function to convert and format */
            $('#discount_preview_base_fee').text("Cache dias Promocionais R$ " + (($("#base_fee").val().replace(/\D/g, '') / 100) * (1 - (e.target.value.replace(/\,/g, '.') / 100))));
            $('#discount_preview_half_hour_extra_fee').text("30 minutos Adicionais R$ " + (($("#half_hour_extra_fee").val().replace(/\D/g, '') / 100) * (1 - (e.target.value.replace(/\,/g, '.') / 100))));
            $('#discount_preview_hour_extra_fee').text("1 hora Adicional R$ " + (($("#hour_extra_fee").val().replace(/\D/g, '') / 100) * (1 - (e.target.value.replace(/\,/g, '.') / 100))));
        });
    });

</script>
@endpush
