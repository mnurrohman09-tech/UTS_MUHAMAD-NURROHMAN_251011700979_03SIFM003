@extends('layouts.app')

@section('title', 'Home - Portal Event Musik Indonesia')

@section('content')
<!-- Hero / Main Banner Section (Diubah ke Gradasi Biru Elegan) -->
<div class="hero-section text-white py-5 mb-5 rounded-3 shadow text-center position-relative overflow-hidden" style="background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);">
    <div class="container py-5 position-relative" style="z-index: 2;">
        <span class="badge bg-white text-primary px-3 py-2 text-uppercase mb-3 fw-bold">Portal Event Musik #1</span>
        <h1 class="display-3 fw-bold mb-3">Rasakan Sensasi Konser Impianmu!</h1>
        <p class="lead mb-4 text-white-50 col-lg-8 mx-auto">
            Platform terpercaya untuk menemukan informasi jadwal konser, festival musik, hingga pertunjukan akustik terbesar di Indonesia.
        </p>
        <div class="d-flex justify-content-center gap-3">
            <a href="{{ route('concerts.index') }}" class="btn btn-light text-primary btn-lg px-4 fw-bold shadow">
                Jelajahi Event &rarr;
            </a>
        </div>
    </div>
</div>

<div class="container">
    <!-- Section 1: Kategori Musik -->
    <div class="text-center mb-5">
        <h2 class="fw-bold" style="color: #1e293b;">Genre & Kategori Musik</h2>
        <p class="text-muted">Temukan event musik berdasarkan genre favoritmu</p>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-md-3 col-6">
            <div class="card bg-white border-0 shadow-sm text-center p-4 h-100 info-box">
                <div class="fs-1 mb-2">🎤</div>
                <h5 class="fw-bold mb-1">Pop & Ballad</h5>
                <p class="text-muted small mb-0">Konser solo & duet romantis</p>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card bg-white border-0 shadow-sm text-center p-4 h-100 info-box">
                <div class="fs-1 mb-2">🎸</div>
                <h5 class="fw-bold mb-1">Indie & Rock</h5>
                <p class="text-muted small mb-0">Skena independen & energi rock</p>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card bg-white border-0 shadow-sm text-center p-4 h-100 info-box">
                <div class="fs-1 mb-2">🎷</div>
                <h5 class="fw-bold mb-1">Jazz & Instrumental</h5>
                <p class="text-muted small mb-0">Alunan musik santai & berkelas</p>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="card bg-white border-0 shadow-sm text-center p-4 h-100 info-box">
                <div class="fs-1 mb-2">🎧</div>
                <h5 class="fw-bold mb-1">EDM & Dance</h5>
                <p class="text-muted small mb-0">Pesta musik elektronik & DJ</p>
            </div>
        </div>
    </div>

    <!-- Section 2: Mengapa Memilih MusicEvents -->
    <div class="row align-items-center my-5 py-4 bg-white rounded-3 shadow-sm p-4 border border-primary border-opacity-10">
        <div class="col-md-6 mb-4 mb-md-0">
            <span class="text-primary fw-bold text-uppercase">Kenapa Kami?</span>
            <h2 class="fw-bold mt-2 mb-3" style="color: #1e293b;">Informasi Konser Terlengkap & Terpercaya</h2>
            <p class="text-secondary leading-relaxed">
                Kami menyajikan informasi terupdate mengenai jadwal penampilan musisi favorit Anda, lokasi acara, hingga detail rincian acara dengan tampilan yang bersih dan mudah diakses.
            </p>
            <ul class="list-unstyled text-secondary">
                <li class="mb-2">✅ Update jadwal konser terbaru secara berkala</li>
                <li class="mb-2">✅ Informasi venue dan jam tampil yang akurat</li>
                <li class="mb-2">✅ Tampilan responsif & mudah digunakan</li>
            </ul>
        </div>
        <div class="col-md-6 text-center">
            <!-- Kotak yang sebelumnya bg-dark diubah menjadi nuansa biru terang -->
            <div class="p-5 text-white rounded-3 shadow" style="background: linear-gradient(135deg, #0dcaf0 0%, #0d6efd 100%);">
                <h3 class="fw-bold mb-3">Siap Menikmati Musik Live?</h3>
                <p class="text-white mb-4">Cek seluruh daftar event yang sedang dan akan berlangsung tahun ini.</p>
                <a href="{{ route('concerts.index') }}" class="btn btn-light text-primary fw-bold px-4 shadow-sm">Lihat Jadwal Lengkap</a>
            </div>
        </div>
    </div>

    <!-- Section 3: Statistik Platform -->
    <div class="row text-center my-5 g-4">
        <div class="col-md-4">
            <div class="p-4 bg-white rounded-3 shadow-sm border border-primary border-opacity-10">
                <h2 class="fw-bold text-primary mb-1">10+</h2>
                <p class="text-muted mb-0 fw-semibold">Event Aktif Terdaftar</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 bg-white rounded-3 shadow-sm border border-primary border-opacity-10">
                <h2 class="fw-bold text-primary mb-1">5+</h2>
                <p class="text-muted mb-0 fw-semibold">Kota Besar Penyelenggara</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-4 bg-white rounded-3 shadow-sm border border-primary border-opacity-10">
                <h2 class="fw-bold text-primary mb-1">100%</h2>
                <p class="text-muted mb-0 fw-semibold">Gratis Akses Informasi</p>
            </div>
        </div>
    </div>
</div>
@endsection