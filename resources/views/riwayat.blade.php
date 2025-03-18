<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pesanan - Toko Satya</title>
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
                        <a class="nav-link" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/keranjang">Keranjang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/riwayat">Riwayat Pesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1 class="text-center mb-4">Riwayat Pesanan</h1>
        
        <div class="card p-4">
            <div class="mb-3">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari pesanan...">
                    <button class="btn btn-custom" type="button">Cari</button>
                </div>
            </div>
            
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>No. Pesanan</th>
                            <th>Produk</th>
                            <th>Total Harga</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#12345</td>
                            <td>Produk A</td>
                            <td>Rp 150.000</td>
                            <td>18 Maret 2025</td>
                            <td><span class="badge bg-success">Selesai</span></td>
                            <td>
                                <button class="btn btn-sm btn-custom">Detail</button>
                                <button class="btn btn-sm btn-outline-success">Beli Lagi</button>
                            </td>
                        </tr>
                        <tr>
                            <td>#12346</td>
                            <td>Produk B</td>
                            <td>Rp 250.000</td>
                            <td>19 Maret 2025</td>
                            <td><span class="badge bg-warning text-dark">Sedang Dikirim</span></td>
                            <td>
                                <button class="btn btn-sm btn-custom">Detail</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="d-flex justify-content-between align-items-center mt-3">
                <div>
                    <span>Menampilkan 1-2 dari 2 pesanan</span>
                </div>
                <div>
                    <a href="/produk" class="btn btn-custom">Lanjut Belanja</a>
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
