@csrf
<div class="mb-3">
  <label class="form-label">Judul <span class="text-danger">*</span></label>
  <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
         value="{{ old('title', $event->title ?? '') }}" placeholder="Judul event">
  @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
  <label class="form-label">Tanggal Event <span class="text-danger">*</span></label>
  <input type="date" name="event_date" class="form-control @error('event_date') is-invalid @enderror"
         value="{{ old('event_date', isset($event) ? $event->event_date->format('Y-m-d') : '') }}">
  @error('event_date') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
  <label class="form-label">Lokasi <span class="text-danger">*</span></label>
  <input type="text" name="location" class="form-control @error('location') is-invalid @enderror"
         value="{{ old('location', $event->location ?? '') }}" placeholder="Lokasi event">
  @error('location') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
  <label class="form-label">Deskripsi</label>
  <textarea name="description" rows="5" class="form-control @error('description') is-invalid @enderror"
            placeholder="Deskripsi singkat">{{ old('description', $event->description ?? '') }}</textarea>
  @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>
