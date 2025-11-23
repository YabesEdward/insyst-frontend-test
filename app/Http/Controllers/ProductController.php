<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            [
                'id' => 1,
                'nama' => 'Laptop ASUS ROG',
                'harga' => 15000000,
                'stok' => 10,
                'tanggal_dibuat' => '2025-01-15'
            ],
            [
                'id' => 2,
                'nama' => 'Mouse Logitech G502',
                'harga' => 850000,
                'stok' => 25,
                'tanggal_dibuat' => '2025-01-18'
            ],
            [
                'id' => 3,
                'nama' => 'Keyboard Mechanical RGB',
                'harga' => 1200000,
                'stok' => 15,
                'tanggal_dibuat' => '2025-02-01'
            ],
            [
                'id' => 4,
                'nama' => 'Monitor LG 27 inch',
                'harga' => 3500000,
                'stok' => 8,
                'tanggal_dibuat' => '2025-02-10'
            ],
            [
                'id' => 5,
                'nama' => 'Headset HyperX Cloud',
                'harga' => 950000,
                'stok' => 20,
                'tanggal_dibuat' => '2025-02-15'
            ],
            [
                'id' => 6,
                'nama' => 'Webcam Logitech C920',
                'harga' => 1100000,
                'stok' => 12,
                'tanggal_dibuat' => '2025-03-01'
            ],
            [
                'id' => 7,
                'nama' => 'SSD Samsung 1TB',
                'harga' => 1450000,
                'stok' => 30,
                'tanggal_dibuat' => '2025-03-05'
            ],
            [
                'id' => 8,
                'nama' => 'RAM DDR4 16GB',
                'harga' => 750000,
                'stok' => 40,
                'tanggal_dibuat' => '2025-03-10'
            ],
            [
                'id' => 9,
                'nama' => 'Mousepad Gaming XL',
                'harga' => 150000,
                'stok' => 50,
                'tanggal_dibuat' => '2025-03-12'
            ],
            [
                'id' => 10,
                'nama' => 'USB Hub 4 Port',
                'harga' => 120000,
                'stok' => 35,
                'tanggal_dibuat' => '2025-03-15'
            ],
        ];

        return view('product.index', compact('products'));
    }
}