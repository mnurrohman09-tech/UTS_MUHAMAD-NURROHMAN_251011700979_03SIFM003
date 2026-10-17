@extends('layouts.app')

@section('title', 'Tentang Kami - MusicEvents')

@section('content')
<div class="container py-5">
    <!-- Hero / Intro Section -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-8 text-center">
            <span class="badge bg-primary px-3 py-2 text-uppercase mb-3 shadow-sm">Tentang Platform Kami</span>
            <h1 class="display-5 fw-bold mb-3" style="color: #1e293b;">Mengenal Lebih Dekat MusicEvents</h1>
            <p class="lead text-muted">
                Platform digital terdepan yang didedikasikan untuk memberikan informasi jadwal konser musik, festival indie, dan pertunjukan seni secara akurat di berbagai kota di Indonesia.
            </p>
        </div>
    </div>

    <!-- Misi & Visi Section (2 Kolom) -->
    <div class="row g-4 mb-5 align-items-center">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm p-4 h-100 bg-white rounded-3 info-box">
                <div class="fs-1 mb-3">🎯</div>
                <h3 class="fw-bold mb-3" style="color: #1e293b;">Misi Kami</h3>
                <p class="text-secondary lh-lg mb-0">
                    Menghubungkan para penikmat musik dengan musisi dan promotor melalui penyediaan direktori jadwal konser yang transparan, mudah diakses, terstruktur dengan baik, dan selalu terupdate.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow-sm p-4 h-100 bg-white rounded-3 info-box">
                <div class="fs-1 mb-3">🌟</div>
                <h3 class="fw-bold mb-3" style="color: #1e293b;">Visi Kami</h3>
                <p class="text-secondary lh-lg mb-0">
                    Menjadi pusat informasi referensi nomor satu bagi komunitas skena musik lokal dan nasional untuk merayakan denyut industri hiburan tanah air.
                </p>
            </div>
        </div>
    </div>

    <!-- Nilai & Keunggulan Section (Diubah ke Nuansa Biru Elegan) -->
    <div class="text-white rounded-3 p-4 p-md-5 mb-5 shadow" style="background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Nilai Utama Kami</h2>
            <p class="text-white-50 small">Komitmen kami dalam menghadirkan pengalaman terbaik bagi pengguna</p>
        </div>
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="p-3 bg-white bg-opacity-10 rounded-3 h-100">
                    <h4 class="fw-bold text-white mb-2">⚡ Cepat & Akurat</h4>
                    <p class="text-white-50 small mb-0">Data jadwal event diperbarui secara berkala sesuai perkembangan terbaru.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 bg-white bg-opacity-10 rounded-3 h-100">
                    <h4 class="fw-bold text-white mb-2">🎨 Estetik & Responsif</h4>
                    <p class="text-white-50 small mb-0">Dibangun dengan framework modern agar nyaman diakses dari berbagai perangkat.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 bg-white bg-opacity-10 rounded-3 h-100">
                    <h4 class="fw-bold text-white mb-2">🎓 Akademik Berkualitas</h4>
                    <p class="text-white-50 small mb-0">Dikembangkan secara profesional memenuhi standar proyek pemrograman web.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Informasi Proyek Akademik -->
    <div class="row justify-content-center text-center">
        <div class="col-lg-8">
            <div class="p-4 bg-white rounded-3 shadow-sm border border-primary border-opacity-10">
                <h5 class="fw-bold mb-2 text-primary">Informasi Proyek UTS</h5>
                <p class="text-muted small mb-0">
                    Website ini dibangun sebagai pemenuhan Tugas UTS berbasis Framework Laravel, mengimplementasikan arsitektur MVC, database relasional MySQL, serta pengelolaan aset frontend yang terstruktur.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection