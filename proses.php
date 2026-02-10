<?php
include 'koneksi.php';

$nis        = $_POST['nis'];
$kategori   = $_POST['kategori'];
$lokasi     = $_POST['lokasi'];
$keterangan = $_POST['keterangan'];

$status   = 'menunggu';
$feedback = 'Terima kasih atas masukannya. Kami akan segera memprosesnya.';

/* cek NIS */
$cek = mysqli_query($koneksi, "SELECT nis FROM siswa WHERE nis='$nis'");

if (mysqli_num_rows($cek) == 0) {
    echo "<script>
            alert('NIS tidak terdaftar');
            window.location.href = 'index.php';
          </script>";
    exit;
}

/* simpan aspirasi */
mysqli_query(
    $koneksi,
    "INSERT INTO aspirasi (nis, id_kategori, lokasi, keterangan, status, feedback)
     VALUES ('$nis', '$kategori', '$lokasi', '$keterangan', '$status', '$feedback')"
);

echo "<script>
        alert('Aspirasi berhasil dikirim');
        window.location.href = 'umpanbalik.php';
      </script>";
exit;
