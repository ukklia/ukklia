<?php
include 'koneksi.php';
session_start();
// CEK LOGIN
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

// Ambil data aspirasi
$query = "SELECT a.* , k.ket_kategori
          FROM aspirasi a
          JOIN kategori k ON a.id_kategori = k.id_kategori
          ORDER BY a.id_aspirasi DESC";

$data = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Admin | Kelola Aspirasi</title>
    <link rel="stylesheet" href="color.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="admin">
    <h1>Kelola Aspirasi</h1>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Kategori</th>
                <th>Lokasi</th>
                <th>Keterangan</th>
                <th>Status</th>
                <th>Feedback</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 1; ?>
        <?php foreach ($data as $d): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= htmlspecialchars($d['nis']) ?></td>
                <td><?= htmlspecialchars($d['ket_kategori']) ?></td>
                <td><?= htmlspecialchars($d['lokasi']) ?></td>
                <td><?= htmlspecialchars($d['keterangan']) ?></td>
                <td>
                    <span class="status">
                        <?= $d['status'] ?>
                    </span>
                </td>
                <td>
                    <form action="update_status.php" method="post">
                        <input type="hidden" name="id" value="<?= $d['id_aspirasi'] ?>">
                        <textarea name="feedback" rows="2"><?= htmlspecialchars($d['feedback']) ?></textarea>
                </td>
                <td>
                        <select name="status">
                            <option value="menunggu" <?= $d['status']=='menunggu'?'selected':'' ?>>menunggu</option>
                            <option value="proses" <?= $d['status']=='proses'?'selected':'' ?>>proses</option>
                            <option value="selesai" <?= $d['status']=='selesai'?'selected':'' ?>>selesai</option>
                        </select>
                        <button type="submit">Update</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>

