<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Dashboard - ' . config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

{{-- HEADER DASHBOARD --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold text-white" href="{{ route('events.index') }}">
      Dashboard CRUD
    </a>

    <div class="ms-auto">
      <form method="POST" action="{{ route('logout') }}" class="d-inline">
        @csrf
        <button class="btn btn-outline-light">Logout</button>
      </form>
    </div>
  </div>
</nav>

{{-- Content Wrapper --}}
<main class="container py-4">
  @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
