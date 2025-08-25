@extends('layouts.dashboard')

@section('content')
<div class="container py-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="m-0">Semua Event</h2>
    @auth
      <a href="{{ route('events.create') }}" class="btn btn-primary">+ Tambah Event</a>
    @endauth
  </div>

  <div class="row g-4">
    @forelse ($events as $event)
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">{{ $event->title }}</h5>
            <p class="small text-muted mb-1">
              <strong>{{ $event->event_date->translatedFormat('d F Y') }}</strong> • {{ $event->location }}
            </p>
            <p class="card-text">{{ \Illuminate\Support\Str::limit($event->description, 120) }}</p>
            <a href="{{ route('events.show', $event) }}" class="btn btn-outline-secondary btn-sm">Detail</a>

            @auth
              <a href="{{ route('events.edit', $event) }}" class="btn btn-warning btn-sm ms-1">Edit</a>
              <form action="{{ route('events.destroy', $event) }}" method="POST" class="d-inline"
                    onsubmit="return confirm('Yakin hapus event ini?')">
                @csrf @method('DELETE')
                <button class="btn btn-danger btn-sm ms-1">Hapus</button>
              </form>
            @endauth
          </div>
        </div>
      </div>
    @empty
      <div class="col-12 text-center text-muted">Belum ada event.</div>
    @endforelse
  </div>

  @if ($events->hasPages())
    <div class="mt-4">{{ $events->links() }}</div>
  @endif
</div>
@endsection
