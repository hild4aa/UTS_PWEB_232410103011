@extends('Layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        @foreach ($dataList as $anime)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow">
                    <img src="{{ $anime['gambar'] }}" class="card-img-top" alt="{{ $anime['nama'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $anime['nama'] }}</h5>
                        @if ($anime['judul_inggris'])
                            <h6 class="card-subtitle mb-2 text-muted">{{ $anime['judul_inggris'] }}</h6>
                        @endif
                        <p class="card-text"><strong>Genre:</strong> {{ $anime['genre'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
