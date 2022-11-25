@extends('layouts.dashboard.auth')

@section('content')
    <div class="card-body p-10 p-lg-20">
        <!--begin::Form-->
        <form class="form w-100" action="{{ route('admin.auth.signin') }}" method="post">
            @csrf
            <div class="text-center mb-11">
                <h1 class="text-dark fw-bolder mb-3">Autenticação</h1>
                <div class="text-gray-500 fw-semibold fs-6">{{ env('APP_NAME') }}</div>
            </div>
            <div class="fv-row mb-8">
                <input type="text" placeholder="E-mail" name="email" autocomplete="off" value="{{ old('email') }}"
                    class="form-control bg-transparent" />
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="fv-row mb-3">
                <input type="password" placeholder="Senha" name="password" autocomplete="off"
                    class="form-control bg-transparent" />
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                <div></div>
                <a href="#" class="link-primary">Esqueceu Senha ?</a>
            </div>

            <div class="d-grid mb-10">
                <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                    <span class="indicator-label">Autenticar</span>
                </button>
            </div>

            <x-message />

        </form>
    </div>
@endsection
