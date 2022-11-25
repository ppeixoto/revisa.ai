@extends('layouts.dashboard.app')

@section('title', 'Editar Operador')

@section('breadcrumbs')
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('admin.home') }}" class="text-muted text-hover-primary">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('admin.operators.index') }}" class="text-muted text-hover-primary">Operadores</a>
        </li>
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <li class="breadcrumb-item text-muted">Editar</li>
    </ul>
@endsection

@section('buttons')
    <a href="{{ route('admin.operators.index') }}" class="btn btn-sm fw-bold btn-secondary">Voltar</a>
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">

            <div class="card">
                <div class="card-body p-12">

                    <form action="{{ route('admin.operators.update', $admin) }}" method="POST">
                        @method('PUT')
                        @csrf

                        <div class="row">
                            <div class="fs-5 text-dark fw-bolder mb-3">Dados do Operador</div>
                        </div>
                        <div class="separator separator-dashed mb-5"></div>

                        <div class="row gx-10 mb-5">
                            <div class="col-lg-6">
                                <x-form.input field="name" label="Nome" type="text"
                                    value="{{ old('name') ?? $admin->name }}" :autocomplete="false" required />
                                <x-form.input field="email" label="E-mail" type="email"
                                    value="{{ old('email') ?? $admin->email }}" :autocomplete="false" required />
                            </div>
                            <div class="col-lg-6">
                                <x-form.input field="password" label="Senha" type="password" :autocomplete="false"
                                    value="{{ old('password') }}" />
                                <x-form.input field="password_confirmation" label="Confirmar Senha" type="password"
                                    :autocomplete="false" />
                            </div>
                        </div>
                        <div class="row gx-10 mb-5">
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
