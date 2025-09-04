document.addEventListener('DOMContentLoaded', function() {
    // ... kode yang sudah ada ...
    const subtotalEl = document.getElementById('subtotal-price');
    const shippingEl = document.getElementById('shipping-price');
    const totalEl = document.getElementById('total-price');
    const shippingCourierEl = document.getElementById('shipping-courier');
    const checkoutBtn = document.getElementById('btn-checkout');

    // Tambahkan variabel baru untuk fitur ubah alamat
    const addressDisplayEl = document.getElementById('address-display');
    const addressFormEl = document.getElementById('address-form');
    const btnChangeAddress = document.getElementById('btn-change-address');
    const btnSaveAddress = document.getElementById('btn-save-address');
    const btnCancelAddress = document.getElementById('btn-cancel-address');
    const namaPenerimaEl = document.getElementById('nama-penerima');
    const alamatLengkapEl = document.getElementById('alamat-lengkap');
    const nomorHpEl = document.getElementById('nomor-hp');
    const inputNamaEl = document.getElementById('input-nama');
    const inputAlamatEl = document.getElementById('input-alamat');
    const inputHpEl = document.getElementById('input-hp');

    // Data produk contoh
    const productPrice = 500000;
    
    // Inisialisasi harga
    let shippingFee = 20000; // Harga default dari opsi JNE
    let subtotal = productPrice;
    let total = subtotal + shippingFee;

    // Fungsi untuk memperbarui ringkasan harga
    function updateSummary() {
        subtotalEl.textContent = `Rp ${subtotal.toLocaleString('id-ID')}`;
        shippingEl.textContent = `Rp ${shippingFee.toLocaleString('id-ID')}`;
        totalEl.textContent = `Rp ${(subtotal + shippingFee).toLocaleString('id-ID')}`;
    }

    // Event listener untuk perubahan ekspedisi
    shippingCourierEl.addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        shippingFee = parseInt(selectedOption.text.split('-')[1].trim().replace(/[^0-9]/g, ''));
        updateSummary();
    });

    // Event listener untuk tombol "Ubah Alamat"
    btnChangeAddress.addEventListener('click', function() {
        // Sembunyikan tampilan alamat dan tampilkan formulir
        addressDisplayEl.style.display = 'none';
        addressFormEl.style.display = 'block';
    });

    // Event listener untuk tombol "Simpan Alamat"
    btnSaveAddress.addEventListener('click', function() {
        // Ambil data dari input formulir
        const newNama = inputNamaEl.value;
        const newAlamat = inputAlamatEl.value;
        const newHp = inputHpEl.value;

        // Perbarui teks di elemen tampilan
        namaPenerimaEl.textContent = newNama;
        alamatLengkapEl.textContent = newAlamat;
        nomorHpEl.textContent = newHp;

        // Sembunyikan formulir dan tampilkan kembali tampilan alamat
        addressFormEl.style.display = 'none';
        addressDisplayEl.style.display = 'block';
    });
    
    // Event listener untuk tombol "Batal"
    btnCancelAddress.addEventListener('click', function() {
        // Sembunyikan formulir dan tampilkan kembali tampilan alamat
        addressFormEl.style.display = 'none';
        addressDisplayEl.style.display = 'block';
    });

    // Event listener untuk tombol checkout
    checkoutBtn.addEventListener('click', function() {
        const paymentMethod = document.getElementById('payment-method').value;
        const courier = shippingCourierEl.options[shippingCourierEl.selectedIndex].text;
        const finalTotal = subtotal + shippingFee;
        const finalAlamat = alamatLengkapEl.textContent;

        // Tampilkan pesan konfirmasi (bisa diganti dengan logika navigasi ke halaman pembayaran)
        alert(`Pesanan berhasil dibuat!\n\nAlamat Pengiriman: ${finalAlamat}\nMetode Pembayaran: ${paymentMethod}\nEkspedisi: ${courier}\nTotal Pembayaran: Rp ${finalTotal.toLocaleString('id-ID')}\n\nTerima kasih telah berbelanja!`);
    });

    // Panggil fungsi pertama kali untuk inisialisasi
    updateSummary();
});