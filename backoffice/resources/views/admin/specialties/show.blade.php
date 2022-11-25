@extends('layouts.dashboard.app')

@section('title', 'Visualizar Função do Integrante')

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
        <li class="breadcrumb-item text-muted">Visualizar</li>
    </ul>
@endsection

@section('buttons')
    @can('specialties.edit')
        <a href="{{ route('admin.specialties.edit', $specialty) }}" class="btn btn-sm fw-bold btn-primary">Editar</a>
    @endcan
    <a href="{{ route('admin.specialties.index') }}" class="btn btn-sm fw-bold btn-secondary">Voltar</a>
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">

            <div class="card">
                <div class="card-body p-12">
                    <div class="row">
                        <div class="fs-5 text-dark fw-bolder mb-3">Dados da Função do Integrante</div>
                    </div>
                    <div class="separator separator-dashed mb-5"></div>

                    <div class="row gx-10 mb-5">
                        <div class="col-lg-12">
                            <div class="d-flex flex-column gap-5 mt-7">

                                <div class="d-flex flex-column gap-1">
                                    <div class="fw-bold fs-5">
                                        <span class="badge badge-primary">Código # {{ $specialty->id }}</span>
                                    </div>
                                </div>

                                <div class="d-flex flex-column gap-1">
                                    <div class="fw-bold text-muted">Nome</div>
                                    <div class="fw-bold fs-5">{{ $specialty->name }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
