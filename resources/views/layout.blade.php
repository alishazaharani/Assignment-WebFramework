<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Custom Style Branding Mitra Buana --}}
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa; /* abu muda */
            color: #212529;
        }
        .navbar .nav-link {
            color: #212529 !important;
            font-weight: 500;
            margin-right: 10px;
        }
        .navbar .nav-link:hover {
            color: #F5C45E !important; /* kuning */
        }
        .navbar-brand {
            color: #BE3D2A !important;
            font-weight: 700;
            letter-spacing: 0.5px;
        }
        .btn-custom {
            background-color: #F5C45E; /* kuning */
            color: #212529;
            font-weight: 600;
            border: none;
        }
        .btn-custom:hover {
            background-color: #F5C45E; /* kuning lebih gelap */
            color: #fff;
        }
        .highlight {
            color: #BE3D2A;
            font-weight: bold;
        }
        .text-left {
    text-align: left !important;
}
    </style>
</head>
<body>
   <nav class="navbar navbar-expand-lg">
    <div class="container">
        {{-- Logo + Nama Brand --}}
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="{{ asset('assets/Logo.jpeg') }}" alt="Mitra Buana" style="height:60px; margin-right:10px;">
            <span class="fw-bold text-red">Mitra Buana</span>
        </a>

        {{-- Menu Navigasi --}}
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li><a class="nav-link" href="/home">Home</a></li>
                <li><a class="nav-link" href="/about">About</a></li>
                <li><a class="nav-link" href="/program">Program</a></li>
                <li><a class="nav-link" href="/team">Our Team</a></li>
                <li><a class="nav-link" href="/contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

    <main class="container py-4">
        @yield('content')
    </main>

    <footer class="text-center" style="font-size: 12px;">
        <p>© 2025 Mini Market Mitra Buana Melawi</p>
    </footer>
</body>
</html>
