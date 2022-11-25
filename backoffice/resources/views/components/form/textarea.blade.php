<x-form.form-group 
    :field="$field" 
    :label="$label" 
    :hidden="$hidden"
    :required="$required"
    :description="$description"
    >
    <textarea id="{{ $field }}" 
            class="form-control form-control-solid" 
            name="{{ $field }}" 
            placeholder="{{ $label }}"
            rows="{{ $rows }}" 
            autofocus 
            @if($required) required @endif
        />{{ $value }}
    </textarea>
</x-form.form-group>