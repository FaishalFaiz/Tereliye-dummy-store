<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tere Liye Store - Jelajahi Dunia Paralel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        /* Navbar dengan efek kaca (Glassmorphism) */
        .navbar-glass {
            background: rgba(33, 37, 41, 0.85);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .hero {
            /* Perbaikan syntax justify-content */
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1457369804613-52c61a468e7d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            /* Typo fixed: tadinya underscore (_) */
            text-align: center;
            position: relative;
        }

        .hero h1 {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            letter-spacing: 1px;
        }

        /* Animasi halus buat tombol */
        .btn-custom {
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(255, 193, 7, 0.4);
        }

        .feature-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .icon-box {
            font-size: 2.5rem;
            color: #ffc107;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-glass">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-book-half me-2"></i>Toko Tere Liye
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item ms-lg-3 my-3 md:my-0">
                        <a href="login.php" class="btn btn-outline-light btn-sm px-4 rounded-pill">Masuk</a>
                    </li>
                    <li class="nav-item ms-2 my-2 md:my-0">
                        <a href="register.php" class="btn btn-warning btn-sm px-4 rounded-pill fw-bold">Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="container">
            <span class="badge bg-warning text-dark mb-3 px-3 py-2 rounded-pill">Dummy Tere Liye Store</span>
            <h1 class="display-3 fw-bold mb-3">Cari Buku Favoritmu!</h1>
            <p class="lead mb-4 mx-auto" style="max-width: 600px;">
                Portal dummy untuk belanja semua karya Tere Liye. Mulai dari serial <i>Bumi</i>, <i>Pulang-Pergi</i>, hingga serial <i>Anak Nusantara</i>.
            </p>
            <div class="d-grid d-md-flex gap-3 justify-content-md-center">
                <a href="dashboard.php" class="btn btn-lg btn-warning btn-custom fw-bold px-5 rounded-pill">
                    Belanja Sekarang 🛒
                </a>
                <a href="#about" class="btn btn-lg btn-outline-light btn-custom fw-bold px-4 rounded-pill">
                    Tentang Kami
                </a>
            </div>
        </div>
    </section>

    <section id="about" class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Kenapa Belanja di Sini? 🤔</h2>
                <p class="text-muted">Toko kami terpercaya dengan berbagai macam kelebihan dan berbagai jenis buku Tere Liye.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card feature-card h-100 p-4 text-center">
                        <div class="card-body">
                            <div class="icon-box">
                                <i class="bi bi-check-circle-fill"></i>
                            </div>
                            <h4 class="card-title fw-bold">100% Original</h4>
                            <p class="card-text text-muted">Jaminan buku asli langsung dari penerbit. Gak main bajakan, dosa boy!</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card feature-card h-100 p-4 text-center">
                        <div class="card-body">
                            <div class="icon-box">
                                <i class="bi bi-collection-fill"></i>
                            </div>
                            <h4 class="card-title fw-bold">Koleksi Lengkap</h4>
                            <p class="card-text text-muted">Dari novel lawas sampai yang baru rilis "Teruslah Bodoh Jangan Pintar", semua ada.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card feature-card h-100 p-4 text-center">
                        <div class="card-body">
                            <div class="icon-box">
                                <i class="bi bi-lightning-charge-fill"></i>
                            </div>
                            <h4 class="card-title fw-bold">Pengiriman Kilat</h4>
                            <p class="card-text text-muted">Dikirim secepat kapsul perak Raib. Packing aman pake bubble wrap tebal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white py-4 text-center">
        <div class="container">
            <p class="mb-0">&copy; 2026 Made by @faishalfn1</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>