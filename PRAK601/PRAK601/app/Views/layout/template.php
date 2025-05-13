<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Website Praktikum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
            min-height: 100vh;
        }
        .navbar {
            border-radius: 10px;
            margin-bottom: 30px;
        }
        .content-box {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
        }
    </style>
</head>
<body class="container mt-4">
    <nav class="navbar navbar-expand-lg bg-light shadow-sm">
        <div class="container-fluid">
            <h1 class="navbar-brand fw-bold text-primary">Muhammad Bukhari Fitri</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= uri_string() == '/' ? 'active text-primary ' : '' ?>" href="<?= base_url('/') ?>">Beranda</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link <?= uri_string() == 'profil' ? 'active text-primary ' : '' ?>" href="<?= base_url('/profil') ?>">Profil</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="content-box">
        <?= $this->renderSection('content') ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
