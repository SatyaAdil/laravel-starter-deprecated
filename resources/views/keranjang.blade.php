<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja - Toko Satya</title>
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
                        <a class="nav-link" href="/produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/keranjang">Keranjang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/riwayat">Riwayat Pesanan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h1 class="text-center mb-4">Keranjang Belanja</h1>
        
        @if(count($cart_items) > 0)
            <div class="card p-4">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Produk</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cart_items as $item)
                                <tr>
                                    <td>{{ $item['name'] }}</td>
                                    <td>{{ $item['price'] }}</td>
                                    <td>
                                        <div class="input-group" style="max-width: 120px">
                                            <button class="btn btn-outline-secondary" type="button">-</button>
                                            <input type="number" class="form-control text-center" value="{{ $item['quantity'] }}" min="1">
                                            <button class="btn btn-outline-secondary" type="button">+</button>
                                        </div>
                                    </td>
                                    <td>{{ $item['total'] }}</td>
                                    <td><button class="btn btn-danger btn-sm">Hapus</button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Kode Voucher">
                            <button class="btn btn-outline-secondary" type="button">Terapkan</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Ringkasan Belanja</h5>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Subtotal:</span>
                                    <span>{{ $total }}</span>
                                </div>
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Biaya Pengiriman:</span>
                                    <span>Rp0</span>
                                </div>
                                <hr>
                                <div class="d-flex justify-content-between fw-bold">
                                    <span>Total:</span>
                                    <span>{{ $total }}</span>
                                </div>
                                <div class="d-grid gap-2 mt-3">
                                    <a href="/chekout" class="btn btn-primary">Lanjut ke Checkout</a>
                                    <a href="/produk" class="btn btn-outline-primary">Lanjut Belanja</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="card p-5 text-center">
                <h3>Keranjang Belanja Kosong</h3>
                <p>Belum ada produk di keranjang belanja Anda.</p>
                <div class="mt-3">
                    <a href="/produk" class="btn btn-primary">Mulai Belanja</a>
                </div>
            </div>
        @endif
    </div>

    <footer class="text-white py-4 mt-5 text-center">
        <p>© 2025 Toko Satya. Hak Cipta Dilindungi.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
