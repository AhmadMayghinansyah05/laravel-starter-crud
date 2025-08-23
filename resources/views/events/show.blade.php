@extends('layouts.app')

@section('content')
<div class="container py-4">
  <div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5 class="m-0">Detail Event</h5>
      <div>
        @auth
          <a href="{{ route('events.edit', $event) }}" class="btn btn-sm btn-warning">Edit</a>
        @endauth
        <a href="{{ route('events.index') }}" class="btn btn-sm btn-secondary">Kembali</a>
      </div>
    </div>
    <div class="card-body">
      <dl class="row mb-0">
        <dt class="col-sm-3">Judul</dt>
        <dd class="col-sm-9">{{ $event->title }}</dd>

        <dt class="col-sm-3">Tanggal</dt>
        <dd class="col-sm-9">{{ $event->event_date->translatedFormat('d F Y') }}</dd>

        <dt class="col-sm-3">Lokasi</dt>
        <dd class="col-sm-9">{{ $event->location }}</dd>

        <dt class="col-sm-3">Deskripsi</dt>
        <dd class="col-sm-9">{{ $event->description ?: '-' }}</dd>
      </dl>
    </div>
  </div>
</div>
@endsection
