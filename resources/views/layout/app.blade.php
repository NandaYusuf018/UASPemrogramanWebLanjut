<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Penyewaan Alat Outdoor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="#">Penyewaan Alat Outdoor</a>
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
<div class="container">
    @yield('content')
</div>
</body>
</html>