<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Administrator</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light d-flex flex-column min-vh-100">
    <!-- Main Content -->
    <div class="container flex-grow-1 d-flex align-items-center justify-content-center">
        <div class="row justify-content-center w-100">
            <div class="col-md-6 col-lg-4">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white text-center py-4">
                        <h4 class="card-title mb-1 fw-bold">Administrator</h4>
                        <p class="mb-0 fw-light">Login ke Sistem Undangan</p>
                    </div>
                    <div class="card-body p-4">
                        <form action="proses_login.php" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label fw-semibold">Username</label>
                                <input type="text"
                                    class="form-control form-control-lg"
                                    id="username"
                                    name="username"
                                    placeholder="Masukkan username"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label fw-semibold">Password</label>
                                <input type="password"
                                    class="form-control form-control-lg"
                                    id="password"
                                    name="password"
                                    placeholder="Masukkan password"
                                    required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="remember">Ingat saya</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100 fw-semibold">Masuk</button>
                        </form>

                        <!-- Alert untuk pesan error/success -->
                        <?php if (isset($_GET['error'])): ?>
                            <div class="alert alert-danger mt-3" role="alert">
                                <?php
                                $error = $_GET['error'];
                                if ($error == 'invalid') {
                                    echo "Username atau password salah!";
                                } elseif ($error == 'empty') {
                                    echo "Harap isi semua field!";
                                } else {
                                    echo "Terjadi kesalahan!";
                                }
                                ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-primary text-white py-3 mt-auto">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="mb-0 small">&copy; 2025 Anwar Maulana, S.Kom. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>