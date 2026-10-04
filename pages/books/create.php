<?php
$pageTitle = "Tambah Buku";
$pageSubtitle = "Tambah data buku baru ke perpustakaan";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?> - Perpustakaan Digital</title>
    <link rel="stylesheet" href="../../styles/books/create.css">
</head>
<body>
    <div class="app-shell">
        <?php require_once __DIR__ . '/../../components/admin/sidebar.php'; ?>
        <div class="app-main">
            <?php require_once __DIR__ . '/../../components/admin/topbar.php'; ?>
            <main class="app-content">
                <div class="content-header">
                    <h2>Tambah Buku Baru</h2>
                </div>
                <div class="card">
                    <form action="../../actions/books/store.php" method="POST">
                        <div class="form-group">
                            <label>Judul Buku</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Buku</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
</body>
</html>