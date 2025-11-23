@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Manajemen Produk</h2>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal">
            <i class="bi bi-plus-lg"></i> Tambah Produk
        </button>
    </div>

    <!-- Tabel Produk -->
    <div class="card shadow-sm">
        <div class="card-body">
            <table id="productTable" class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product['id'] }}</td>
                        <td>{{ $product['nama'] }}</td>
                        <td data-order="{{ $product['harga'] }}">Rp {{ number_format($product['harga'], 0, ',', '.') }}</td>
                        <td>
                            @if($product['stok'] < 10)
                                <span class="badge bg-danger">{{ $product['stok'] }}</span>
                            @elseif($product['stok'] < 20)
                                <span class="badge bg-warning text-dark">{{ $product['stok'] }}</span>
                            @else
                                <span class="badge bg-success">{{ $product['stok'] }}</span>
                            @endif
                        </td>
                        <td>{{ $product['tanggal_dibuat'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal Tambah Produk -->
    <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="addProductModalLabel">Tambah Produk Baru</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="productForm">
                        <div class="mb-3">
                            <label for="productName" class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="productName" placeholder="Masukkan nama produk" required>
                        </div>
                        <div class="mb-3">
                            <label for="productPrice" class="form-label">Price <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="number" class="form-control" id="productPrice" placeholder="Masukkan harga" min="0" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="productStock" class="form-label">Stock <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="productStock" placeholder="Masukkan jumlah stok" min="0" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="saveProduct">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/product.js') }}"></script>
@endsection
