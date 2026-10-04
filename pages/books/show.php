<?php
$pageTitle = "Detail Buku";
$pageSubtitle = "Informasi lengkap mengenai buku";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?> - Perpustakaan Digital</title>
    <link rel="stylesheet" href="../../styles/books/show.css">
</head>
<body>
    <div class="app-shell">
        <?php require_once __DIR__ . '/../../components/admin/sidebar.php'; ?>
        <div class="app-main">
            <?php require_once __DIR__ . '/../../components/admin/topbar.php'; ?>
            <main class="app-content">
                <div class="content-header">
                    <h2>Detail Buku</h2>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                </div>
                <div class="card">
                    <h3>Laskar Pelangi</h3>
                    <p><strong>Penulis:</strong> Andrea Hirata</p>
                    <p><strong>Kategori:</strong> Fiksi</p>
                </div>
            </main>
        </div>
    </div>
</body>
</html>