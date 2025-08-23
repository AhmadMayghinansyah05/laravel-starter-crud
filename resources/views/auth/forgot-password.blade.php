<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lupa Password - Event Management</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

  <div class="card shadow-lg p-4" style="max-width: 400px; width:100%;">
    <h3 class="text-center mb-4">Reset Password</h3>
    <p class="text-muted small text-center mb-4">
      Masukkan email Anda, link reset password akan dikirim.
    </p>

    @if(session('status'))
      <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
      @csrf

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
      </div>

      <button type="submit" class="btn btn-warning w-100">Kirim Link Reset</button>

      <p class="text-center mt-3 mb-0">
        <a href="{{ route('login') }}">Kembali ke Login</a>
      </p>
    </form>
  </div>

</body>
</html>
