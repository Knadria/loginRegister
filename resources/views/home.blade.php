<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>StudyBuddy Match | Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f9fafb;
      padding-top : 80px;
    }

    /* Navbar */
    .navbar-custom {
      background-color: #1E3A8A;
      padding: 20px 32px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }

    .navbar-custom .navbar-brand {
      color: #ffffff;
      font-weight: 700;
      font-size: 22px;
    }

    .navbar-custom .nav-link {
      color: #e0e7ff;
      font-weight: 600;
      margin-left: 16px;
    }

    .navbar-custom .nav-link:hover,
    .navbar-custom .nav-link.active {
      color: #ffffff;
    }

    .navbar-toggler-icon {
      filter: invert(1);
    }

    .hero {
      padding: 80px 20px;
      background: linear-gradient(135deg, #1E3A8A, #1D4ED8);
      color: white;
      text-align: center;
    }

    .hero h1 {
      font-weight: 800;
      margin-bottom: 16px;
    }

    .hero p {
      font-size: 18px;
      max-width: 720px;
      margin: auto;
    }

    .section {
      padding: 60px 20px;
    }

    .section-title {
      font-weight: 700;
      margin-bottom: 32px;
      text-align: center;
    }

    .card {
      border: none;
      border-radius: 14px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    }

    .cta {
      background-color: #1E3A8A;
      color: white;
      padding: 60px 20px;
      text-align: center;
    }


    /* Footer */
    footer {
      background-color: #0f172a;
      color: #e5e7eb;
      padding: 20px;
      text-align: center;
      font-size: 14px;
    }


.visi-section {
  background-color: #f8fafc;
}

.visi-box {
  background: #ffffff;
  padding: 28px;
  border-left: 6px solid #1E3A8A;
  border-radius: 14px;
  box-shadow: 0 6px 14px rgba(0,0,0,0.06);
}


  </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">StudyBuddy Match</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Search Buddy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Resource</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


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

<footer>
  © 2025 StudyBuddy Match — Mendukung SDG 4 Pendidikan Berkualitas
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
