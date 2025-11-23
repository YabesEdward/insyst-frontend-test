# Insyst Frontend Test - Product Management Interface

Interface manajemen produk menggunakan Laravel Blade, Bootstrap 5, dan DataTables.

## Deskripsi

Aplikasi web ini dibuat sebagai bagian dari technical assessment Insyst untuk posisi Frontend Developer Intern. Aplikasi menampilkan tabel produk dengan fitur search, sorting, dan pagination menggunakan DataTables.

## Fitur

- Halaman tabel produk dengan data dummy
- DataTables dengan fitur search, sort, dan pagination
- Modal form untuk tambah produk
- Layout responsif dengan Bootstrap 5
- Validasi form sederhana
- Sticky footer
- File JavaScript terpisah untuk maintainability

## Tech Stack

- Laravel 11
- Bootstrap 5
- DataTables 1.13.6
- jQuery 3.7.0

## Cara Instalasi

1. Clone repository
```bash
git clone https://github.com/YabesEdward/insyst-frontend-test.git
cd insyst-frontend-test
```

2. Install dependencies
```bash
composer install
```

3. Copy file `.env.example` ke `.env`
```bash
cp .env.example .env
```

4. Generate application key
```bash
php artisan key:generate
```

5. Jalankan server
```bash
php artisan serve
```

6. Buka browser dan akses
```
http://localhost:8000/products
```

## Struktur File
```
resources/
├── views/
│   ├── layouts/
│   │   └── app.blade.php       # Layout utama
│   └── product/
│       └── index.blade.php     # Halaman produk
public/
└── js/
    └── product.js              # JavaScript untuk DataTables dan modal
```

## Catatan

- Data produk bersifat dummy dan tidak tersimpan ke database sesuai requirement test
- Modal hanya menampilkan alert untuk demo
- Semua styling menggunakan Bootstrap 5
- DataTables menggunakan bahasa Indonesia

## Dokumentasi

Dokumentasi lengkap dengan screenshot dan penjelasan fungsi file tersedia di file `YabesEdwardSihombing_FrontendTest.pdf`.

## Author

Yabes Edward Sihombing  
November 2025
