<x-form.separator title="Custos de Transporte Terrestre" description="" />
<div class="row">
    <div class="col-lg-6" style="text-align: left;">
        <x-form.input field="transport_base_fee" label="Custo Base Transporte Terrestre" type="text" :autocomplete="false" placeholder="0,00" required mask="999.999.999,99" reverse price description="Valor mínimo cobrado para logística, em geral, dentro da sua cidade. (Indicado ser Grátis - R$0,00)" />
    </div>
    <div class="col-lg-6" style="text-align: left;">
        <x-form.input field="transport_base_distance" label="Incluso até" type="text" :autocomplete="false" placeholder="30" value="30" required mask="999" description="Distância do CEP Matriz Cadastrado" />
    </div>
</div>
<div class="row">
    <div class="col-lg-6" style="text-align: left;">
        <x-form.input field="transport_extra_fee" label="Valor por quilometragem Extra" type="text" :autocomplete="false" placeholder="0,00" required mask="999.999.999,99" reverse price description="Indicamos entre R$5,00 e R$10,00 por quilômetro adicional ao limite incluso no Custo Acima. O valor considera o custo de IDA e VOLTA por quilômetro." />
    </div>
</div>
<x-form.separator title="Adicional no Cache para Longas Distâncias" description="" />
<div class="row">
    <div class="col-lg-6" style="text-align: left;">
        <x-form.input field="transport_long_distance" label="Acima de" type="text" :autocomplete="false" placeholder="150" value="150" required mask="999" description="Distância do CEP Matriz Cadastrado" />
    </div>
    <div class="col-lg-6" style="text-align: left;">
        <x-form.input field="transport_long_fee" label="Valor do Adicional de Longa distância" type="text" :autocomplete="false" placeholder="0,00" required mask="999.999.999,99" reverse price description="O Valor deve compensar o prejuizo pela impossibilidade de mais de uma contratação no mesmo dia." />
    </div>
</div>
<x-form.separator title="Adicional de Hospedagem" description="" />
<div class="row">
    <div class="col-lg-6" style="text-align: left;">
        <x-form.input field="hotel_distance" label="Acima de" type="text" :autocomplete="false" placeholder="150" value="150" required mask="999" description="Distância do CEP Matriz Cadastrado" />
    </div>
    <div class="col-lg-6" style="text-align: left;">
        <x-form.input field="hotel_fee" label="Valor do Adicional de Hospedagem" type="text" :autocomplete="false" placeholder="0,00" required mask="999.999.999,99" reverse price description="O valor do adicional deve incluir a diária de hospedagem de TODOS os integrantes da equipe." />
    </div>
</div>
<x-form.separator title="" description="" />
<div class="row">
    <div class="col-lg-6" style="text-align: left;">
        <x-form.select field="band_members_transport" label="Nº de Integrantes da Equipe em deslocamentos terrestres" :options="$band_members_transport" :selected="0" required description="" />
    </div>
    <div class="col-lg-6" style="text-align: left;">
        <x-form.input field="transport_max_distance" label="Limite de Distância para Deslocamento Terrestre" type="text" :autocomplete="false" placeholder="500" value="500" required mask="999" description="Distância do CEP Matriz Cadastrado" />
    </div>
</div>
