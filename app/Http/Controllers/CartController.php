<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart.index');
    }

    public function add($product)
    {
        return response()->json(['message' => "Produk $product ditambahkan ke keranjang"]);
    }

    public function update($product)
    {
        return response()->json(['message' => "Produk $product diperbarui di keranjang"]);
    }

    public function remove($product)
    {
        return response()->json(['message' => "Produk $product dihapus dari keranjang"]);
    }
}
