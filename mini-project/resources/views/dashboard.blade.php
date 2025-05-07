@extends('Layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow border-0">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div>
                            <h2 class="mb-0">Dashboard</h2>
                            <small class="text-muted">Selamat datang kembali!</small>
                        </div>
                    </div>
                    <hr>
                    <p class="fs-5">Halo, <strong>{{ $username }}</strong>👋</p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
