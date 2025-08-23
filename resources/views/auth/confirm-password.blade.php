<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Konfirmasi Password - Event Management</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

  <div class="card shadow-lg p-4" style="max-width: 400px; width:100%;">
    <h3 class="text-center mb-4">Konfirmasi Password</h3>
    <p class="text-muted small text-center mb-4">
      Demi keamanan, silakan masukkan kembali password Anda.
    </p>

    <form method="POST" action="{{ route('password.confirm') }}">
      @csrf

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required autofocus>
        @error('password') <small class="text-danger">{{ $message }}</small> @enderror
      </div>

      <button type="submit" class="btn btn-danger w-100">Konfirmasi</button>

      <p class="text-center mt-3 mb-0">
        <a href="{{ route('home') }}">Kembali ke Beranda</a>
      </p>
    </form>
  </div>

</body>
</html>
