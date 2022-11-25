<form class="form @foreach($classes as $class) {{ $class }} @endforeach mx-auto" novalidate="novalidate" id="{{ $id }}" action="{{ $action }}" method="POST">
    @csrf
    <div class="mb-5">
        {{ $slot }}
    </div>
    <x-form.stepper-actions />
</form>
