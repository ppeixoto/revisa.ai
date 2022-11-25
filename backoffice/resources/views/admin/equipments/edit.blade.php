@extends('layouts.dashboard.app')

@section('title', 'Editar Estrutura e Equipamentos')

@section('breadcrumbs')
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('admin.home') }}" class="text-muted text-hover-primary">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('admin.equipments.index') }}" class="text-muted text-hover-primary">Estruturas e
                Equipamentos</a>
        </li>
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <li class="breadcrumb-item text-muted">Editar</li>
    </ul>
@endsection

@section('buttons')
    <a href="{{ route('admin.equipments.index') }}" class="btn btn-sm fw-bold btn-secondary">Voltar</a>
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">

            <div class="card">
                <div class="card-body p-12">

                    <form action="{{ route('admin.equipments.update', $equipment) }}" method="POST">
                        @method('PUT')
                        @csrf

                        <div class="row">
                            <div class="fs-5 text-dark fw-bolder mb-3">Dados da Estrutura e Equipamentos</div>
                        </div>
                        <div class="separator separator-dashed mb-5"></div>

                        <div class="row gx-10 mb-5">
                            <div class="col-lg-12">
                                <x-form.input field="name" label="Nome" type="text"
                                    value="{{ old('name') ?? $equipment->name }}" :autocomplete="false" required />
                            </div>
                        </div>
                        <hr />

                        <x-form.repeater id="equipments" :isFirstItemUndeletable="false">
                            @foreach ($equipment->equipments as $index => $item)
                                <x-form.repeater-item>
                                    <div class="form-group row mb-5">
                                        <div class="col-md-4">
                                            <input type="hidden" name="id" id="id-{{ $index }}" value="{{ $item->id }}" />
                                            <x-form.input field="name" id="name-{{ $index }}" label="Equipamento" required value="{{ $item->name }}" />
                                        </div>
                                        <div class="col-md-2">
                                            <x-form.select field="unit_id" id="unit_id{{ $index }}" label="Medida" :options="$units->toArray()" :selected="$item->unit_id" repeater required />
                                        </div>
                                        <div class="col-md-4">
                                            <x-form.input field="description" id="description{{ $index }}" label="Descrição" value="{{ $item->description }}" />
                                        </div>

                                        @if ($item->isAssociated())
                                            <x-form.repeater-item-delete />
                                        @endif
                                    </div>
                                </x-form.repeater-item>
                            @endforeach
                        </x-form.repeater>

                        <div class="row gx-10 mb-5 mt-5">
                            <button type="submit" href="#" class="btn btn-primary w-100">
                                Atualizar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
