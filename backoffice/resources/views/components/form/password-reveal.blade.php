<span class="input-group-text" id="{{ $field }}-reveal">
    <i class="fas fa-eye fs-4"></i>
</span>
@push('custom-scripts')
<script>
    $(document).ready(function() {
        $("#{{ $field }}-reveal").on('click', function() {
            var $pwd = $("#{{ $field }}");
            if ($pwd.attr('type') === 'password') {
                $pwd.attr('type', 'text');
                $(this).find("i").removeClass('fa-eye').addClass('fa-eye-slash');
                
            } else {
                $pwd.attr('type', 'password');
                $(this).find("i").removeClass('fa-eye-slash').addClass('fa-eye');
            }
        });
    });

</script>
@endpush