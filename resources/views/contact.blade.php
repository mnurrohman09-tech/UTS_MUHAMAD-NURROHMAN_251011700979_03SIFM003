@extends('layouts.app')

@section('title', 'Kontak Kami - MusicEvents')

@section('content')
<div class="container py-5">
    <!-- Header Section -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-8 text-center">
            <h1 class="fw-bold mb-3" style="color: #1e293b;">Hubungi Kami</h1>
            <p class="lead text-muted">
                Punya pertanyaan seputar jadwal event, kolaborasi, atau ingin mendaftarkan acara musikmu? Jangan ragu untuk menyapa kami!
            </p>
        </div>
    </div>

    <div class="row g-4 justify-content-center">
        <!-- Kolom Informasi & Media Sosial (Diubah ke Nuansa Biru Elegan) -->
        <div class="col-lg-5">
            <div class="card shadow border-0 p-4 h-100 text-white rounded-3" style="background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%);">
                <h3 class="fw-bold mb-4">🎵 Info Kontak</h3>
                <p class="text-white-50 mb-4">
                    Tim kami siap membantu menjawab pertanyaan Anda setiap hari Senin - Jumat pukul 09:00 - 17:00 WIB.
                </p>

                <div class="mb-3 d-flex align-items-start">
                    <span class="fs-4 me-3">📍</span>
                    <div>
                        <h6 class="fw-bold mb-1">Alamat Kantor</h6>
                        <p class="text-white-50 small mb-0">Jl. Margonda Raya No 274</p>
                    </div>
                </div>

                <div class="mb-3 d-flex align-items-start">
                    <span class="fs-4 me-3">📧</span>
                    <div>
                        <h6 class="fw-bold mb-1">Email Resmi</h6>
                        <p class="text-white-50 small mb-0">mnurrohman09@gmail.com</p>
                    </div>
                </div>

                <div class="mb-4 d-flex align-items-start">
                    <span class="fs-4 me-3">📞</span>
                    <div>
                        <h6 class="fw-bold mb-1">Telepon / WhatsApp</h6>
                        <p class="text-white-50 small mb-0">+62 899-7751-315</p>
                    </div>
                </div>

                <hr class="border-light opacity-25 my-4">

                <h6 class="fw-bold mb-3">Ikuti Media Sosial Kami:</h6>
                               <div class="social-icons justify-content-center justify-content-lg-start">

                    <a href="https://www.instagram.com/"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>

                    <a href="https://www.facebook.com/"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>

                    <a href="https://www.youtube.com/"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="YouTube">
                        <i class="bi bi-youtube"></i>
                    </a>

                    <a href="https://www.tiktok.com/"
                       target="_blank"
                       rel="noopener noreferrer"
                       aria-label="TikTok">
                        <i class="bi bi-tiktok"></i>
                    </a>

                </div>
            </div>
        </div>

        <!-- Kolom Formulir Pesan -->
        <div class="col-lg-7">
            <div class="card shadow-sm border-0 p-4 p-md-5 h-100 bg-white rounded-3 border-top border-primary border-4">
                <h3 class="fw-bold mb-4" style="color: #1e293b;">Kirim Pesan</h3>
                
                <!-- Contoh alert opsional jika pesan berhasil dikirim nantinya -->
                <!-- <div class="alert alert-success">Pesan Anda berhasil dikirim!</div> -->

                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold">Nama Lengkap</label>
                        <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Alamat Email</label>
                        <input type="email" class="form-control" id="email" placeholder="nama@example.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="subject" class="form-label fw-semibold">Subjek / Perihal</label>
                        <input type="text" class="form-control" id="subject" placeholder="Contoh: Tanya Jadwal Konser / Kerja Sama" required>
                    </div>

                    <div class="mb-4">
                        <label for="message" class="form-label fw-semibold">Pesan Anda</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Tuliskan pesan atau pertanyaan Anda di sini..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-2 fw-bold shadow-sm">Kirim Pesan Sekarang</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection