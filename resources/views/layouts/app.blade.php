<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

{{-- HEADER / NAVBAR --}}
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ route('landing') }}">
      <span class="text-primary">{{ config('app.name') }}</span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}#hero">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}#features">Fitur</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}#about">Tentang</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('landing') }}#faq">FAQ</a></li>
      </ul>

      <ul class="navbar-nav ms-auto">
        @auth
          <li class="nav-item me-3">
            <a class="btn btn-outline-primary" href="{{ route('events.index') }}">Kelola Event</a>
          </li>
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button class="btn btn-danger">Logout</button>
            </form>
          </li>
        @else
          <li class="nav-item me-2">
            <a class="btn btn-outline-primary" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-primary" href="{{ route('register') }}">Daftar Gratis</a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>

{{-- Content Wrapper biar ga ketutup navbar fixed-top --}}
<main class="pt-5">
  @yield('content')
</main>

<footer class="bg-dark text-white-50 py-3 mt-auto">
  <div class="container text-center">© {{ date('Y') }} Event Management</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
