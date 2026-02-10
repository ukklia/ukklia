<?php   
include 'koneksi.php';

// Ambil data aspirasi beserta kategori
$query = "SELECT 
        a.*,
        k.ket_kategori
    FROM aspirasi a
    JOIN kategori k ON a.id_kategori = k.id_kategori
    ORDER BY a.id_aspirasi DESC ";

$result_set = mysqli_query($koneksi, $query);
$row = [];
while ($rows = mysqli_fetch_assoc($result_set)) {
    $row[] = $rows;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APS | Umpan Balik</title>
 <link rel="stylesheet" href="color.css">
</head>
<body>

    <?php include 'navbar.php'; ?>

    <div class="umpanbalik">
        <h1>Umpan Balik</h1>
        <p class="intro">Terima kasih telah mengirimkan aspirasi Anda. Berikut adalah umpan balik dari pihak sekolah:</p>
        
        <?php foreach ($row as $r): ?>
        <div class="feedback-card">
            <h3>Aspirasi tentang <?= htmlspecialchars($r['ket_kategori']); ?></h3>
            <p><strong>NIS: </strong> <?= htmlspecialchars($r['nis']); ?></p>
            <p><strong>Lokasi: </strong> <?= htmlspecialchars($r['lokasi']); ?></p>
            <p><strong>Keterangan: </strong> <?= htmlspecialchars($r['keterangan']); ?></p>
            <p><strong>Status: </strong> <?= htmlspecialchars($r['status']); ?></p>
            <p><strong>Feedback: </strong><?= htmlspecialchars($r['feedback']); ?> </p>
        </div>
        <?php endforeach; ?>
    </div>

</body>
</html>


