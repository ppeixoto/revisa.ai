<x-form.repeater id="band_members">
    <x-form.repeater-item>
        <div class="form-group row mb-5">
            <div class="col-md-5">
                <x-form.input field="band_members.name" label="Nome do Integrante" type="text" :autocomplete="false" required />
            </div>
            <div class="col-md-5">
                <x-form.select field="band_members.specialities" label="Funções" :options="$specialities->toArray()" required multiple search repeater />
            </div>
            <x-form.repeater-item-delete />
        </div>
    </x-form.repeater-item>
</x-form.repeater>
