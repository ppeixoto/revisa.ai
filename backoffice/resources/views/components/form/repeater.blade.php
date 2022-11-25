<div id="{{ $id }}">
    <div class="form-group">
        <div data-repeater-list="{{ $id }}">
            {{ $slot }}
        </div>
    </div>
    <div class="form-group">
        <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
            <i class="la la-plus"></i>Adicionar
        </a>
    </div>
</div>

@push('custom-scripts')
    <script>
        $(document).ready(function() {
            $('#{{ $id }}').repeater({
                initEmpty: {!! json_encode($initEmpty) !!},
                isFirstItemUndeletable: {!! json_encode($isFirstItemUndeletable) !!},

                show: function() {
                    $(this).slideDown();
                    $("select[data-kt-repeater='select2']").next('.select2-container').remove();
                    $("select[data-kt-repeater='select2']").select2()

                },

                hide: function(deleteElement) {
                    $(this).slideUp(deleteElement);
                },

                ready: function() {
                    $("select[data-kt-repeater='select2']").select2()
                }
            });
        });
    </script>
@endpush
