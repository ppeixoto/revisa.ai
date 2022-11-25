<x-form.form-group 
    :field="$field" 
    :label="$label" 
    :hidden="$hidden"
    :required="$required"
    :description="$description"
    >
    <div class="btn-group d-flex justify-content-between" role="group" aria-label="{{ $label }}">
        @foreach($options as $option)
        <button id="{{ $field }}-{{ Str::slug($option['name']) }}-toggle" type="button" class="btn btn-sm btn-block text-responsive @if($option['checked']) btn-info @else btn-active-info btn-secondary @endif"><span class="d-md-block d-sm-none d-xs-none">{{ $option['name'] }}</span><span class="d-md-none d-sm-block d-xs-block">{{ Str::substr($option['name'],0,3) }}</span></button>
        <input id="{{ $field }}-{{ Str::slug($option['name']) }}-checkbox" type="checkbox" name="{{ $field }}-{{ Str::slug($option['name']) }}" class="d-none" @if($option['checked']) checked @endif/>
        @endforeach
    </div>
</x-form.form-group>

@pushOnce('custom-scripts')
<script>
    function toggleCheckboxButtonGroup(toggle, checkbox)
    {
        if(checkbox.prop('checked')) {
            toggle.removeClass('btn-info btn-active-info');
            toggle.addClass('btn-active-secundary btn-secondary');
            checkbox.prop('checked', false);
        } 
        else 
        {
            toggle.addClass('btn-info btn-active-info');
            toggle.removeClass('btn-active-secundary btn-secondary');
            checkbox.prop('checked', true);
        }
    }
</script>
@endPushOnce

@pushOnce('custom-scripts')
<script>
@foreach($options as $option)
    $("#{{$field}}-{{Str::slug($option['name'])}}-toggle").click(function() {
        toggleCheckboxButtonGroup($("#{{$field}}-{{Str::slug($option['name'])}}-toggle"),$("#{{$field}}-{{Str::slug($option['name'])}}-checkbox"));        
    });
@endforeach
</script>
@endPushOnce