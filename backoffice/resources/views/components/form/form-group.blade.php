<div class="form-group @error($field) has-error @enderror @if($hidden) d-none @endif">
    <label for="{{ $field }}" class="form-label fs-6 fw-bolder text-gray-700 mb-3 @if($required) required @endif">{{ $label }}</label>
    <div class="mb-5">
        {{ $slot }}
        @if($description)
        <div class="form-text">
            <i class="fas fa-exclamation-circle ms-2 fs-7"></i> {!! $description !!}
        </div>
        @endif
        @error($field)
        <span class="text-danger">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
