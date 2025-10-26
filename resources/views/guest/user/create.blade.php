<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | MyApp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #ac83faff, #71aaffff);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .register-card {
            width: 420px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.2);
            padding: 2rem;
            animation: fadeIn 0.7s ease;
        }
        .register-card h3 {
            text-align: center;
            margin-bottom: 1.5rem;
            font-weight: bold;
            color: #0d6efd;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .btn-primary {
            background: linear-gradient(135deg, #6c63ff, #007bff);
            border: none;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #007bff, #6c63ff);
        }
    </style>
</head>
<body>

<div class="register-card">
    <h3>📝 Register</h3>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Masukkan nama...">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Masukkan email...">
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password...">
        </div>

        <div class="mb-3">
            <label class="form-label">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Ulangi password...">
        </div>

        <button type="submit" class="btn btn-primary w-100">Daftar</button>
    </form>

    <p class="text-center mt-3 small">
        Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>
    </p>
</div>

</body>
</html>
