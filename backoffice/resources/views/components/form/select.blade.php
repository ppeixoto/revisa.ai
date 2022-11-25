<x-form.form-group 
    :field="$field" 
    :label="$label" 
    :hidden="$hidden"
    :required="$required"
    :description="$description"
    >
    @if($repeater)
    <select 
        class="form-select" 
        data-kt-repeater="select2" 
        data-placeholder="{{ $label }}" 
        name="{{ $field }}"
        @if($multiple) data-allow-clear="true" multiple="multiple" @endif>
        @if(!$selected)<option></option>@endif
        @foreach($options as $key => $value)
        <option value="{{ $key }}" @if($selected && $selected==$key) selected @endif>{{ $value }}</option>
        @endforeach
    </select>
    @else
    <select 
        @if($readonly) readonly @endif 
        @if($disabled) disabled @endif 
        id="{{ $field }}" 
        class="form-control form-select-solid"
        name="{{ $field }}" autofocus
        @if($required) required @endif 
        data-control="select2"        
        data-hide-search="{{ json_encode(!$search, true) }}"
        data-placeholder="{{ $label }}"
        @if(!$autocomplete) autocomplete="new-select" @endif
        @if($multiple) data-allow-clear="true" multiple="multiple" @endif>
            @if(!$selected)<option></option>@endif
            @foreach($options as $key => $value)
            <option value="{{ $key }}" @if($selected && $selected==$key) selected @endif>{{ $value }}</option>
            @endforeach
    </select>
    @endif
</x-form.form-group>