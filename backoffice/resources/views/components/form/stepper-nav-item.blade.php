@if($vertical)
<div class="stepper-item me-5 @if($current) current @endif" data-kt-stepper-element="nav">
    <div class="stepper-line w-40px"></div>
    <div class="stepper-icon w-40px h-40px">
        <i class="stepper-check fas fa-check"></i>
        <span class="stepper-number">{{ $number }}</span>
    </div>
    <div class="stepper-label">
        <h3 class="stepper-title">{{ $title }}</h3>
        <div class="stepper-desc"> {{ $description }}</div>
    </div>
</div>
@else
<div class="stepper-item mx-2 my-4 @if($current) current @endif" data-kt-stepper-element="nav">
    <div class="stepper-line w-40px"></div>
    <div class="stepper-icon w-40px h-40px">
        <i class="stepper-check fas fa-check"></i>
        <span class="stepper-number">{{ $number }}</span>
    </div>
    <div class="stepper-label">
        <h3 class="stepper-title">{{ $title }}</h3>
        <div class="stepper-desc">{{ $description }}</div>
    </div>
</div>
@endif