<?php
session_start();

// kalau sudah login, langsung ke admin.php
if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
    header("Location: admin.php");
    exit;
}
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <div class="card shadow-lg" style="max-width: 500px; width: 100%;">
      <div class="row g-0">

        <!-- KANAN: FORM LOGIN -->
        <div class="col-10 mx-auto py-5">
          <h3 class="mb-4 text-center">Login admin</h3>

          <form action="proses_login.php" method="POST">
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
            </div>

            <div class="d-grid">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>

          <a href="index.php" style="text-decoration : none; margin-top : 20px "> Kembali ke aspirasi  </a>
        </div>

      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
