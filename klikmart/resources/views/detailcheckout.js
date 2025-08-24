document.addEventListener('DOMContentLoaded', function() {
    const subtotalEl = document.getElementById('subtotal-price');
    const shippingEl = document.getElementById('shipping-price');
    const totalEl = document.getElementById('total-price');
    const shippingCourierEl = document.getElementById('shipping-courier');
    const checkoutBtn = document.getElementById('btn-checkout');

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
        shippingFee = parseInt(selectedOption.value.split('-')[1].trim().replace(/[^0-9]/g, ''));
        updateSummary();
    });

    // Event listener untuk tombol checkout
    checkoutBtn.addEventListener('click', function() {
        const paymentMethod = document.getElementById('payment-method').value;
        const courier = shippingCourierEl.options[shippingCourierEl.selectedIndex].text;
        const finalTotal = subtotal + shippingFee;

        // Tampilkan pesan konfirmasi (bisa diganti dengan logika navigasi ke halaman pembayaran)
        alert(`Pesanan berhasil dibuat!\n\nMetode Pembayaran: ${paymentMethod}\nEkspedisi: ${courier}\nTotal Pembayaran: Rp ${finalTotal.toLocaleString('id-ID')}\n\nTerima kasih telah berbelanja!`);
    });

    // Panggil fungsi pertama kali untuk inisialisasi
    updateSummary();
});