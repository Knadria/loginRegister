<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
    <title>@yield('title')</title>
</head>
<body class="mb-100">
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
                <a class="nav-link" href="/loginForm">Login</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/registerForm">Register</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/logoutProcess">Logout</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <section>
        @yield('content')
    </section>

    <footer>
         © 2025 StudyBuddy Match — Mendukung SDG 4 Pendidikan Berkualitas
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>