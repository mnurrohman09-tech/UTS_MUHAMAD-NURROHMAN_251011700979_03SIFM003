@extends('layouts.app')

@section('title', $concert->title)

@section('content')
<div class="container">
    <a href="{{ route('concerts.index') }}" class="btn btn-secondary mb-4">&larr; Kembali ke Daftar Event</a>

    <div class="card shadow-sm border-0 overflow-hidden">
        <div class="row g-0">
            <div class="col-md-5">
                <img src="{{ asset('assets/images/' . $concert->image) }}" class="img-fluid h-100 w-100" alt="{{ $concert->title }}" style="object-fit: cover; min-height: 350px;">
            </div>
            <div class="col-md-7">
                <div class="card-body p-4 p-md-5">
                    <span class="badge bg-primary mb-2">Konser Musik</span>
                    <h2 class="card-title fw-bold mb-3">{{ $concert->title }}</h2>
                    <h5 class="text-primary mb-4">Line Up / Musisi: <strong>{{ $concert->artist }}</strong></h5>
                    
                    <hr>

                    <div class="mb-4">
                        <p class="mb-2"><strong>📍 Lokasi:</strong> {{ $concert->location }}</p>
                        <p class="mb-2"><strong>📅 Tanggal:</strong> {{ \Carbon\Carbon::parse($concert->date)->format('d F Y') }}</p>
                        <p class="mb-2"><strong>⏰ Waktu:</strong> {{ \Carbon\Carbon::parse($concert->time)->format('H:i') }} WIB</p>
                    </div>

                    <hr>

                    <h5 class="fw-bold mb-2">Deskripsi Event:</h5>
                    <p class="card-text text-secondary lh-lg">{{ $concert->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection