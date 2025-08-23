@extends('layouts.app')

@section('content')
{{-- HERO SECTION --}}
<section id="hero" class="py-5" style="background: #5409DA; color:white;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <h1 class="display-5 fw-bold">Kelola Event Dengan Mudah & Cepat</h1>
        <p class="lead">Platform sederhana untuk membuat, mengatur, dan berbagi event. Dibangun dengan Laravel 11, Blade, dan Breeze Authentication.</p>
        @auth
          <a href="{{ route('events.index') }}" class="btn btn-light btn-lg mt-3">Kelola Event</a>
        @else
          <a href="{{ route('register') }}" class="btn btn-warning btn-lg mt-3 me-2">Daftar Gratis</a>
          <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg mt-3">Login</a>
        @endauth
      </div>
      <div class="col-md-6 text-center">
          <img src="{{ asset('img/event-illustration.jpg') }}" 
     alt="Event Illustration" class="img-fluid rounded">
      </div>
    </div>
  </div>
</section>

{{-- STATS SECTION --}}
<section id="stats" class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Event Management in Numbers</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="p-4 bg-white rounded shadow-sm">
          <h3 class="fw-bold text-primary">500+</h3>
          <p class="mb-0">Event Dibuat</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 bg-white rounded shadow-sm">
          <h3 class="fw-bold text-success">300+</h3>
          <p class="mb-0">Organizer Aktif</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 bg-white rounded shadow-sm">
          <h3 class="fw-bold text-warning">1000+</h3>
          <p class="mb-0">Peserta Terdaftar</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- FEATURES --}}
<section id="features" class="py-5" style="background: #8DD8FF;">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="p-4 bg-white rounded shadow-sm h-100">
          <h5 class="fw-bold">🔒 Autentikasi</h5>
          <p class="mb-0">Login & Register sudah tersedia dengan Laravel Breeze.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 bg-white rounded shadow-sm h-100">
          <h5 class="fw-bold">⚡ CRUD Cepat</h5>
          <p class="mb-0">Tambah, edit, hapus, dan lihat detail event dengan mudah.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 bg-white rounded shadow-sm h-100">
          <h5 class="fw-bold">📱 Responsif</h5>
          <p class="mb-0">Desain modern dan responsif, nyaman digunakan di semua perangkat.</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- ABOUT SECTION --}}
<section id="about" class="py-5" style="background:#4E71FF; color:white;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-5 mb-4 mb-md-0">
        <img src="https://via.placeholder.com/400x300?text=About+Image" class="img-fluid rounded" alt="">
      </div>
      <div class="col-md-7">
        <h2 class="fw-bold">Tentang Project Ini</h2>
        <p class="lead">Event Management adalah proyek dummy Laravel untuk melatih pemahaman struktur Laravel, Blade templating, autentikasi Breeze, dan implementasi CRUD. Cocok sebagai fondasi belajar maupun dasar pengembangan aplikasi tim.</p>
      </div>
    </div>
  </div>
</section>

{{-- FAQ --}}
<section id="faq" class="py-5" style="background:#8DD8FF;">
  <div class="container">
    <h2 class="text-center fw-bold mb-4">FAQ</h2>
    <div class="accordion" id="faqAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq1">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
            Apa itu Event Management?
          </button>
        </h2>
        <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion" style="color: chocolate;">
          <div class="accordion-body">
            Aplikasi dummy Laravel untuk latihan struktur, auth, dan CRUD event.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq2">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
            Apakah ini bisa langsung dipakai di production?
          </button>
        </h2>
        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion" style="color: chocolate;">
          <div class="accordion-body">
            Belum. Proyek ini hanya untuk latihan dan fondasi awal pengembangan.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="faq3">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
            Apakah ada sample user login?
          </button>
        </h2>
        <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion" style="color: chocolate;">
          <div class="accordion-body">
            Ya. Email: demo@example.com, Password: password (dari seeder).
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection
