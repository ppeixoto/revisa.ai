<x-form.form-group 
    :field="$field" 
    :label="$label" 
    :hidden="$hidden"
    :required="$required"
    :description="$description"
    >
    <div class="form-check form-switch form-check-custom form-check-solid">
        <input 
            name="{{ $field }}"
            class="form-check-input"
            type="checkbox" 
            value="" 
            id="{{ $field }}" 
            @if($checked)
            checked="checked" value="1"
            @else
            value="0"
            @endif
        />
    </div>
</x-form.form-group>