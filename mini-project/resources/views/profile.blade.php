@extends('Layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">

            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="mb-3">
                    </div>
                    <h2 class="card-title">Profil</h2>
                    <p class="fs-5 mt-3">Username : <strong>{{ $username }}</strong>.</p>
                    <a href="{{ route('dashboard') }}" class="btn btn-outline-primary mt-3">
                        Kembali ke Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
