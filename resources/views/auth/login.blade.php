<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sachio Admin - Login</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #1f2937, #111827);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .login-container {
            max-width: 420px;
            width: 100%;
            margin: auto;
        }

        .card {
            border: none;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.3);
        }

        .card-header {
            background: #2563eb;
            color: white;
            text-align: center;
            padding: 2rem 1rem;
        }

        .card-header h3 {
            margin: 0;
            font-weight: 700;
        }

        .form-control {
            border-radius: 10px;
        }

        .btn-custom {
            background: #2563eb;
            border: none;
            border-radius: 10px;
            transition: all 0.3s ease-in-out;
        }

        .btn-custom:hover {
            background: #1d4ed8;
            transform: scale(1.02);
        }

        .footer-text {
            color: #9ca3af;
            font-size: 0.9rem;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body class="d-flex align-items-center justify-content-center vh-100">

    <div class="login-container">
        <div class="card">
            <div class="card-header">
                <h3>Sachio Admin</h3>
                <p class="mb-0">Login</p>
            </div>
            <div class="card-body p-4">
                <form method="POST" action="{{ route('login.submit') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Email</label>
                        <input type="email" id="email" name="email"
                            class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"
                            required autofocus>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">Password</label>
                        <input type="password" id="password" name="password"
                            class="form-control @error('password') is-invalid @enderror" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" id="remember" name="remember" class="form-check-input">
                        <label for="remember" class="form-check-label">Remember Me</label>
                    </div>

                    <button type="submit" class="btn btn-custom text-white w-100 py-2">
                        Login
                    </button>

                    @if ($errors->any())
                        <div class="alert alert-danger mt-3 p-2 text-center">
                            {{ $errors->first() }}
                        </div>
                    @endif
                </form>
            </div>
        </div>
        <p class="footer-text">© {{ date('Y') }} Sachio Admin. All rights reserved.</p>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
