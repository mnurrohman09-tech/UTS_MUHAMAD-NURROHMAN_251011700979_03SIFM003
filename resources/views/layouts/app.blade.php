<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Daftar Event Musik')</title>

    <!-- Asset Bootstrap CSS Lokal -->
    <link href="{{ asset('Bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS Terpisah -->
    <link href="{{ asset('style.css') }}" rel="stylesheet">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

    <!-- Memanggil Header dari folder partials -->
    @include('partials.header')

    <!-- Main Content -->
    <main class="py-4 flex-fill">
        @yield('content')
    </main>

    <!-- Memanggil Footer dari folder partials -->
    @include('partials.footer')

    <!-- Asset Bootstrap JS Lokal -->
    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</body>
</html>