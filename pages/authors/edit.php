<?php
$pageTitle = "Edit Penulis";
$pageSubtitle = "Perbarui data penulis";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?> - Perpustakaan Digital</title>
    <link rel="stylesheet" href="../../styles/authors/edit.css">
</head>
<body>
    <div class="app-shell">
        <?php require_once __DIR__ . '/../../components/admin/sidebar.php'; ?>
        <div class="app-main">
            <?php require_once __DIR__ . '/../../components/admin/topbar.php'; ?>
            <main class="app-content">
                <div class="content-header">
                    <h2>Edit Penulis</h2>
                </div>
                <div class="card">
                    <form action="../../actions/authors/update.php" method="POST">
                        <input type="hidden" name="id" value="1">
                        <div class="form-group">
                            <label>Nama Penulis</label>
                            <input type="text" name="name" class="form-control" value="Andrea Hirata" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Perbarui</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
</body>
</html>