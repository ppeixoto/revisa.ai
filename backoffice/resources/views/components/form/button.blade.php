@if($type == 'link')
<a
    id="{{ $finalId }}" 
    href="{{ $url }}" 
    class="{{ $class }}"
    @if(!empty($tooltip))
        data-toggle="tooltip" 
        data-placement="{{ $tooltip['placement'] }}"
        data-original-title="{{ $tooltip['title'] }}" 
    @endif 
    @if(!empty($modal))
        data-toggle="modal" 
        data-target="{{ $modal['target'] }}"
    @endif> {!! $placeholder !!}</a>
@else
<button 
    id="{{ $finalId }}" 
    type="{{ $type }}"
    class="{{ $class }}" 
    @if($disabled) disabled @endif 
    @if(!empty($tooltip))
        data-toggle="tooltip" 
        data-placement="{{ $tooltip['placement'] }}"
        data-original-title="{{ $tooltip['title'] }}" 
    @endif >{!! $placeholder !!}</button>
@endif

@if(!empty($tooltip))
    @push('custom-scripts')
    <script>
        $(document).ready(function(){
            $("{{ $tooltip['element'] }}").tooltip({
                selector: "[data-toggle=tooltip]",
                container: "body"
		    });
        });
    </script>
    @endpush
@endif