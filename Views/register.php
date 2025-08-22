<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Pembayaran SPP</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(to right, #4facfe, #38f9d7);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .register-card {
            border-radius: 15px;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.1);
            background: white;
            padding: 2rem;
            max-width: 450px;
            width: 100%;
        }
        .register-title {
            font-weight: bold;
            text-align: center;
            margin-bottom: 1rem;
        }
        .form-control:focus {
            border-color: #4facfe;
            box-shadow: 0 0 5px rgba(67, 233, 123, 0.5);
        }
        .btn-success {
            background: #4facfe;
            border: none;
        }
        .btn-success:hover {
            background: #4facfe;
        }
    </style>
</head>
<body>

<div class="register-card">
    <h3 class="register-title"><i class="fas fa-user-plus me-2"></i>Daftar Akun</h3>
    <form method="POST" action="index.php?controller=register&action=store">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
        </div>
        <div class="mb-3">
            <label for="level" class="form-label">Level</label>
            <select name="level" id="level" class="form-control" required>
                <option value="">-- Pilih Level --</option>
                <option value="siswa">Siswa</option>
                <option value="petugas">Petugas</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama lengkap" required>
        </div>
        <div class="mb-3">
            <label for="no_telp" class="form-label">No. Telepon</label>
            <input type="text" name="no_telp" id="no_telp" class="form-control" placeholder="Masukkan nomor telepon" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan alamat lengkap" required></textarea>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-success"><i class="fas fa-user-plus me-1"></i> Daftar</button>
        </div>
    </form>
    <div class="text-center mt-3">
        <small>Sudah punya akun? <a href="login.php">Login di sini</a></small>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>