<div class="form-check form-check-solid @if($inline) form-check-inline @endif">
    <div class="mb-5">
        <input class="form-check-input" type="radio" name="{{$field}}" value="{{$value}}" id="{{ $field.'-'.$value }}" @if($checked) checked @endif />
        <label class="form-check-label" for="{{ $field.'-'.$value }}">
            {{ $label }}
        </label>
    </div>
</div>
