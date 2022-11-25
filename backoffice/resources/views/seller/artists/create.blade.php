@extends('layouts.dashboard.app')

@section('title', 'Adicionar Artista')

@section('breadcrumbs')
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
    <li class="breadcrumb-item text-muted">
        <a href="{{ route('seller.home') }}" class="text-muted text-hover-primary">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-400 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-muted">
        <a href="{{ route('seller.artists.index') }}" class="text-muted text-hover-primary">Artistas</a>
    </li>
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-400 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-muted">Adicionar</li>
</ul>
@endsection

@section('buttons')
<a href="{{ route('seller.artists.index') }}" class="btn btn-sm fw-bold btn-secondary">Voltar</a>
@endsection

@section('content')
<div id="kt_app_content" class="app-content flex-column-fluid">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="card">
            <div class="card-body p-12">
                <x-form.stepper id="create_artist" vertical>
                    <x-form.stepper-nav vertical>
                        <x-form.stepper-nav-item number="1" title="Básico" description="" vertical />
                        <x-form.stepper-nav-item number="2" title="Endereço" description="" vertical />
                        <x-form.stepper-nav-item number="3" title="Integrantes" description="" vertical />
                        <x-form.stepper-nav-item number="4" title="Mídia" description="" vertical />
                        <x-form.stepper-nav-item number="5" title="Apresentação e Valores" description="" vertical />
                        <x-form.stepper-nav-item number="6" title="Custo de Transporte" description="" vertical />
                        <x-form.stepper-nav-item number="7" title="Equipamentos" description="" vertical current />
                        <x-form.stepper-nav-item number="8" title="Agenda" description="" vertical />
                        <x-form.stepper-nav-item number="9" title="Detalhes" description="" vertical />
                    </x-form.stepper-nav>
                    <x-form.stepper-form :classes="['w-lg-900px']" id="create_artist_form" action="{{ route('seller.artists.store') }}">
                        <x-form.stepper-form-item>
                            @include('seller.artists.stepper.basic')
                        </x-form.stepper-form-item>
                        <x-form.stepper-form-item>
                            @include('seller.artists.stepper.address')
                        </x-form.stepper-form-item>
                        <x-form.stepper-form-item>
                            @include('seller.artists.stepper.band_members')
                        </x-form.stepper-form-item>
                        <x-form.stepper-form-item>
                            @include('seller.artists.stepper.media')
                        </x-form.stepper-form-item>
                        <x-form.stepper-form-item>
                            @include('seller.artists.stepper.presentation')
                        </x-form.stepper-form-item>
                        <x-form.stepper-form-item>
                            @include('seller.artists.stepper.transport')
                        </x-form.stepper-form-item>
                        <x-form.stepper-form-item current>
                            @include('seller.artists.stepper.equipments')
                        </x-form.stepper-form-item>
                    </x-form.stepper-form>
                </x-form.stepper>
            </div>
        </div>
    </div>
</div>
@endsection

@push('custom-scripts')
<script>
    function getFormData($form) {
        var unindexed_array = $form.serializeArray();
        var indexed_array = {};

        $.map(unindexed_array, function(n, i) {
            indexed_array[n['name']] = n['value'];
        });

        return unindexed_array;
    }

</script>
@endpush
