@extends('layouts.app')

@section('content')
<div class="container py-4">
  <div class="card shadow-sm">
    <div class="card-header"><h5 class="m-0">Tambah Event</h5></div>
    <div class="card-body">
      <form action="{{ route('events.store') }}" method="POST">
        @include('events._form')
        <div class="d-flex gap-2">
          <button class="btn btn-primary">Simpan</button>
          <a href="{{ route('events.index') }}" class="btn btn-secondary">Batal</a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
