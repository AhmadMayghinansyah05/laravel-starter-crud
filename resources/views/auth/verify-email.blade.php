<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Verifikasi Email - Event Management</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

  <div class="card shadow-lg p-4 text-center" style="max-width: 500px; width:100%;">
    <h3 class="mb-3">Verifikasi Email Anda</h3>
    <p class="text-muted">
      Sebelum melanjutkan, silakan cek email Anda untuk link verifikasi.  
      Jika tidak menerima email, klik tombol di bawah untuk kirim ulang.
    </p>

    @if (session('status') == 'verification-link-sent')
      <div class="alert alert-success mt-2">
        Link verifikasi baru telah dikirim ke email Anda.
      </div>
    @endif

    <form method="POST" action="{{ route('verification.send') }}">
      @csrf
      <button type="submit" class="btn btn-primary w-100">Kirim Ulang Email Verifikasi</button>
    </form>

    <form method="POST" action="{{ route('logout') }}" class="mt-3">
      @csrf
      <button type="submit" class="btn btn-outline-secondary w-100">Logout</button>
    </form>
  </div>

</body>
</html>
