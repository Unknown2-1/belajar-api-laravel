<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Ambil semua produk + kategori
    public function index()
    {
        return Product::with('category')->get();
    }

    // Simpan produk baru
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product);
    }

    // Detail produk
    public function show($id)
    {
        return Product::with('category')->find($id);
    }

    // Update produk
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());

        return response()->json($product);
    }

    // Hapus produk
    public function destroy($id)
    {
        Product::destroy($id);
        return response()->json(['message' => 'Deleted']);
    }
}
