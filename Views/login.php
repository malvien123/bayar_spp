<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pembayaran SPP</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background: linear-gradient(to right, #4facfe, #00f2fe);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            border-radius: 15px;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.1);
            background: white;
            padding: 2rem;
            max-width: 400px;
            width: 100%;
        }
        .login-title {
            font-weight: bold;
            text-align: center;
            margin-bottom: 1rem;
        }
        .form-control:focus {
            border-color: #4facfe;
            box-shadow: 0 0 5px rgba(79, 172, 254, 0.5);
        }
        .btn-primary {
            background: #4facfe;
            border: none;
        }
        .btn-primary:hover {
            background: #3b8efc;
        }
    </style>
</head>
<body>

<div class="login-card">
    <h3 class="login-title"><i class="fas fa-school me-2"></i>Login SPP</h3>
    <form method="POST" action="index.php?controller=login&action=auth">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt me-1"></i> Login</button>
        </div>
    </form>
    <div class="text-center mt-3">
        <small>Belum punya akun? <a href="register.php">Daftar di sini</a></small>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>