@if($vertical)<div class="d-flex flex-row-auto w-100 w-lg-300px">@endif
<div class="stepper-nav @if(!$vertical) flex-center flex-wrap mb-10 @endif">
    {{ $slot }}
</div>
@if($vertical)</div>@endif