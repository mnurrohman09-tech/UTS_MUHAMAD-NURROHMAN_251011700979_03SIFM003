<footer class="music-footer mt-auto">
    <div class="container py-5">
        <div class="row align-items-center text-center text-lg-start">

            <!-- Brand -->
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-3 mb-3">
                    <div class="footer-logo">
                        <i class="bi bi-music-note-beamed"></i>
                    </div>

                    <div>
                        <h4 class="fw-bold mb-0">MusicEvents</h4>
                        <small class="footer-muted">
                            Portal Event Musik Indonesia
                        </small>
                    </div>
                </div>

                <p class="footer-text mb-0">
                    Temukan konser terbaik, festival musik, dan pengalaman
                    hiburan yang tak terlupakan di seluruh Indonesia.
                </p>
            </div>

            <!-- Navigasi -->
            <div class="col-lg-3 mb-4 mb-lg-0">
                <h6 class="footer-title">Navigasi</h6>

                <ul class="list-unstyled footer-links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('concerts.index') }}">Daftar Event</a></li>
                    <li><a href="{{ url('/about') }}">Tentang Kami</a></li>
                    <li><a href="{{ url('/contact') }}">Kontak</a></li>
                </ul>
            </div>

            <!-- Media Sosial -->
            <div class="col-lg-4">
                <h6 class="footer-title">Ikuti Kami</h6>

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

                <p class="footer-muted mt-3 mb-0">
                    Selalu update informasi konser terbaru.
                </p>
            </div>

        </div>

        <!-- Copyright -->
        <hr class="footer-divider my-4">

        <div class="text-center footer-copyright">
            © {{ date('Y') }} <strong>MusicEvents</strong>
            • Tugas Pemrograman Web. Seluruh Hak Cipta Dilindungi.
        </div>
    </div>
</footer>
