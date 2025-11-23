$(document).ready(function() {
    // Inisialisasi DataTables
    $('#productTable').DataTable({
        language: {
            search: "Cari:",
            lengthMenu: "Tampilkan _MENU_ data per halaman",
            info: "Menampilkan _START_ - _END_ dari _TOTAL_ data",
            infoEmpty: "Tidak ada data",
            infoFiltered: "(difilter dari _MAX_ total data)",
            zeroRecords: "Tidak ada data yang cocok",
            paginate: {
                first: "Pertama",
                last: "Terakhir",
                next: "Selanjutnya",
                previous: "Sebelumnya"
            }
        },
        pageLength: 10,
        ordering: true,
        responsive: true
    });

    // Tombol Simpan di Modal (untuk demo, hanya tampilkan alert)
    $('#saveProduct').click(function() {
        var nama = $('#productName').val();
        var harga = $('#productPrice').val();
        var stok = $('#productStock').val();

        // Validasi sederhana
        if (nama === '' || harga === '' || stok === '') {
            alert('Semua field harus diisi!');
            return;
        }

        // Tampilkan data (untuk demo)
        alert('Data Produk:\n\nNama: ' + nama + '\nHarga: Rp ' + harga + '\nStok: ' + stok + '\n\n(Demo: Data tidak disimpan ke database)');

        // Reset form & tutup modal
        $('#productName').val('');
        $('#productPrice').val('');
        $('#productStock').val('');
        $('#addProductModal').modal('hide');
    });
});