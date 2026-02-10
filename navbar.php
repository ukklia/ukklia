<div class="navbar">
    <div class="logo">Aplikasi Pengaduan Sekolah</div>
    <ul>
        <li><a href="index.php">Aspirasi</a></li>
        <li><a href="umpanbalik.php">Umpan Balik</a></li>

        <?php if (isset($_SESSION['login'])): ?>
            <li><a href="logout.php">Logout</a></li>
        <?php else: ?>
            <li><a href="login.php">Login</a></li>
        <?php endif; ?>
    </ul>
</div>
