<?php
require_once __DIR__ . '/../../repositories/category-repository.php';
require_once __DIR__ . '/../../repositories/author-repository.php';

$categories = getCategories();
$authors = getAuthors();

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
                        <div class="form-group" style="margin-bottom: 1rem;">
                            <label>Judul Buku</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>

                        <div class="form-group" style="margin-bottom: 1rem;">
                            <label>Kategori</label>
                            <select name="category_id" class="form-control" required>
                                <option value="">-- Pilih Kategori --</option>
                                <?php foreach ($categories as $cat): ?>
                                    <option value="<?= $cat['id'] ?>"><?= htmlspecialchars($cat['name']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group" style="margin-bottom: 1rem;">
                            <label>Penulis</label>
                            <select name="author_id" class="form-control" required>
                                <option value="">-- Pilih Penulis --</option>
                                <?php foreach ($authors as $author): ?>
                                    <option value="<?= $author['id'] ?>"><?= htmlspecialchars($author['name']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group" style="margin-bottom: 1rem;">
                            <label>Stok</label>
                            <input type="number" name="stock" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan Buku</button>
                        <a href="index.php" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </main>
        </div>
    </div>
</body>

</html>