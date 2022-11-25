@extends('layouts.dashboard.app')

@section('title', 'Adicionar Estrutura e Equipamentos')

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
        <li class="breadcrumb-item text-muted">Adicionar</li>
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
                    <form action="{{ route('admin.equipments.store') }}" method="POST">
                        @csrf
                        <x-form.separator title="Dados da Estrutura e Equipamentos" />
                        <div class="row gx-10 mb-5">
                            <div class="col-lg-12">
                                <x-form.input field="name" label="Nome" type="text" value="{{ old('name') }}"
                                    :autocomplete="false" required />
                            </div>
                        </div>
                        <hr>
                        <x-form.repeater id="equipments">
                            <x-form.repeater-item>
                                <div class="form-group row mb-5">
                                    <div class="col-md-4">
                                        <x-form.input type="text" field="name" label="Equipamento" required />
                                    </div>
                                    <div class="col-md-2">
                                        <x-form.select field="unit_id" label="Medida" :options="$units->toArray()" repeater required />
                                    </div>
                                    <div class="col-md-4">
                                        <x-form.input type="text" field="description" label="Descrição" />
                                    </div>
                                    <x-form.repeater-item-delete />
                                </div>
                            </x-form.repeater-item>
                        </x-form.repeater>

                        <div class="row gx-10 mb-5 mt-5">
                            <x-form.button placeholder="Adicionar" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
