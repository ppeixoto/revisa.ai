@extends('layouts.dashboard.app')

@section('title', 'Visualizar Usuário')

@section('breadcrumbs')
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
    <li class="breadcrumb-item text-muted">
        <a href="{{ route('admin.home') }}" class="text-muted text-hover-primary">Dashboard</a>
    </li>
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-400 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-muted">
        <a href="{{ route('admin.users.index') }}" class="text-muted text-hover-primary">Usuários</a>
    </li>
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-400 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-muted">Visualizar</li>
</ul>
@endsection

@section('buttons')
@can('users.edit')
<a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm fw-bold btn-primary">Editar</a>
@endcan
<a href="{{ route('admin.users.index') }}" class="btn btn-sm fw-bold btn-secondary">Voltar</a>
@endsection

@section('content')
<div id="kt_app_content" class="app-content flex-column-fluid">
    <div id="kt_app_content_container" class="app-container container-fluid">

        <div class="card">
            <div class="card-body p-12">
                <div class="row">
                    <div class="fs-5 text-dark fw-bolder mb-3">Dados do Usuário</div>
                </div>
                <div class="separator separator-dashed mb-5"></div>

                <div class="row gx-10 mb-5">
                    <div class="col-lg-12">
                        <div class="d-flex flex-column gap-5 mt-7">

                            <div class="d-flex flex-column gap-1">
                                <div class="fw-bold fs-5">
                                    <span class="badge badge-primary">Código # {{$user->id}}</span>
                                </div>
                            </div>

                            <div class="d-flex flex-column gap-1">
                                <div class="fw-bold text-muted">Nome</div>
                                <div class="fw-bold fs-5">{{$user->name}}</div>
                            </div>

                            <div class="d-flex flex-column gap-1">
                                <div class="fw-bold text-muted">E-mail</div>
                                <div class="fw-bold fs-5">{{ $user->email }}</div>
                            </div>

                            <!--
                            <div class="d-flex flex-column gap-1">
                                <div class="fw-bold text-muted">Notes</div>
                                <p>Emma Smith joined the team on September 2019 as a junior associate. She soon
                                    showcased her expertise and experience in knowledge and skill in the field, which
                                    was very valuable to the company. She was promptly promoted to senior associate on
                                    July 2020.
                                    <br>
                                    <br>Emma Smith now heads a team of 5 associates and leads the company's sales growth
                                    by 7%.
                                </p>
                            </div> -->

                        </div>
                    </div>
                    <!-- <div class="col-lg-6">
                        <div class="d-flex flex-column gap-5 mt-7">



                            <div class="d-flex flex-column gap-1">
                                <div class="fw-bold text-muted">Nome</div>
                                <div class="fw-bold fs-5">{{$user->name}}</div>
                            </div>

                            <div class="d-flex flex-column gap-1">
                                <div class="fw-bold text-muted">E-mail</div>
                                <div class="fw-bold fs-5">{{ $user->email }}</div>
                            </div>



                            <div class="d-flex flex-column gap-1">
                                <div class="fw-bold text-muted">Notes</div>
                                <p>Emma Smith joined the team on September 2019 as a junior associate. She soon
                                    showcased her expertise and experience in knowledge and skill in the field, which
                                    was very valuable to the company. She was promptly promoted to senior associate on
                                    July 2020.
                                    <br>
                                    <br>Emma Smith now heads a team of 5 associates and leads the company's sales growth
                                    by 7%.
                                </p>
                            </div>

                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
