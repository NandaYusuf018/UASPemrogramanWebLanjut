<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Selamat Datang di Penyewaan Alat Outdoor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            min-height: 100vh;
        }
        .hero {
            color: #fff;
            padding: 80px 0 40px 0;
            text-align: center;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.3rem;
        }
        .fitur-card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            transition: transform 0.2s;
        }
        .fitur-card:hover {
            transform: translateY(-8px) scale(1.03);
        }
        .navbar {
            background: rgba(0,0,0,0.7) !important;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Penyewaan Alat Outdoor</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('customers.index') }}">Pelanggan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('alats.index') }}">Alat</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('penyewaans.index') }}">Penyewaan</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('detailsewas.index') }}">Detail Sewa</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('pembayarans.index') }}">Pembayaran</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero">
    <div class="container">
        <h1>Selamat Datang di Sistem Penyewaan Alat Outdoor</h1>
        <p class="mt-3 mb-4">Kelola penyewaan alat outdoor dengan mudah, cepat, dan efisien.<br>
        Cocok untuk usaha rental alat camping, hiking, dan aktivitas luar ruangan lainnya.</p>
        <a href="{{ route('penyewaans.index') }}" class="btn btn-lg btn-warning shadow">Mulai Sewa Sekarang</a>
    </div>
</section>

<section class="container mb-5">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card fitur-card h-100 text-center p-4">
                <div class="mb-3">
                    <span class="fs-1 text-primary"><i class="bi bi-people"></i></span>
                </div>
                <h5 class="card-title">Manajemen Pelanggan</h5>
                <p class="card-text">Catat dan kelola data pelanggan dengan mudah dan aman.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card fitur-card h-100 text-center p-4">
                <div class="mb-3">
                    <span class="fs-1 text-success"><i class="bi bi-box-seam"></i></span>
                </div>
                <h5 class="card-title">Manajemen Alat</h5>
                <p class="card-text">Kelola stok alat outdoor, harga sewa, dan deskripsi alat secara praktis.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card fitur-card h-100 text-center p-4">
                <div class="mb-3">
                    <span class="fs-1 text-warning"><i class="bi bi-cash-stack"></i></span>
                </div>
                <h5 class="card-title">Transaksi & Pembayaran</h5>
                <p class="card-text">Pantau transaksi penyewaan, detail alat yang disewa, dan pembayaran dengan transparan.</p>
            </div>
        </div>
    </div>
</section>

<footer class="text-center text-white-50 py-3">
    &copy; {{ date('Y') }} Penyewaan Alat Outdoor. All rights reserved.
</footer>

<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>