<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk & Kategori - Toko Satya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
            color: #333;
        }
        .navbar {
            background-color: #2c3e50;
        }
        .card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #34495e;
            border-color: #34495e;
        }
        .btn-primary:hover {
            background-color: #2c3e50;
        }
        footer {
            background-color: #2c3e50;
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
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/produk">Produk</a>
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

    <div class="container mt-4">
        <h1 class="text-center mb-4">Daftar Produk & Kategori</h1>

        <div class="mb-5">
            <h2>Kategori</h2>
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-md-3 mb-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $category }}</h5>
                                <a href="#" class="btn btn-outline-primary btn-sm mt-2">Lihat Produk</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div>
            <h2>Produk</h2>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['name'] }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $product['name'] }}</h5>
                                <p class="card-text">Harga: {{ $product['price'] }}</p>
                                <div class="mt-auto">
                                    <form action="/keranjang" method="get" class="d-inline">
                                        <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                                        <button type="submit" class="btn btn-primary">Tambah ke Keranjang</button>
                                    </form>
                                    <a href="/chekout?product={{ $product['name'] }}&price={{ $product['price'] }}" class="btn btn-success">Beli Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <footer class="text-white py-4 mt-5 text-center">
        <p>© 2025 Toko Satya. Hak Cipta Dilindungi.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
