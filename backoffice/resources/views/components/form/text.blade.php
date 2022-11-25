<x-form.form-group 
    :field="$field" 
    :label="$label" 
    :hidden="$hidden"
    :required="$required"
    :description="$description"
    >
    <p class="form-control-static" id="{{ $field }}">
        @if($type == 'link')
            <a href="{{ $url }}" class="@foreach($classes as $class) {{ $class }} @endforeach">{{ $value }}</a>
        @else
        {!! $value !!}
        @endif
    </p>
</x-form.form-group>