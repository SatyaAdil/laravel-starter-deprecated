<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di Toko Satya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #343a40 !important;
        }
        .navbar-brand, .nav-link {
            color: #ffffff !important;
        }
        .btn-custom {
            background-color: #ff5722;
            border: none;
        }
        .btn-custom:hover {
            background-color: #e64a19;
        }
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #343a40;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Toko Satya</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/keranjang">Keranjang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/riwayat">Riwayat Pesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1 class="display-4 mb-4">Selamat Datang di Toko Satya</h1>
                <p class="lead">Temukan berbagai produk berkualitas dengan harga terbaik.</p>
                <div class="mt-5">
                    <a href="/produk" class="btn btn-custom btn-lg px-4">Lihat Produk</a>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center p-3">
                    <h5 class="card-title">Produk Berkualitas</h5>
                    <p class="card-text">Kami hanya menjual produk dengan kualitas terbaik untuk kepuasan pelanggan.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center p-3">
                    <h5 class="card-title">Pengiriman Cepat</h5>
                    <p class="card-text">Nikmati layanan pengiriman cepat ke seluruh wilayah Indonesia.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 text-center p-3">
                    <h5 class="card-title">Layanan Pelanggan 24/7</h5>
                    <p class="card-text">Tim layanan pelanggan kami siap membantu Anda kapan saja.</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-white py-4 mt-5">
        <div class="container text-center">
            <p>© 2025 Toko Satya. Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
