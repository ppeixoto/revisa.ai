@extends('layouts.dashboard.app')

@section('title', 'Visualizar Estrutura e Equipamentos')

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
    <li class="breadcrumb-item text-muted">Visualizar</li>
</ul>
@endsection

@section('buttons')
@can('equipments.edit')
<a href="{{ route('admin.equipments.edit', $equipment) }}" class="btn btn-sm fw-bold btn-primary">Editar</a>
@endcan
<a href="{{ route('admin.equipments.index') }}" class="btn btn-sm fw-bold btn-secondary">Voltar</a>
@endsection

@section('content')
<div id="kt_app_content" class="app-content flex-column-fluid">
    <div id="kt_app_content_container" class="app-container container-fluid">

        <div class="card">
            <div class="card-body p-12">
                <div class="row">
                    <div class="fs-5 text-dark fw-bolder mb-3">Dados da Estrutura e Equipamentos</div>
                </div>
                <div class="separator separator-dashed mb-5"></div>

                <div class="row gx-10 mb-5">
                    <div class="col-lg-12">
                        <div class="d-flex flex-column gap-5 mt-7">

                            <div class="d-flex flex-column gap-1">
                                <div class="fw-bold fs-5">
                                    <span class="badge badge-primary">Código # {{$equipment->id}}</span>
                                </div>
                            </div>

                            <div class="d-flex flex-column gap-1">
                                <div class="fw-bold text-muted">Nome</div>
                                <div class="fw-bold fs-5">{{$equipment->name}}</div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="d-flex flex-column gap-5 mt-7">
                            <div class="d-flex flex-column gap-1">
                                <div class="fw-bold fs-5">
                                    <div class="fw-bold text-muted">Equipamentos</div>
                                </div>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th width="40%">Nome</th>
                                            <th width="50%">Descrição</th>
                                            <th width="10%">Medida</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($equipment->equipments as $item)
                                        <tr>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->description}}</td>
                                            <td>{{$item->unit->symbol}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection