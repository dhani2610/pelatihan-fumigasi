<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrator | Pelatihan Fumigasi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        body {
            background-color: #0c192c;
            background-image: 
                radial-gradient(circle at 80% 20%, rgba(245, 158, 11, 0.08) 0%, transparent 40%),
                radial-gradient(circle at 20% 80%, rgba(2, 132, 199, 0.08) 0%, transparent 40%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-card {
            background: #ffffff;
            width: 100%;
            max-width: 440px;
            border-radius: 16px;
            padding: 40px 32px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }

        .brand-header {
            text-align: center;
            margin-bottom: 28px;
        }

        .brand-icon {
            width: 50px;
            height: 50px;
            background: #f59e0b;
            color: #0c192c;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin: 0 auto 14px;
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.35);
        }

        .brand-header h1 {
            font-size: 1.3rem;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 4px;
        }

        .brand-header p {
            font-size: 0.8rem;
            color: #64748b;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-label {
            display: block;
            font-size: 0.8rem;
            font-weight: 700;
            color: #334155;
            margin-bottom: 6px;
        }

        .input-group {
            position: relative;
        }

        .input-group i {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #94a3b8;
            font-size: 1rem;
        }

        .form-control {
            width: 100%;
            padding: 11px 14px 11px 40px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 0.9rem;
            outline: none;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            border-color: #f59e0b;
            box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.15);
        }

        .btn-login {
            width: 100%;
            background: #0c192c;
            color: #ffffff;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 0.92rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s ease;
            margin-top: 8px;
        }

        .btn-login:hover {
            background: #1e293b;
            transform: translateY(-1px);
        }

        .demo-box {
            background: #f8fafc;
            border: 1px dashed #cbd5e1;
            border-radius: 8px;
            padding: 12px 14px;
            margin-top: 24px;
            font-size: 0.78rem;
            color: #475569;
        }

        .demo-box strong {
            color: #0f172a;
        }

        .btn-fill-demo {
            display: inline-block;
            margin-top: 6px;
            background: #e2e8f0;
            color: #1e293b;
            border: none;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 0.72rem;
            font-weight: 700;
            cursor: pointer;
        }

        .alert-error {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #991b1b;
            padding: 10px 14px;
            border-radius: 8px;
            font-size: 0.8rem;
            margin-bottom: 18px;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="brand-header">
            <div class="brand-icon">
                <i class="bi bi-shield-lock-fill"></i>
            </div>
            <h1>ADMIN PANEL FUMIGASI</h1>
            <p>Silakan masuk menggunakan akun resmi administrator</p>
        </div>

        @if($errors->any())
            <div class="alert-error">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('admin.login.submit') }}" method="POST">
            @csrf

            <div class="form-group">
                <label class="form-label">Email Administrator</label>
                <div class="input-group">
                    <i class="bi bi-envelope"></i>
                    <input type="email" name="email" id="email" class="form-control" placeholder="admin@fumigasi.com" required value="{{ old('email', 'admin@fumigasi.com') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Kata Sandi</label>
                <div class="input-group">
                    <i class="bi bi-key"></i>
                    <input type="password" name="password" id="password" class="form-control" placeholder="••••••••" required value="admin123">
                </div>
            </div>

            <button type="submit" class="btn-login">
                Masuk ke Panel Admin <i class="bi bi-arrow-right"></i>
            </button>
        </form>

        <div class="demo-box">
            <div><strong>Akun Administrator:</strong></div>
            <div>Email: <code>admin@fumigasi.com</code></div>
            <div>Password: <code>admin123</code></div>
            <button type="button" class="btn-fill-demo" onclick="fillDemo()">Isi Otomatis & Coba</button>
        </div>

        <div style="text-align: center; margin-top: 20px;">
            <a href="{{ route('home') }}" style="font-size: 0.78rem; color: #64748b; text-decoration: none;">
                <i class="bi bi-arrow-left"></i> Kembali ke Halaman Utama Website
            </a>
        </div>
    </div>

    <script>
        function fillDemo() {
            document.getElementById('email').value = 'admin@fumigasi.com';
            document.getElementById('password').value = 'admin123';
        }
    </script>
</body>
</html>
