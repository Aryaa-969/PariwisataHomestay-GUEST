<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #A3A467, #d1d2abff);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            width: 400px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.2);
            padding: 2rem;
            animation: fadeIn 0.7s ease;
        }
        .login-card h3 {
            text-align: center;
            margin-bottom: 1.5rem;
            font-weight: bold;
            color: #0d6efd;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

<div class="login-card">
    <h3>LOGIN</h3>

    @include('guest.layouts.guest.alerts')

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
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

    <form action="{{ route('login.post') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Masukkan email...">
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password...">
        </div>

        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
        <p class="text-center mt-3 small">
            Belum punya akun? <a href="{{ route('users.create') }}">Register</a>
        </p>
    <p class="text-center mt-3 text-muted small">
        © {{ date('Y') }} ArthurSkie - All rights reserved.
    </p>
</div>

</body>
</html>
