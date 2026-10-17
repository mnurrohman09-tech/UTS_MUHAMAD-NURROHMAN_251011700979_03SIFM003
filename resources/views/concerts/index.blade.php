@extends('layouts.app')

@section('title', 'Daftar Event Musik')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="fw-bold">Jadwal Event Musik Terbaru</h1>
            <p class="text-muted">Pilih dan jelajahi konser musik favoritmu!</p>
        </div>
    </div>

    <div class="row g-4">
        @forelse($concerts as $concert)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 card-event">
                    <img src="{{ asset('assets/images/' . $concert->image) }}" class="card-img-top card-event-img" alt="{{ $concert->title }}" style="height: 220px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">{{ $concert->title }}</h5>
                        <p class="card-text text-primary mb-1"><strong>Artis:</strong> {{ $concert->artist }}</p>
                        <p class="card-text text-muted small mb-3">📍 {{ $concert->location }}</p>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-secondary">📅 {{ \Carbon\Carbon::parse($concert->date)->format('d M Y') }}</span>
                                <span class="badge bg-info text-dark">⏰ {{ \Carbon\Carbon::parse($concert->time)->format('H:i') }} WIB</span>
                            </div>
                            <a href="{{ route('concerts.show', $concert->id) }}" class="btn btn-outline-dark w-100">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-warning text-center">Belum ada event musik yang tersedia.</div>
            </div>
        @endforelse
    </div>
</div>
@endsection