<?php
$pageTitle = "Manajemen Buku";
$pageSubtitle = "Kelola daftar buku perpustakaan";
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?> - Perpustakaan Digital</title>
    <link rel="stylesheet" href="../../styles/books/index.css">
</head>

<body>
    <div class="app-shell">
        <!-- Panggil Component Sidebar -->
        <?php require_once __DIR__ . '/../../components/admin/sidebar.php'; ?>

        <div class="app-main">
            <!-- Panggil Component Topbar -->
            <?php require_once __DIR__ . '/../../components/admin/topbar.php'; ?>

            <!-- Konten Utama -->
            <main class="app-content">
                <div class="content-header">
                    <div>
                        <h2>Daftar Buku</h2>
                        <p class="text-muted">Menampilkan seluruh data buku yang terdaftar</p>
                    </div>
                    <a href="create.php" class="btn btn-primary">+ Tambah Buku</a>
                </div>

                <div class="card">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Buku</th>
                                    <th>Kategori</th>
                                    <th>Penulis</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Laskar Pelangi</td>
                                    <td><span class="badge badge-category">Fiksi</span></td>
                                    <td>Andrea Hirata</td>
                                    <td>12</td>
                                    <td>
                                        <div class="action-buttons">
                                            <a href="show.php?id=1" class="btn btn-sm btn-info">Detail</a>
                                            <a href="edit.php?id=1" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="../../actions/books/destroy.php?id=1" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>