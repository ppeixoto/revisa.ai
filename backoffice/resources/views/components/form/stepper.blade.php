<div class="stepper stepper-pills @if($vertical) stepper-column d-flex flex-column flex-lg-row between @endif" id="{{ $id }}">
    {{ $slot }}
</div>

@push('custom-scripts')
<script>
    $(document).ready(function() {
        var element = document.querySelector("#{{ $id }}");
        var stepper = new KTStepper(element);

        stepper.on("kt.stepper.next", function(stepper) {
            stepper.goNext();
        });

        stepper.on("kt.stepper.previous", function(stepper) {
            stepper.goPrevious();
        });
    });
</script>
@endpush
