@extends('layouts.dashboard.app')

@section('title', 'Estilos Musicais')

@section('breadcrumbs')
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
        <li class="breadcrumb-item text-muted">
            <a href="{{ route('admin.home') }}" class="text-muted text-hover-primary">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <span class="bullet bg-gray-400 w-5px h-2px"></span>
        </li>
        <li class="breadcrumb-item text-muted">Estilos Musicais</li>
    </ul>
@endsection

@section('buttons')
    @can('musicgenres.create')
        <a href="{{ route('admin.musicgenres.create') }}" class="btn btn-sm fw-bold btn-primary">Adicionar</a>
    @endcan
@endsection

@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="card">
                <div class="card-header border-0 pt-6">
                    <div class="card-title">
                        <div class="d-flex align-items-center position-relative my-1">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                        rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="black"></path>
                                </svg>
                            </span>
                            <form action="{{ route('admin.musicgenres.index') }}" method="get">
                                <input type="text" data-kt-musicgenre-table-filter="search" name="search"
                                    value="{{ $search }}" class="form-control form-control-solid w-250px ps-14"
                                    placeholder="Busca por nome">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div id="kt_table_musicgenres_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="table-responsive">

                            <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                                id="kt_table_musicgenres">
                                <thead>
                                    <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                                        <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_table_musicgenres"
                                            rowspan="1" colspan="1" style="width: 235.281px;">Nome</th>
                                        @canany(['musicgenres.edit', 'musicgenres.destroy'])
                                            <th class="text-center min-w-100px sorting_disabled" rowspan="1" colspan="1"
                                                aria-label="Actions" width="1%">Ações</th>
                                        @endcanany
                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 fw-bold">
                                    @if (!$musicgenres->count())
                                        <tr class="odd">
                                            <td valign="top" colspan="7" class="dataTables_empty">Nenhum registro
                                                encontrado / cadastrado</td>
                                        </tr>
                                    @endif
                                    @foreach ($musicgenres as $musicgenre)
                                        <tr>
                                            <td>
                                                <a href="{{ route('admin.musicgenres.show', [$musicgenre]) }}"
                                                    class="text-gray-800 text-hover-primary mb-1">{{ $musicgenre->name }}
                                                </a>
                                            </td>
                                            @canany(['musicgenres.edit', 'musicgenres.destroy'])
                                                <td class="text-center" nowrap="nowrap">

                                                    @can('musicgenres.edit')
                                                        <a href="{{ route('admin.musicgenres.edit', [$musicgenre]) }}"
                                                            class="btn btn-sm btn-icon btn-primary">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                    @endcan

                                                    @can('musicgenres.destroy')
                                                        <form method="post"
                                                            action="{{ route('admin.musicgenres.destroy', [$musicgenre]) }}"
                                                            class="d-inline"
                                                            onsubmit="return confirm('Deseja realmente remover o registro?');">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-sm btn-icon btn-danger"><i
                                                                    class="fa fa-trash"></i></button>
                                                        </form>
                                                    @endcan

                                                </td>
                                            @endcanany
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>

                        <x-layouts.shared.pagination :items="$musicgenres" />

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
