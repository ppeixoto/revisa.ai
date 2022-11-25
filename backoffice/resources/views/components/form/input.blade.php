<x-form.form-group 
    :field="$field" 
    :label="$label" 
    :hidden="$hidden"
    :required="$required"
    :description="$description"
    >
    <div class="input-group">
     @switch($type)
        @case('password')
        <div class="input-group">
            <input id="{{ $field }}" 
                type="{{ $type }}" 
                placeholder="{{ $label }}" 
                class="form-control form-control-solid" 
                name="{{ $field }}" 
                @if($value) value="{{ $value }}" @endif 
                @if($required) required @endif 
                @if(!$autocomplete) autocomplete="new-password" @endif
                @if($disabled) disabled @endif
            />
            <x-form.password-reveal :field="$field" />
        </div>
        @break
        @case('hidden')
        <input id="{{ $field }}" 
            type="{{ $type }}" 
            name="{{ $field }}" 
            @if($value) value="{{ $value }}" @endif 
            @if($required) required @endif
            @if($disabled) disabled @endif
        />
        @break
        @default
        @if($price) <span class="input-group-text">R$</span> @endif
        @if($percentage) <span class="input-group-text">%</span> @endif
        <input id="{{ $field }}" 
            type="{{ $type }}" 
            class="form-control form-control-solid" 
            name="{{ $field }}"
            placeholder="{{ $placeholder }}" 
            @if($value) value="{{ $value }}" @endif 
            @if($mask) data-mask="{{ $mask }}" @endif 
            @if($reverse) data-mask-reverse="true" @endif
            @if($required) required @endif
            @if($disabled) disabled @endif
            @if($maxlength > 0) maxlength="{{ $maxlength }}" @endif
        />
     @endswitch
    </div>
</x-form.form-group>

@push('custom-scripts')
@if($maxlength > 0)
<script>
    $("input#{{$field}}").maxlength({
          alwaysShow: true,
          threshold: 10,
          warningClass: "text-success",
          limitReachedClass: "text-danger",
          separator: ' de ',
          preText: 'Você tem ',
          postText: ' caracteres.',
          validate: true
        });
</script>
@endif
@endpush