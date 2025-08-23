<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Event Management</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

  <div class="card shadow-lg p-4" style="max-width: 400px; width:100%;">
    <h3 class="text-center mb-4">Login</h3>

    @if(session('status'))
      <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required autofocus>
        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
      </div>

      <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
          <input type="checkbox" name="remember"> <small>Ingat saya</small>
        </div>
        <a href="{{ route('password.request') }}" class="small">Lupa Password?</a>
      </div>

      <button type="submit" class="btn btn-primary w-100">Login</button>

      <p class="text-center mt-3 mb-0">
        Belum punya akun? <a href="{{ route('register') }}">Daftar</a>
      </p>
    </form>
  </div>

</body>
</html>
