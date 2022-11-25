@extends('layouts.dashboard.app')

@section('title', 'Adicionar Função Integrante')

@section('breadcrumbs')
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('admin.home') }}" class="text-muted text-hover-primary">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('admin.specialties.index') }}" class="text-muted text-hover-primary">Funções Integrantes</a>
        </li>
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <li class="breadcrumb-item text-muted">Adicionar</li>
    </ul>
@endsection

@section('buttons')
    <a href="{{ route('admin.specialties.index') }}" class="btn btn-sm fw-bold btn-secondary">Voltar</a>
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="card">
                <div class="card-body p-12">
                    <form action="{{ route('admin.specialties.store') }}" method="POST">
                        @csrf
                        <x-form.separator title="Dados da Função do Integrante" />
                        <div class="row gx-10 mb-5">
                            <div class="col-lg-12">
                                <x-form.input field="name" label="Nome" type="text" value="{{ old('name') }}"
                                    :autocomplete="false" required />
                            </div>
                        </div>
                        <div class="row gx-10 mb-5">
                            <x-form.button placeholder="Adicionar" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
