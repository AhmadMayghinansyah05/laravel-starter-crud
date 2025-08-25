@extends('layouts.dashboard')

@section('content')
<div class="container py-4">
  <div class="card shadow-sm">
    <div class="card-header"><h5 class="m-0">Edit Event</h5></div>
    <div class="card-body">
      <form action="{{ route('events.update', $event) }}" method="POST">
        @csrf @method('PUT')
        @include('events._form', ['event' => $event])
        <div class="d-flex gap-2">
          <button class="btn btn-warning">Update</button>
          <a href="{{ route('events.index') }}" class="btn btn-secondary">Batal</a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
