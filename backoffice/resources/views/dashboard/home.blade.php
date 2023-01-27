@extends('layouts.dashboard.app')

@section('title','Dashboard')

@section('breadcrumbs')
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
    <li class="breadcrumb-item text-muted">Dashboard</li>
</ul>
@endsection

@section('content')
<div id="kt_app_content" class="app-content flex-column-fluid">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
            <div class="col-xl-12">
                <div class="card card-flush h-md-100">
                    <div class="card-header pt-7">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-800">Suas Revisões</span>
                            <span class="text-gray-400 mt-1 fw-semibold fs-6">Últimas revisões solicitadas</span>
                        </h3>
                        <div class="card-toolbar">
                            <a href="" class="btn btn-sm btn-primary">Solicitar Nova Revisão</a>
                        </div>
                    </div>
                    <div class="card-body pt-6">
                        <div class="table-responsive">
                            <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                <thead>
                                    <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                        <th class="p-0 pb-3 min-w-175px text-start">Solicitação</th>
                                        <th class="p-0 pb-3 min-w-100px text-end">Data de Solicitação</th>
                                        <th class="p-0 pb-3 min-w-100px text-end">Valor Previsto</th>
                                        <th class="p-0 pb-3 min-w-175px text-end pe-12">Status</th>                                        
                                        <th class="p-0 pb-3 w-50px text-end">Detalhes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="symbol symbol-50px me-3">
                                                    <div class="symbol symbol-50px overflow-hidden me-3">
                                                        <div class="symbol-label fs-3 bg-light-primary text-success">
                                                            1
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Nome do Arquivo</a>
                                                    <span class="text-gray-400 fw-semibold d-block fs-7">{{ rand(200,3000) }} palavras </span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="text-gray-600 fw-bold fs-6">{{ \Carbon\Carbon::now()->format('d/m/Y H:i:s') }}</span>
                                        </td>
                                        <td class="text-end pe-0">
                                                R$150,00                                            
                                        </td>
                                        <td class="text-end pe-12">
                                            <span class="badge py-3 px-4 fs-7 badge-light-primary">Aguardando Revisor</span>
                                        </td>

                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                    <i class="bi bi-pencil"></i>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
