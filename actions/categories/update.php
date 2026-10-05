<?php
$id = $_POST['id'] ?? null;
$name = $_POST['name'] ?? null;
header('Location: ../../pages/categories/index.php');
exit;