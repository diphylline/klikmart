document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');

    if (loginForm) {
        loginForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const email = document.getElementById('loginEmail').value;
            const password = document.getElementById('loginPassword').value;

            // Validasi sederhana: Cek apakah email dan password tidak kosong
            if (email && password) {
                console.log('Login berhasil!');
                console.log('Email:', email);
                console.log('Password:', password);
                alert('Login berhasil! Data telah dicetak di konsol.');
            } else {
                alert('Mohon isi semua field.');
            }
        });
    }

    if (registerForm) {
        registerForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const fullname = document.getElementById('fullname').value;
            const email = document.getElementById('regEmail').value;
            const password = document.getElementById('regPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            // Validasi: Cek apakah semua field terisi
            if (!fullname || !email || !password || !confirmPassword) {
                alert('Mohon isi semua field.');
                return;
            }
            
            // Validasi: Cek apakah password dan konfirmasi password sama
            if (password !== confirmPassword) {
                alert('Password dan konfirmasi password tidak cocok.');
                return;
            }
            
            // Validasi: Cek panjang password (contoh)
            if (password.length < 6) {
                alert('Password harus memiliki minimal 6 karakter.');
                return;
            }
            
            console.log('Registrasi berhasil!');
            console.log('Full Name:', fullname);
            console.log('Email:', email);
            console.log('Password:', password);
            alert('Registrasi berhasil! Data telah dicetak di konsol.');
        });
    }
});