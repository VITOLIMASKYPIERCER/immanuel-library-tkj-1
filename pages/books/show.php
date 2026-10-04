<?php
require_once __DIR__ . '/../../repositories/book-repository.php';

$id = $_GET['id'] ?? null;
$book = getBook($id);

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

                <?php if ($book): ?>
                    <div class="card">
                        <h3><?= htmlspecialchars($book['title']) ?></h3>
                        <p><strong>Kategori:</strong> <?= htmlspecialchars($book['category']) ?></p>
                        <p><strong>Penulis:</strong> <?= htmlspecialchars($book['author']) ?></p>
                        <p><strong>Stok:</strong> <?= htmlspecialchars($book['stock']) ?></p>
                    </div>
                <?php else: ?>
                    <div class="card">
                        <p>Data buku tidak ditemukan.</p>
                    </div>
                <?php endif; ?>
            </main>
        </div>
    </div>
</body>

</html>