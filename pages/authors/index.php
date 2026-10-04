<?php
$pageTitle = "Manajemen Penulis";
$pageSubtitle = "Kelola data penulis buku";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?> - Perpustakaan Digital</title>
    <link rel="stylesheet" href="../../styles/authors/index.css">
</head>
<body>
    <div class="app-shell">
        <?php require_once __DIR__ . '/../../components/admin/sidebar.php'; ?>
        <div class="app-main">
            <?php require_once __DIR__ . '/../../components/admin/topbar.php'; ?>
            <main class="app-content">
                <div class="content-header">
                    <h2>Daftar Penulis</h2>
                    <a href="create.php" class="btn btn-primary">+ Tambah Penulis</a>
                </div>
                <div class="card">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Penulis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Andrea Hirata</td>
                                <td>
                                    <a href="edit.php?id=1" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="../../actions/authors/destroy.php?id=1" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</body>
</html>