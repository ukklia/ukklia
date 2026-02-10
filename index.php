<?php if (isset($_GET['error']) && $_GET['error'] == 'nis_tidak_ditemukan'): ?>
    <div class="alert error">
        ❌ NIS tidak ditemukan. Silakan periksa kembali.
    </div>
<?php endif; ?>

<?php if (isset($_GET['success'])): ?>
    <div class="alert success">
        ✅ Aspirasi berhasil dikirim.
    </div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>APS | Aspirasi</title>
    <link rel="stylesheet" href="color.css">
</head>
<body>
	<?php
include 'navbar.php';
?>
    <!-- FORM ASPIRASI -->
    <div class="container">
        <h1>Aspirasi</h1>

        <form method="post" action="proses.php">
            <label>NIS</label>
            <input type="number" name="nis" required>

            <label>Kategori</label>
            <select name="kategori" required>
                <option value="" disabled selected>Pilih Kategori</option>
                <option value="1">Sarana</option>
                <option value="2">Prasarana</option>
            </select>

            <label>Lokasi</label>
            <input type="text" name="lokasi" required>

            <label>Keterangan</label>
            <textarea name="keterangan" required></textarea>

            <button type="submit">Kirim</button>
        </form>
    </div>

</body>
</html>
