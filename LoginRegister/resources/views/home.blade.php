@extends('master')
@section('title','Home Page')
@section('content')

<section class="hero">
  <h1>Temukan Teman Belajar yang Tepat</h1>
  <p>
    StudyBuddy Match adalah platform yang membantu mahasiswa menemukan partner belajar
    berdasarkan jadwal, mata kuliah, dan tingkat pemahaman yang serupa.
    Mendukung kolaborasi dan pendidikan berkualitas (SDG 4).
  </p>
</section>


<section class="section visi-section">
  <div class="container">

    <h2 class="fw-bold text-center mb-5">Tujuan & Visi Misi</h2>

    <div class="row g-4">

      <div class="col-md-4">
        <div class="visi-box card-animate">
          <h5 class="fw-bold mb-2">Tujuan</h5>
          <p class="text-muted mb-0">
            Membantu mahasiswa menemukan partner belajar
            yang sesuai untuk pembelajaran.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="visi-box card-animate">
          <h5 class="fw-bold mb-2">Visi</h5>
          <p class="text-muted mb-0">
            Menjadi platform pembelajaran kolaboratif
            yang mendukung pengembangan akademik.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="visi-box card-animate">
          <h5 class="fw-bold mb-2">Misi</h5>
          <p class="text-muted mb-0">
            Menghubungkan mahasiswa dan mendorong
            kolaborasi belajar yang produktif.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="section container text-center">
  <h2 class="fw-bold mb-5">Fitur Unggulan</h2>

  <div class="row g-4">

    <div class="col-md-4">
      <div class="card h-100 p-4 shadow-sm">
        <img src="https://cdn-icons-png.flaticon.com/512/942/942748.png"
             style="width:80px" class="mx-auto mb-3">
        <h4 class="fw-bold">Matching Otomatis</h4>
        <p class="text-muted">
          Sistem mencocokkan teman belajar berdasarkan jurusan dan mata kuliah.
        </p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card  h-100 p-4 shadow-sm">
        <img src="https://cdn-icons-png.flaticon.com/512/476/476863.png"
             style="width:80px" class="mx-auto mb-3">
        <h4 class="fw-bold">Diskusi Kolaboratif</h4>
        <p class="text-muted">
          Belajar bersama agar lebih fokus dan termotivasi.
        </p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100 p-4 shadow-sm">
        <img src="https://cdn-icons-png.flaticon.com/512/2991/2991148.png"
             style="width:80px" class="mx-auto mb-3">
        <h4 class="fw-bold">Resource Sharing</h4>
        <p class="text-muted">
          Berbagi materi, catatan, dan referensi belajar.
        </p>
      </div>
    </div>

  </div>
</section>


<section class="section container">
  <div class="row text-center">
    <div class="col-md-4">
      <h2 class="fw-bold">1.200+</h2>
      <p class="text-muted">Mahasiswa</p>
    </div>
    <div class="col-md-4">
      <h2 class="fw-bold">86%</h2>
      <p class="text-muted">Cocok Belajar</p>
    </div>
    <div class="col-md-4">
      <h2 class="fw-bold">SDG 4</h2>
      <p class="text-muted">Pendidikan</p>
    </div>
  </div>
</section>

<section class="hero d-flex align-items-center">
  <div class="container">
    <div class="row align-items-center">
      
      <div class="col-md-6 text-white">
        <h1 class="fw-bold">Belajar Lebih Efektif</h1>
        <p>Temukan teman belajar yang cocok denganmu</p>
        <br>
        <button class="btn btn-success px-4 fw-bold">Mulai Sekarang</button>
      </div>

      <div class="col-md-6 text-center">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png"
             class="img-fluid"
             style="max-height:280px"
             alt="Study Illustration">
      </div>

    </div>
  </div>
</section>


@endsection