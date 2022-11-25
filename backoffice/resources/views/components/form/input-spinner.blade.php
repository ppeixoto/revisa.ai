<x-form.form-group 
    :field="$field" 
    :label="$label" 
    :hidden="$hidden"
    :required="$required"
    :description="$description"
    >
    <div id="{{ $field }}"></div>
</x-form.form-group>

@pushOnce('custom-scripts')
<script src="assets/js/jquery.duration.min.js"></script>
@endPushOnce

@pushOnce('custom-styles')
<link href="assets/css/jquery.duration.css" rel="stylesheet" type="text/css" />
@endPushOnce

@push('custom-scripts')
<script>
     $(document).ready(function() {
        $("#{{$field}}").durationjs({
            display:"hm",
            mInc: 15,
            hInc: 1,
            hMax: {{$maxHour}},
            hMin: {{$minHour}},
            initVal: {{ ($hour * 60 * 60) + ($minute * 60) }}
        });
    });
</script>
@endpush