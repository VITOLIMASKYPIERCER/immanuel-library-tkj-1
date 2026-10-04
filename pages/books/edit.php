<?php
require_once __DIR__ . '/../../repositories/book-repository.php';

$id = $_GET['id'] ?? null;
$book = getBook($id);

$pageTitle = "Edit Buku";
$pageSubtitle = "Perbarui informasi data buku";
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?> - Perpustakaan Digital</title>
    <link rel="stylesheet" href="../../styles/books/edit.css">
</head>

<body>
    <div class="app-shell">
        <?php require_once __DIR__ . '/../../components/admin/sidebar.php'; ?>

        <div class="app-main">
            <?php require_once __DIR__ . '/../../components/admin/topbar.php'; ?>

            <main class="app-content">
                <div class="content-header">
                    <h2>Edit Buku</h2>
                </div>

                <div class="card">
                    <?php if ($book): ?>
                        <form action="../../actions/books/update.php" method="POST">
                            <input type="hidden" name="id" value="<?= $book['id'] ?>">
                            
                            <div class="form-group" style="margin-bottom: 1rem;">
                                <label>Judul Buku</label>
                                <input type="text" name="title" class="form-control" value="<?= htmlspecialchars($book['title']) ?>" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Perbarui Buku</button>
                            <a href="index.php" class="btn btn-secondary">Batal</a>
                        </form>
                    <?php else: ?>
                        <p>Data buku tidak ditemukan.</p>
                    <?php endif; ?>
                </div>
            </main>
        </div>
    </div>
</body>

</html>